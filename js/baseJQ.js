$(document).ready(function () {

    popupRequired();

    //open enquiry popup on hashchange
    $(window).on('hashchange', function () {
        popupRequired();                 
    });

    // open upload on click 
    $('.uploadBtn').click(function () {
        openClosePopup('#uploadContainer');
    });

    // close popup on x
    $('.closeEnquiryContainer').click(function () {
        window.location.hash = '';
    });

    // close upload on x
    $('.closeContainer').click(function () {
        window.location.hash = '';
    });

    $('#logOut').click(function () {
        window.localStorage.clear();
        window.location.href = 'modules/logout.php';
    });

    $('.enquiryReq').click(function () {
        $('#name').val(localStorage.getItem('nameVal'));
        $('#email').val(localStorage.getItem('emailVal'));
        $('#subject').val(localStorage.getItem('subjectVal'));
    });
});

//FUNCTIONS

function popupRequired() {
    var reqHash;
    var hashString = window.location.hash;
    if (hashString) {
        reqHash = hashString;
        openPopup(reqHash);
   } else {
        closePopup();
   }
}

function openPopup(container) {
    $(container).fadeIn(50);
}

function closePopup() {
    if ($('#contactContainer').is(':visible')) {
        setTimeout(function () {
                $('#name').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#comment').val('');
                $('#topMessage').html("<h3>How can I help?</h3>");
            }, 100);
            $('#successMessage').hide();
            clearTimeout();
    }
    $('.containerForHiding').fadeOut(50);
}