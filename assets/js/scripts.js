//SELECTORS
const getEl = (selector) => document.querySelector(selector);
const getEls = (selector) => document.querySelectorAll(selector);

//ELEMENTS
const program = getEls(".ourPrograms__content__item");
const btnBurger = getEl(".button--burger");
const navMobile = getEl(".navbar__container--mobile");
const navButtons = getEls(".navbar__container--mobile .menu-item");
const btnCloseNav = getEl(".btn-close--navbar");
const modalCon = getEl(".modalPrograms");

//UI FUNCTIONS
const toggleNav = () => {
  navMobile.classList.toggle("navbar__container--mobile--active");
};

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
});

program.forEach((element) => {
  element.addEventListener("click", () => {
    const description = element.getAttribute("data-des");
    const color = element.getAttribute("data-color");
    const img = element.getAttribute("data-img");
    const appLogo = element.getAttribute("data-logo");
    const program = {
      description,
      color,
      img,
      appLogo,
    };
    showPogramModal(program);
  });
});

navButtons.forEach((element) => {
  element.addEventListener("click", () => {
    toggleNav();
  });
})
//GALLERY
var mySwiper = new Swiper(".swiper-container", {
  // Opciones de configuración
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//MODAL DISPLAY FUNCTION
function showPogramModal(program) {
  modalCon.innerHTML = `
  <article class="ourPrograms__modal">
    <div class="modalContent">
      <div class="modalContent__close">x</div>
      <div class="modalContent__img">
          <img rel="preload" src="${program.img}" alt="Logo" />
      </div>
      <div class="modalContent__txt">
          ${program.description}
      </div>
      <a href="">info@newgdaycare.com</a>
      <img rel="preload" src="${program.appLogo}" alt="Logo" />
    </div>
  </article>`;
  const modalBg = getEl(".ourPrograms__modal");
  const modalInfo = getEl(".modalContent");
  modalInfo.style.backgroundColor = `${program.color}`;
  modalBg.addEventListener("click", (e) => {
    if (
      e.target.className == "modalContent__close" ||
      e.target.className == "ourPrograms__modal"
    ) {
      modalBg.style.display = "none";
    }
  });
}
