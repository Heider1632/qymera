//global variable
var protocol = window.location.protocol;

if(protocol === 'http:'){
  var url_dir = 'http://localhost:8888/qymera/';

}else if(protocol === 'https:'){

  var url_dir = 'https://qymera.net/';
  
}else{
  console.error(protocol);
}

/**
 * DIRECTOR GROUPS FUNCTIONS
 */

$('#BtnAddDirectorGroup').click( () => {

})

$('#BtnEditDirectorGroup').click( () => {
	
})

function DeleteDirectorGroup(id, e){

}

/**
 * TEACHERS FUNCTIONS
 */

$('#BtnEditTeacher').click( () => {
	
})

function DeleteTeacher(id, e){

}

/**
 * GRADES FUNCTIONS
 */


/**
 * GROUPS FUNCTIONS
 */

 /**
  * STUDENTS FUNCTION
  */

  $('#BtnAddPrimaryStudent').click( (e) => {

    var first_name = $('#First_name').val();
    var second_name = $('#Second_name').val();
    var first_lastname = $('#First_lastname').val();
    var second_lastname = $('#Second_lastname').val();
    var id_group = $('#id_group').val();

    $.ajax({
      method: 'POST',
      url: url + 'directivo/post/addstudent/',
      data: { first_name: first_name, second_name: second_name, first_lastname: first_lastname, second_lastname: second_lastname, id_group: id_group},
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
            title: 'El estudiante ya existe!',
            showConfirmButton: false,
            timer: 1500
          })
        }else if(response == 4){  
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Estudiante añadido',
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

  $('#BtnAddBalechorStudent').click( () => {

    var first_name = $('#First_name').val();
    var second_name = $('#Second_name').val();
    var first_lastname = $('#First_lastname').val();
    var second_lastname = $('#Second_lastname').val();
    var id_group = $('#id_group').val();

    $.ajax({
      method: 'POST',
      url: url + 'directivo/post/addstudent/',
      data: { first_name: first_name, second_name: second_name, first_lastname: first_lastname, second_lastname: second_lastname, id_group: id_group},
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
            title: 'El estudiante ya existe!',
            showConfirmButton: false,
            timer: 1500
          })
        }else if(response == 4){  
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Estudiante añadido',
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
    
  } )


  /** CHARGES ACADEMIC */
  $('#sendPrimaryCharge').click( (e) => {

    let id_teacher = $('#id_primary_teacher').val();

    let id_matter = $('#id_primary_matter').val();

    let id_group = $('#id_primary_group').val();

    $.ajax({
      method: 'POST',
      url: url + 'directivo/post/addCharge/',
      data: { id_teacher: id_teacher, id_matter: id_matter, id_group: id_group},
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
            title: 'La información ya existe!',
            showConfirmButton: false,
            timer: 1500
          })
        }else if(response == 4){  
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Carga Academica añadida',
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

  $('#sendBalechorCharge').click( (e) => {

    let id_teacher = $('#id_balechor_teacher').val();

    let id_matter = $('#id_balechor_matter').val();

    let id_group = $('#id_balechor_group').val();
    
    $.ajax({
      method: 'POST',
      url: url + 'directivo/post/addCharge/',
      data: { id_teacher: id_teacher, id_matter: id_matter, id_group: id_group},
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
            title: 'La información ya existe!',
            showConfirmButton: false,
            timer: 1500
          })
        }else if(response == 4){  
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Carga Academica añadida',
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

  /** INDICATORS */
  $('#sendIndicatorToRepository').click( (e) => {

    let name = $('#name').val();

    let author = $('#author').val();

    let matter = $('#matter').val(); 

    let period = $('#period').val();

    let grade = $('#grade').val();
    
    let indicator = name.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, ' ').replace(/\d/g,'');  

    $.ajax({
      method: 'POST',
      url: url + 'directivo/post/addIndicatorToRepository/',
      data: { indicator: indicator, author: author, matter: matter, period: period, grade: grade},
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
            title: 'El indicador ya existe en el repositorio!',
            showConfirmButton: false,
            timer: 1500
          })
        }else if(response == 4){  
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Indicador añadido al repositorio correctamente',
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



