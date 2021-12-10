//sticky navbar from http://www.mattmorgante.com/technology/sticky-navigation-bar-javascript
const nav = document.querySelector('#navigation');
const navTop = nav.offsetTop;
function stickyNavigation() {
  if (window.scrollY >= navTop) {
    document.body.classList.add('fixed-nav');
  } else {
    document.body.classList.remove('fixed-nav');
  }
}
  
  window.addEventListener('scroll', stickyNavigation);

  //jQuery from https://stackoverflow.com/questions/16856287/set-link-of-my-navbar-active-with-bootstrap
  //in theory this would add class "active" to the active link on navbar, but doesn't do anything
  //I think because it starts after the document loads
  //I'm keeping it here because I want to mess with it later
//$(document).ready(function() {
//  var main_route = (window.location.pathname.split("/")[1]);
//  $('#navbar_' + main_route).addClass('active');
//});
