$(document).ready(function() {
    $('.sideMenuToggler').on('click', function() {
        $('.wrapper').toggleClass('active');
    });

    let adjustSidebar = function() {
        $('.sidebar').slimScroll({
            height: document.documentElement.clientHeight - $('.navbar').outerHeight()
        });
    };

    adjustSidebar();
    $(window).resize(function() {
        adjustSidebar();
    });
});