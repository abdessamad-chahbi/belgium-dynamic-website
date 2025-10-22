const inputs = document.querySelectorAll(".input-texte");

function FuncMonter() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function FuncDescendre() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input_click) => {
  input_click.addEventListener("focus", FuncMonter);
  input_click.addEventListener("blur", FuncDescendre);
});
