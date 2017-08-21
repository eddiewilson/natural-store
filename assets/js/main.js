// Body State toggled

var nav = document.querySelector('.nav-burger');
var toggleState = function (elem, one, two) {
var elem = document.querySelector(elem);
  elem.setAttribute('data-state', elem.getAttribute('data-state') === one ? two : one);
};

nav.onclick = function (e) {
  toggleState('body', 'hide', 'show');
  e.preventDefault();
};

// ES5 using .bind() #ftw
// nav.addEventListener('click', toggleState.bind(null, '.nav ul', 'closed', 'open'), false);

// Twitter 
