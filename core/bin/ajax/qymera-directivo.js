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



