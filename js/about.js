$(function () {

    var id;

    updateMenu();

    //on side menu click
    $(window).on('hashchange', function() {
        id = window.location.hash.substring(1);
        updateContent(id);
    });
    
//FUNCTIONS

    function updateMenu() {
        //side menu creation
        $('#menuItems').html('');
        $.getJSON('about.json', function (about) {
            $.each(about, function (index, element) {
                $('#menuItems').append('<li><a href="#' + element.id + '">' + element.title + '</a></li>');
            });
            id = about[0].id;
            
            updateContent(id);
        });
    }

    function updateContent(id) {

        //clear content
        $('#content').html('');
        //which page am I looking for?
        var subject = id;

        $.getJSON('about.json', function (about) {
            $.each(about, function(index, element) {
                    var subCheck = element.id;
                    //if subjects match:
                    if (subCheck == subject) {
                        //write title
                        $('#content').append('<h1>' + element.title + '</h1>');
                        //write paragraphs
                        $('#content').append(element.bodyOfText);
                    }
                });
        });
    }

});