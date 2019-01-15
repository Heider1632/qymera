//Change id to your id
$("#image-profile").on("change", function (e) {
    var file = $(this)[0].files[0];
    var uploadImageProfile = new UploadImageProfile(file);

    $('.file-name').html(uploadImageProfile.getName());
    // maby check size or type here with upload.getSize() and upload.getType()

    // execute upload
    uploadImageProfile.doUpload();
});

var UploadImageProfile = function (file) {
    this.file = file;
};

UploadImageProfile.prototype.getType = function() {
    return this.file.type;
};
UploadImageProfile.prototype.getSize = function() {
    return this.file.size;
};
UploadImageProfile.prototype.getName = function() {
    return this.file.name;
};
UploadImageProfile.prototype.doUpload = function () {
    var that = this;
    var formData = new FormData();

    // add assoc key values, this will be posts values
    formData.append("image-profile", this.file, this.getName());
    formData.append("upload_file", true);

    $.ajax({
        method: "POST",
        url: "http://localhost:8888/qymera/perfil/upload/",
        xhr: function () {
            var myXhr = $.ajaxSettings.xhr();
            if (myXhr.upload) {
                myXhr.upload.addEventListener('progress', that.progressHandling, false);
            }
            return myXhr;
        },
        data: formData,
        success: function (response) {
          if(response == 1){
            swal('Alerta', 'Los campos estan vacios', 'warning');
            location.reload();
          }else if(response == 2){
            swal('Alerta', 'El tipo de archivo no es correcto.', 'warning');
            location.reload();
          }else if(response == 3){
            swal('Alerta', 'Ocurrió algún error al subir el fichero. No pudo guardarse.', 'warning');
            location.reload();
          }else if(response == 4){
            swal('Exito', 'Subido con exito', 'success');
            location.reload();
          }else{
            console.log(response);
          }
        },
        error: function (error) {
            console.error(error);
        },
        async: true,
        cache: false,
        contentType: false,
        processData: false,
        timeout: 5000
    });
};

UploadImageProfile.prototype.progressHandling = function (event) {
    var percent = 0;
    var position = event.loaded || event.position;
    var total = event.total;
    var progress_bar_id = "#progress-wrapper";
    if (event.lengthComputable) {
        percent = Math.ceil(position / total * 100);
    }
    // update progressbars classes so it fits your code
    $(progress_bar_id + " .status").text(percent + "%");
    $(progress_bar_id + " .status").val(percent);
};
