$(function () {
    var id;

    buildPage();

    //on side menu click
    $(window).on('hashchange', function() {
        console.log('haschange');
        id = window.location.hash.substring(1);
        updateContent(id);
    });
    
//FUNCTIONS

    function buildPage() {
        console.log('build page called');
        //side menu creation
        $('#menuItems').html('');
        $.getJSON('about.json', function (about) {
            $.each(about, function (index, element) {
                $('#menuItems').append('<li><a href="#' + element.id + '">' + element.title + '</a></li>');
            });
            var oldHash = window.location.hash;
            window.location.hash = '#' + about[0].id;
            if (window.location.hash == oldHash) {
                $(window).trigger('hashchange');
            }
        });
    }

    function updateContent(id) {
        console.log('update to content called');
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