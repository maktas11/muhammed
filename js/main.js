console.log("main.js loaded in");
const buttonInfo = document.querySelector(".button-info");
const buttonHobby = document.querySelector(".button-hobby");
const buttonPoints = document.querySelector(".button-points");
const text = document.querySelector(".text");
const theme = document.querySelector(".bx1")

if (buttonInfo) {
    buttonInfo.addEventListener("click", function() {
        text.innerHTML = "my name is oefewewewe anyetwewewe oegwe moegwe asas";
    })
}

  if (buttonHobby) {
    buttonHobby.addEventListener("click", function() {
        text.innerHTML = "im a gamer thats it i do everything that i can";
    })
}

  if (buttonPoints) {
    buttonPoints.addEventListener("click", function() {
        text.innerHTML = "i do everything imaginable in this universe";
    })
}
if(theme){
  theme.addEventListener("click", function(){
        const theBody = document.querySelector(".toggle");
        const theNav = document.querySelector(".navbar");
        const theFooter = document.querySelector(".footer");
        theBody.classList.toggle("the_body_dark");
        theNav.classList.toggle("the_body_dark");
        theFooter.classList.toggle("the_body_dark");
    })
}

const modal = document.querySelector(".myModal");
const modal1 = document.querySelector(".myModal1");
const modal2 = document.querySelector(".myModal2");
const btn = document.querySelector(".myBtn");
const btn1 = document.querySelector(".myBtn1");
const btn2 = document.querySelector(".myBtn2");
const span = document.getElementsByClassName("close")[0];
const span1 = document.getElementsByClassName("close1")[0];
const span2 = document.getElementsByClassName("close2")[0];

btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
span1.onclick = function() {
  modal1.style.display = "none";
}
span2.onclick = function() {
  modal2.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
  
  
