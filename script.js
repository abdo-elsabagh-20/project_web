document.addEventListener("DOMContentLoaded", function () {
  const toggleButton = document.querySelector(".navbar_mobile-menu-toggle");
  const mobileMenu = document.querySelector(".navbar_mobile-menu-items");
  toggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("active");
  });
});

window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 0) {
    navbar.classList.add("navbar--scroll");
  } else {
    navbar.classList.remove("navbar--scroll");
  }
});

const previewLink = document.getElementById("preview-link");
const mainPage = document.getElementById("main-page");

previewLink.addEventListener("click", function (e) {
  e.preventDefault();
  mainPage.classList.add("hidden");
  loginPage.classList.remove("hidden");
});

function openVideo() {
  window.open("https://youtu.be/8nS0j_GRt6Q?si=NqA2wlhbWDFdThKM", "_blank");
}
