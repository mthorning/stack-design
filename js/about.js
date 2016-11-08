$(function () {
    
    updateMenu();

    //on side menu click
    $('#menuItems').on('click', '.xmlChange', function (e) {
        e.preventDefault();
        console.log(this + ' clicked');
        updateContent(this.id);
    });
    
//FUNCTIONS

    function updateMenu() {
        //side menu creation
         var itemId ='';
        //clear menu
        $('#menuItems').html('');
        //populate menu
        $.ajax({
            type: 'GET'
            , url: 'xml/about.xml'
             , dataType: 'xml'
            , success: function (xml) {
                $(xml).find('section').each(function () {
                    var itemName = $(this).find('title').text();
                    itemId = $(this).find('id').text();
                    $('#menuItems').prepend('<li><a href="#" id="' + itemId + '" class="xmlChange">' + itemName + '</a></li>');
                    console.log('in loop id: ' + itemId);
                });
                console.log('out of loop id: ' + itemId);
                console.log('out of function id: ' + itemId);
                updateContent(itemId);
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
            , url: 'xml/about.xml'
            , dataType: 'xml'
            , success: function (xml) {
                $(xml).find('section').each(function () {
                    var subCheck = $(this).find('id').text();
                    //of subjects match:
                    if (subCheck == subject) {
                        var title = $(this).find('title').text();
                        //write title
                        $('#content').append('<h1>' + title + '</h1>');
                        //write paragraphs
                        $(this).find('para').each(function () {
                            var para = $(this).text();
                            $('#content').append('<p>' + para + '</p>');
                        });
                    }
                });
            }
            , error: function () {
                alert('The XML document could not be read.');
            }
        });
    }

});