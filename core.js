//CORE JS FUNCTIONALITY
//Contains only the most essential functions for the theme. No jQuery.

//MOBILE MENU TOGGLE
var menuElement = document.getElementById( 'menu-mobile-open' );
var menuExists = ! ! menuElement;
if ( menuExists ) {
    menuElement.addEventListener( 'click', function() {
    document.body.classList.add( 'menu-mobile-active' );
  } );

  document.getElementById( 'menu-mobile-close' ).addEventListener( 'click', function() {
    document.body.classList.remove( 'menu-mobile-active' );
  } );
}


///on enleve la section blog de la page d'accueil en supprimant le bloc #main et #sidebar
var parent = document.getElementsByClassName("home")[0];
var child = parent.getElementsByClassName("main")[0];
var removed = child.remove();