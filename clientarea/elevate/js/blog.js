$(function () {
    
    updateMenu('#menuItems', 'xmlChange');
    
    //display content
    var id = localStorage.getItem('blogPage');
    updateContent(id);
    
    //on side menu click
    $('#menuItems').on('click', '.xmlChange', function (e) {
        e.preventDefault();
        console.log(this + ' clicked');
        updateContent(this.id);
    });
    
});


    