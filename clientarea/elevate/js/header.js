$(function () {

    updateMenu('#navBlog', 'navBlog');

    $('#navBlog').on('click', '.navBlog', function () {
        var loc = window.location.href;
        loc = loc.split('/');
        loc = loc[loc.length - 1];
        loc = loc.replace('#', '');
        if (loc == 'blog.php') {
            updateContent(this.id);
        } else {
            localStorage.setItem('blogPage', this.id);
            window.location.href = 'blog.php';
        }
    });
});