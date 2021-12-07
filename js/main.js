import Game from "./Game.js";
new Game();
console.log("main.js loaded in");
const buttonInfo = document.querySelector(".button-info");
const buttonHobby = document.querySelector(".button-hobby");
const buttonPoints = document.querySelector(".button-points");
const text = document.querySelector(".text");
const theme = document.querySelector(".bx1")
const toggle = document.querySelector(".toggle")


if (buttonInfo) {
    buttonInfo.addEventListener("click", function() {
        text.innerHTML = "Mijn naam is Muhammed Aktas en ik ben 18 jaar oud. Mijn geboorte datum is 7 november 2003. Ik leef met een broertje zus moeder en vader.";
    })
}

  if (buttonHobby) {
    buttonHobby.addEventListener("click", function() {
        text.innerHTML = "Mijn hobby's zijn sporten programmeren en gamen. Ik ga vaak naar de gym en ik werk vaak aan mijn huiswerk/portofolio";
    })
}

  if (buttonPoints) {
    buttonPoints.addEventListener("click", function() {
        text.innerHTML = "Mijn sterke punten zijn dat ik altijd mijn werk af heb en dat ik goed met mensen om kaan gaan/werken. Mijn zwakke punten zijn dat ik vaak alles perfect wil en dat ik vaak werk snel af wil.";
    })
}
if(theme){
  theme.addEventListener("click", function(){
        const theBody = document.querySelector(".toggle");
        const theNav = document.querySelector(".navbar");
        const theFooter = document.querySelector(".footer");
        const theText = document.querySelector(".change");
        theBody.classList.toggle("light");
        theNav.classList.toggle("light");
        theFooter.classList.toggle("light");
        theText.classList.toggle("light1")
    })
}

const modal = document.querySelector(".myModal");
const modal1 = document.querySelector(".myModal1");
const modal2 = document.querySelector(".myModal2");
const modal3 = document.querySelector(".myModal3");
const btn = document.querySelector(".myBtn");
const btn1 = document.querySelector(".myBtn1");
const btn2 = document.querySelector(".myBtn2");
const btn3 = document.querySelector(".myBtn3");
const span = document.getElementsByClassName("close")[0];
const span1 = document.getElementsByClassName("close1")[0];
const span2 = document.getElementsByClassName("close2")[0];
const span3 = document.getElementsByClassName("close3")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
btn1.onclick = function() {
  modal1.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}
btn3.onclick = function() {
  modal3.style.display = "block";
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
span3.onclick = function() {
  modal3.style.display = "none";
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
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
function temperatureConverter(valNum) {
  valNum = parseFloat(valNum);
 document.querySelector(".outputCelcius").innerHTML=(valNum-32)/1.8;
}

function temperatureConverter2(valNum2) {
  valNum2 = parseFloat(valNum2);
  document.querySelector(".outputFarenheit").innerHTML=(valNum2*1.8)+32;
} 
  
