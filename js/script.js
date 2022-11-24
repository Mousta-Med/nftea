
let openMenu = document.querySelector(".burger-menu");
let navBar = document.querySelector(".nav-bar");
let closeMenu = document.querySelector(".close-icon");

openMenu.addEventListener("click", () => {
  navBar.classList.add("active1");
});
closeMenu.onclick = () => {
  navBar.classList.remove("active1");
};
