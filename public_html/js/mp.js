// Map
function alertName(e) {
  alert('Welcome to ' + e.target.getAttribute('data-name'));
};
window.onload = function() {
  paths = window.document.querySelectorAll('path');
  for (i = 0; i < paths.length; ++i) {
    paths[i].onclick = alertName;
  }
};