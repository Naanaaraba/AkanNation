const navButton = document.getElementById("burger");
const navList = document.getElementById("navlinks");
const navBar = document.getElementById("navbar");

navButton.addEventListener("click", () => {
  navButton.classList.toggle("active");
  navList.classList.toggle("show");
});

window.addEventListener("scroll", () => {
  if (window.scrollY > 80) {
    navBar.classList.add("shadow");
  } else {
    navBar.classList.remove("shadow");
  }
});
