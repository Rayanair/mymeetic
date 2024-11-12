$(document).ready( function () {

    $(".navigation ul.subMenu").hide();
    $(".navigation li.toggleSubMenu span").each( function () {
        var TexteSpan = $(this).text();
        $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '<\/a>') ;
    } ) ;

    $(".navigation li.toggleSubMenu > a").click( function () {
        if ($(this).next("ul.subMenu:visible").length != 0) {
            $(this).next("ul.subMenu").slideUp("normal");
        }
        else {
            $(".navigation ul.subMenu").slideUp("normal");
            $(this).next("ul.subMenu").slideDown("normal");
        }
        return false;
    });    
} ) ;