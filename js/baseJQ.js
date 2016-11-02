$(document).ready(function () {

    $('.enquireBtn').click(openCloseContact);
    
});

function openCloseContact () {
    $('#containerForHiding').fadeToggle('slow');
}