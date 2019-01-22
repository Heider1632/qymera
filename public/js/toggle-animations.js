// hide all div containers
$('.content').hide();
console.log($('.preview' +  '.content'));

$(".preview").click(function(e) {
    $(this).parent().next('.content').slideToggle('slow');

    // set the current item as active
    $(this).parent().toggleClass('active');

    e.preventDefault();
});
