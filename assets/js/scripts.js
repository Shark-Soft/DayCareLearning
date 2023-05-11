const getEl = (selector) => document.querySelector(selector);
const getEls = (selector) => document.querySelectorAll(selector);



const btnReadMore = getEls(".ourPrograms__btn");

const btnBurger = getEl(".button--burger");
const navMobile = getEl(".navbar__container--mobile");
const navButtons = getEls(".navbar__container--mobile .menu-item");
const btnCloseNav = getEl(".btn-close--navbar");

const toggleNav = () => {
  navMobile.classList.toggle("navbar__container--mobile--active");}

btnBurger.addEventListener("click", () => {
  toggleNav();
});

navMobile.addEventListener("click", (e) => {
  if (e.target.classList.contains("navbar__container--mobile")) {
    toggleNav();
  }
});

btnCloseNav.addEventListener("click", () => {
  toggleNav();
})

btnReadMore.forEach((element) => {
  element.addEventListener("click", () => {
    alert("MODAL");
  });
});

navButtons.forEach((element) => {
  element.addEventListener("click", () => {
    toggleNav();
  });
})