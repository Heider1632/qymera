//global variable
var protocol = window.location.protocol;

if(protocol === 'http:'){
  var url = 'http://localhost:8888/qymera/';
}else{
  var url = 'https://qymera.net/';
}


/**
 * SEDES FUNCTIONS 
 */

$('#BtnAddSede').click( (e) => {

  var name = $('#NameSede').val();
  var population = $('#population').val();
  var location = $('#location').val();
  var agent = $('#agent').val();
  var contact = $('#contact').val();

  $.ajax({
    method: 'POST',
    url: url + 'directivo/post/createsede/',
    data: { name: name, population: population, location: location, agent: agent, contact: contact },
    success: function(response){
      if(response == 1){
        Swal.fire({
          position: 'top-end',
          type: 'error',
          title: 'No se ha podido completar la operación',
          showConfirmButton: true,
        }).then( () => {
          window.location.reload();
        })
      }else if(response == 2){
        Swal.fire({
          position: 'top-end',
          type: 'warning',
          title: 'Algunos campos estan vacios',
          showConfirmButton: false,
          timer: 1500
        })

      }else if(response == 3){
        Swal.fire({
          position: 'top-end',
          type: 'warning',
          title: 'La sede ya existe!',
          showConfirmButton: false,
          timer: 1500
        })
      }else if(response == 4){  
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Sede creada',
          showConfirmButton: true,
        }).then( () => {
          window.location.reload();
        })        
      }else{
        console.log(response);
      }
    }
  })

  e.preventDefault();

})


/**
 * GRADES FUNCTIONS
 */

$('#BtnGrade').click(function () {

    var name = $('#TxtGrade').val();

    $.ajax({
      method: 'POST',
      url: url + 'directivo/post/creategrades/',
      data: {
        name: name
      },
      success: function (response) {
        if (response == 1) {
          Swal.fire({
            position: 'top-end',
            type: 'error',
            title: 'No se ha podido completar la operación',
            showConfirmButton: true,
          }).then( () => {
            window.location.reload();
          })
        } else if (response == 2) {

          Swal.fire({
            position: 'top-end',
            type: 'warning',
            title: 'Algunos campos estan vacios',
            showConfirmButton: false,
            timer: 1500
          })
          
        } else if(response == 3){
          Swal.fire({
            position: 'top-end',
            type: 'warning',
            title: 'El grado ya existe!',
            showConfirmButton: false,
            timer: 1500
          })
        }else{
          swal('Exito!', 'grado añadido', 'success');

          location.reload();
        }
      }
  })
})

function addGrade(event, res) {

  var button = event.target;

  var i = document.createElement('i');

  var name = res;
  $.ajax({
    method: 'POST',
    url: url + 'directivo/post/creategrades/',
    data: {
      name: name
    },
    beforeSend: function () {
      button.classList.add('is-loading');
    },
    success: function (response) {
      button.classList.remove('is-loading');

      if (response == 1) {
        Swal.fire({
          position: 'top-end',
          type: 'error',
          title: 'No se ha podido completar la operación',
          showConfirmButton: true,
        }).then( () => {
          window.location.reload();
        })
      } else if (response == 2) {

        button.classList.remove('is-success');
        button.classList.add('is-warning');
        button.appendChild(i);

        $('i').addClass('fas fa-exclamation-circle');
      } else {
        button.innerHTML = '';
        button.classList.add('is-success');
        button.appendChild(i);

        $('i').addClass('fas fa-check');
      }
    }
  })

}

/**
 * GROUPS FUNCTIONS 
 */

 $('#BtnAddPrimaryGroup').click(function(event){

  var button = event.target;

  var sede = $('#TxtSelectSede').val();

  var id_grade = $('#TxtSelectPrimaryName').val();

  var id_group = $('#TxtSelectPrimaryGroup').val();

  var code = id_grade.concat(id_group);

  var i = document.createElement('i');

  $.ajax({
    method: 'POST',
    url: url + 'directivo/post/creategroups/',
    data: {id_grade: id_grade, id_group: id_group, code: code, sede: sede},
    beforeSend: function(){
      button.classList.add('is-loading');

    },
    success: function(response){
      button.classList.remove('is-loading');

      button.innerHTML = '';

      if(response == 1){
        Swal.fire({
          position: 'top-end',
          type: 'error',
          title: 'No se ha podido completar la operación',
          showConfirmButton: true,
        })
      }else if(response == 2){
        button.classList.remove('is-info');
        button.classList.add('is-warning');
        button.appendChild(i);

        $('i').addClass('fas fa-exclamation-circle');
      }else if(response == 3){
        button.classList.add('is-success');
        button.appendChild(i);

        $('i').addClass('fas fa-check');

        console.log(response);

      }else{
        console.error(response);
      }

      location.reload();

    }
  })


})

$('#BtnAddBalechorGroup').click(function(event){

  var button = event.target;

  var sede = $('#TxtSelectSede').val();

  var id_grade = $('#TxtSelectBalechorName').val();

  var id_group = $('#TxtSelectBalechorGroup').val();

  var code = id_grade.concat(id_group);

  var i = document.createElement('i');

  $.ajax({
    method: 'POST',
    url: url + 'directivo/post/creategroups/',
    data: {id_grade: id_grade, id_group: id_group, code: code, sede: sede},
    beforeSend: function(){
      button.classList.add('is-loading');

    },
    success: function(response){
      button.classList.remove('is-loading');
      button.innerHTML = '';

      if(response == 1){
        Swal.fire({
          position: 'top-end',
          type: 'error',
          title: 'No se ha podido completar la operación',
          showConfirmButton: true,
        })
      }else if(response == 2){

        button.classList.remove('is-success');

        button.classList.add('is-warning');
        button.appendChild(i);

        $('i').addClass('fas fa-exclamation-circle');
      }else{
        button.classList.add('is-success');
        button.appendChild(i);

        $('i').addClass('fas fa-check');
      }

      location.reload();
    }
  })
})

/**
 * MATTERS FUNCTIONS
 */

$('#BtnAddMatter').click(function(){
    var NameMatter = $('#NameMatter').val();

    $.ajax({
        method: 'POST',
        url: url + 'directivo/post/creatematter',
        data: { NameMatter: NameMatter },
        success: function(response){
            if(response == 1){
               Swal.fire({
                position: 'top-end',
                type: 'error',
                title: 'No se ha podido completar la operación',
                showConfirmButton: true,
              }).then( () => {
                window.location.reload();
              })
            }else if(response == 2){
                Swal.fire({
                  position: 'top-end',
                  type: 'warning',
                  title: 'Algunos campos estan vacios',
                  showConfirmButton: false,
                  timer: 1500
                })
            }else if(response == 3){
                  Swal.fire({
                    position: 'top-end',
                    type: 'warning',
                    title: 'La materia ya existe!',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }else if(response == 4){    
                  Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: 'La materia ha sido creada',
                    showConfirmButton: true,
                  }).then( () => {
                    window.location.reload();
                  })
            }else{
                console.log(response);
            }
        }
    })
})

/**
 * TEACHERS FUNCTIONS
 */

$('#BtnAddTeacher').click(function(){

  var first_name = $('#first_name').val();
  var second_name = $('#second_name').val();
  var first_lastname = $('#first_lastname').val();
  var second_lastname = $('#second_lastname').val();
  var email = $('#UserEmail').val();
  var type = $('#type').val();


  //var caracteres = "abcdefghijkmnpqrtuvwxyzABCDEFGHIJKLMNPQRTUVWXYZ2346789";
  var contraseña = "qymera";
  //var longitud = "8";

  //for (i=0; i<longitud; i++) contraseña += caracteres.charAt(Math.floor(Math.random()*caracteres.length));

  $.ajax({
    method: 'POST',
    url: url + 'directivo/post/createteacher/',
    data: { first_name: first_name, second_name: second_name, first_lastname: first_lastname, second_lastname:  second_lastname, email: email, contraseña: contraseña, type: type},
    success:  function(response){
      if(response == 1){
          Swal.fire({
          position: 'top-end',
          type: 'error',
          title: 'No se ha podido completar la operación',
          showConfirmButton: true,
        }).then( () => {
          window.location.reload();
        })
      }else if(response == 2){
         Swal.fire({
              position: 'top-end',
              type: 'warning',
              title: 'Algunos campos estan vacios',
              showConfirmButton: false,
              timer: 1500
            })
      }else if(response == 3){
         Swal.fire({
            position: 'top-end',
            type: 'warning',
            title: 'El docente ya existe!',
            showConfirmButton: false,
            timer: 1500
          })
      }else if(response == 4){  
         Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Docente Añadido',
            showConfirmButton: true,
        }).then( () => {
            window.location.reload();
          })
      }else{
        console.log(response);
      }
    }
  })
})

/**
 * CHARGES ACADEMIC FUNCTIONS
 */


$('#BtnAddAssign').click(function(){

  var id_teacher = $('#id_teacher').val();
  var id_matter = $('#id_matter').val();
  var id_grade = $('#id_grade').val();
  var id_group = $('#id_group').val();
  var id_sede = $('#id_sede').val();

  $.ajax({
    method: 'POST',
    url: url + 'directivo/post/createassign/',
    data: { id_teacher: id_teacher, id_matter: id_matter, id_grade: id_grade, id_group: id_group, id_sede: id_sede },
    success: function(response){
      if(response == 1){
       Swal.fire({
          position: 'top-end',
          type: 'error',
          title: 'No se ha podido completar la operación',
          showConfirmButton: true,
        }).then( () => {
          window.location.reload();
        })
      }else if(response == 2){

         Swal.fire({
            position: 'top-end',
            type: 'warning',
            title: 'la carga academica del docente ya existe!',
            showConfirmButton: false,
            timer: 1500
          })
      }else if(response == 3){  
         Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'carga academica añadida',
            showConfirmButton: true,
          }).then( () => {
            window.location.reload();
          })
      }else{
        console.log(response);
      }

    }
  })
})


/**
 * CONFIG FUNCTIONS
 */

$('#BtnFinishConfig').click(function(){
  var finishconfig = true;
  $.ajax({
    method: 'POST',
    url: url + 'qymera/directivo/post/finishconfig/',
    data: { finishconfig: finishconfig },
    success: function(response){
      if(response == 1){
       Swal.fire({
          position: 'top-end',
          type: 'error',
          title: 'No se ha podido completar la operación',
          showConfirmButton: true,
        }).then( () => {
          window.location.reload();
        })
      }else if(response == 2){
        location.href = url + "directivo/home/";
      }else{
        console.log(response);
      }
    }
  })
})





