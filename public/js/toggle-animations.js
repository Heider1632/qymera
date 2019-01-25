// hide all div containers
$('.content').hide();

$(".preview").click(function(e) {
    $(this).parent().next('.contenido').slideToggle('slow');

    // set the current item as active
    $(this).parent().toggleClass('active');

    e.preventDefault();
});
