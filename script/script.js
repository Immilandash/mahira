const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const buttonRight = document.getElementById('slideRight');
const buttonLeft = document.getElementById('slideLeft');
let mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
});

buttonRight.onclick = function () {
  document.getElementById('round').scrollLeft += 300;
};
buttonLeft.onclick = function () {
  document.getElementById('round').scrollLeft -= 300;
};

function scrollFunction() {
  if (document.body.scrollTop == 0 || document.documentElement.scrollTop == 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop -= 3000; // For Safari
  document.documentElement.scrollTop -= 2000; // For Chrome, Firefox, IE and Opera
}