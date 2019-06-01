// hide all div containers
$('.contenido').hide();

$(".preview").click(function(e) {
    $(this).parent().next('.contenido').slideToggle('slow');

    // set the current item as active
    $(this).parent().toggleClass('active');

    e.preventDefault();
});


$(".show-indicator").click( (e) => {

  $('#hidden-table-indicator').toggle('slow');

  e.preventDefault();
});

// input year with jquery
//document.querySelector("input[type=number]")
  //.oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))

  //SCROLL WINDOW
  $(window).scroll(function() {
    if ($(this).scrollTop() > 20) { // this refers to window
        $('#nav-tool').addClass('nav-tool');
    }else{
      $('#nav-tool').removeClass('nav-tool');
    }
});
