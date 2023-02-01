"use strict";

console.log("salut tout le monde ");

const buttonNewsletter = getElementById("bouton-newsletter");
const form = document.getElementById("container-form");
console.log(buttonNewsletter);
console.log(form);

buttonNewsletter.onclick = function () {
  form.style.display = "block";
};

console.log(buttonNewsletter);
