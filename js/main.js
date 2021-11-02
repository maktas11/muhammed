console.log("main.js loaded in");
const buttonInfo = document.querySelector(".button-info");
const buttonHobby = document.querySelector(".button-hobby");
const buttonPoints = document.querySelector(".button-points");
const text = document.querySelector(".text");

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
  
  
