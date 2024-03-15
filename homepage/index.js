window.addEventListener('DOMContentLoaded', () => {
  const hamburger = document.querySelector('#hamburger');
  const menus = document.querySelector('#menus');

  hamburger.addEventListener('click', () => {
    if (menus.classList.contains('show')) {
      menus.classList.remove('show');
      // Enable scrolling when the menu is hidden
      document.body.classList.remove('no-scroll');
    } else {
      menus.classList.add('show');
      // Disable scrolling when the menu is shown
      document.body.classList.add('no-scroll');
    }
  });
});

window.addEventListener('resize', () => {
  if(window.innerWidth > 992){
    if(menus.className.includes("show")){
      menus.classList.remove("show");
    }
  }
})





// Get the modal for Contact
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
  document.body.style.overflow = 'hidden'; // Disable scrolling
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  document.body.style.overflow = 'auto'; // Enable scrolling
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.body.style.overflow = 'auto'; // Enable scrolling
  }
}


// Get the modal for Register
var register_modal = document.getElementById("myRegister");

// Get the button that opens the modal
var myBtnRegister = document.getElementById("myBtnRegister");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-register")[0];

// When the user clicks on the button, open the modal
myBtnRegister.onclick = function() {
  register_modal.style.display = "block";
  document.body.style.overflow = 'hidden'; // Disable scrolling
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  register_modal.style.display = "none";
  document.body.style.overflow = 'auto'; // Enable scrolling
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == register_modal) {
    register_modal.style.display = "none";
    document.body.style.overflow = 'auto'; // Enable scrolling
  }
}

// Get the modal for Login
var login_modal = document.getElementById("myLogin");

// Get the button that opens the modal
var myBtnLogin = document.getElementById("myBtnLogin");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-login")[0];

// When the user clicks on the button, open the modal
myBtnLogin.onclick = function() {
  login_modal.style.display = "block";
  document.body.style.overflow = 'hidden'; // Disable scrolling
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  login_modal.style.display = "none";
  document.body.style.overflow = 'auto'; // Enable scrolling
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == login_modal) {
    login_modal.style.display = "none";
    document.body.style.overflow = 'auto'; // Enable scrolling
  }
}






var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}

