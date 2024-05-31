//menu

const buttonMenu = document.querySelector("#btn-menu");

function toggleMenu() {
  const nav = document.querySelector(".nav");
  nav.classList.toggle("active");
}

buttonMenu.addEventListener("click", toggleMenu);

/////X///
