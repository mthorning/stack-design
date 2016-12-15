$(function () {

    var id;

    updateMenu();
    alert(id);
    //on side menu click
    $(window).on('hashchange', function() {
        id = window.location.hash.substring(1);
        updateContent(id);
    });
    
//FUNCTIONS

    function updateMenu() {
        //side menu creation
        $('#menuItems').html('');
        //populate menu
        $.ajax({
            type: 'GET'
            , url: 'about.json'
            , data: {get_param: 'value'}
            , dataType: 'json'
            , success: function (about) {
                window.alert(about);
                $.each(about, function (index, element) {
                    $('#menuItems').prepend('<li><a href="#' + element.id + '">' + element.title + '</a></li>');
                });
            }
            ,error: function (XMLHttpRequest, textStatus, errorThrown) {
                if (textStatus == 'Unauthorized') {
                    console.log('Unauthorized Status Error: ' + errorThrown);
                } else {
                    console.log('Other Error: ' + errorThrown);
                }
            }

        });
    }

    function updateContent(id) {

        //clear content
        $('#content').html('');
        //which page am I looking for?
        var subject = id;

        $.ajax({
            type: 'GET'
            , url: 'about.json'
            , dataType: 'json'
            , success: function (about) {
                $.each(about, function(index, element) {
                    var subCheck = element.id;
                    //if subjects match:
                    if (subCheck == subject) {
                        //write title
                        $('#content').append('<h1>' + element.title + '</h1>');
                        //write paragraphs
                        $('#content').append(element.bodyOfText);
                    };
                });
            }
            , error: function () {
                alert('The document could not be read.');
            }
        });
    }

});