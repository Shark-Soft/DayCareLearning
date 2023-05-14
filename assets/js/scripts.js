//SELECTORS
const getEl = (selector) => document.querySelector(selector);
const getEls = (selector) => document.querySelectorAll(selector);

//ELEMENTS
const program = getEls(".ourPrograms__content__item");
const btnPosition = getEls(".btnPosition");
const btnBurger = getEl(".button--burger");
const navMobile = getEl(".navbar__container--mobile");
const navButtons = getEls(".navbar__container--mobile .menu-item");
const btnCloseNav = getEl(".btn-close--navbar");
const modalProgramsCon = getEl(".modalPrograms");
const modalPositionsCon = getEl(".modalPositionsCon");

//UI FUNCTIONS
const toggleNav = () => {
  navMobile.classList.toggle("navbar__container--mobile--active");
  document.body.classList.toggle("unScroll");

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

btnPosition.forEach((element) => {
  element.addEventListener("click", () => {
    const positionName = element.getAttribute("data-position_name");
    const posRes = element.getAttribute("data-modal_responsabilities");
    const appLogo = element.getAttribute("data-logo");
    const position = {
      positionName,
      posRes,
      appLogo,
    };
    showPositionModal(position);
  });
});

navButtons.forEach((element) => {
  element.addEventListener("click", () => {
    toggleNav();
  });
});
// Hero
const heroSwiper = new Swiper("#swiper-hero", {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  autoplay: {
    delay: 1000,
  },
});

//GALLERY
const gallerySwiper = new Swiper("#swiper-gallery", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: "#swiper-gallery .swiper-button-next",
    prevEl: "#swiper-gallery .swiper-button-prev",
  },
});

//MODAL DISPLAY FUNCTION
function showPogramModal(program) {
  modalProgramsCon.innerHTML = `
  <article class="ourPrograms__modal">
    <div class="modalContent">
      <div class="modalContent__close">x</div>
      <div class="modalContent__img">
          <img rel="preload" src="${program.img}" alt="Logo" />
      </div>
      <div class="modalContent__txt">
          ${program.description}
      </div>
      <a href="mailto:info@newgdaycare.com">info@newgdaycare.com</a>
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
      document.body.classList.remove("unScroll");
    }
  });
  document.body.classList.add("unScroll");
}

function showPositionModal(position) {
  modalPositionsCon.innerHTML = `
  <article class="ourPrograms__modal">
        <div class="modalContent">
            <div class="modalContent__close">x</div>
            <h2>${position.positionName}</h2>
            <div class="modalPositionInfo wysiwyg__container">
              ${position.posRes}
            </div>
            <img rel="preload" src="${position.appLogo}" alt="Logo" />
        </div>
    </article>

  `;
  const modalBg = getEl(".ourPrograms__modal");
  const modalInfo = getEl(".modalContent");
  modalInfo.style.backgroundColor = `${program.color}`;
  modalBg.addEventListener("click", (e) => {
    if (
      e.target.className == "modalContent__close" ||
      e.target.className == "ourPrograms__modal"
    ) {
      modalBg.style.display = "none";
      document.body.style.overflow = "auto";
    }
  });
  document.body.style.overflow = "hidden";
}
