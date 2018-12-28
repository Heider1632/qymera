//Change id to your id
$("#file").on("change", function (e) {
    var file = $(this)[0].files[0];
    var upload = new Upload(file);

    $('#textFile').html(upload.getName());
    // maby check size or type here with upload.getSize() and upload.getType()

    // execute upload
    upload.doUpload();
});

var Upload = function (file) {
    this.file = file;
};

Upload.prototype.getType = function() {
    return this.file.type;
};
Upload.prototype.getSize = function() {
    return this.file.size;
};
Upload.prototype.getName = function() {
    return this.file.name;
};
Upload.prototype.doUpload = function () {
    var that = this;
    var grade = $('#id_grade').text();
    var id_grade = $('#id_grade').val();
    var id_matter = $('#id_matter').val();
    var formData = new FormData();

    // add assoc key values, this will be posts values
    formData.append("file", this.file, this.getName());
    formData.append("grade", grade);
    formData.append("id_grade", id_grade);
    formData.append("id_matter", id_matter);
    formData.append("upload_file", true);

    $.ajax({
        method: "POST",
        url: "areaplanes&action=upload",
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
            swal('Error', 'No se pudo completar la información', 'error');
          }else if(response == 2){
            swal('Alerta', 'Los campos estan vacios', 'warning');
          }else if(response == 3){
            swal('Alerta', 'El tipo de archivo no es correcto.', 'warning');
            location.reload();
          }else if(response == 4){
            swal('Alerta', 'Ocurrió algún error al subir el fichero. No pudo guardarse.', 'warning');
          }else if(response == 5){
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

Upload.prototype.progressHandling = function (event) {
    var percent = 0;
    var position = event.loaded || event.position;
    var total = event.total;
    var progress_bar_id = "#progress-wrp";
    if (event.lengthComputable) {
        percent = Math.ceil(position / total * 100);
    }
    // update progressbars classes so it fits your code
    $(progress_bar_id + " .status").text(percent + "%");
    $(progress_bar_id + " .status").val(percent);
};
