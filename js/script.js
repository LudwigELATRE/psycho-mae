"use strict";

const buttonNewsletter = document.getElementById("bouton-newsletter");
const form = document.getElementById("container-form");
console.log(buttonNewsletter);
console.log(form);

buttonNewsletter.onclick = function () {
  form.style.display = "block";
};

console.dir(buttonNewsletter);
