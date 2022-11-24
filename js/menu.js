let openMenu = document.querySelector(".burger-menu");
let navBar = document.querySelector(".nav-bar");
let closeMenu = document.querySelector(".close-icon");

openMenu.addEventListener("click", () => {
  navBar.classList.add("active1");
});
closeMenu.onclick = () => {
  navBar.classList.remove("active1");
};

let openContact = document.querySelector(".contact-open");
let contactUs = document.querySelector(".inputs");
let closeContact = document.querySelector(".contact-close");

openContact.addEventListener("click", () => {
  contactUs.classList.add("active");
});
closeContact.onclick = () => {
  contactUs.classList.remove("active");
};
