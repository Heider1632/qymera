$('#BtnAddGroup').click(function(e){
  var $this = $(this);
  var group = $('#TxtSelectGroup').val();
  var grade = $this.parents('tr').children()[0].outerText;

  console.log(grade + "-" + group);

  e.preventDefault();
})
