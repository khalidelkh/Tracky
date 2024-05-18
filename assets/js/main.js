const menuButton = document.querySelector(".menu-button");
const menu = document.querySelector(".mobile-menu");

menuButton.addEventListener("click", () => {
  if (menu.style.opacity === "1") {
    menu.style.opacity = "0";
    menu.style.pointerEvents = "none";
  } else {
    menu.style.opacity = "1";
    menu.style.pointerEvents = "all";
  }
});

// * home page swiper
new Swiper(".localize-your-vehicle-swiper", {
  // Optional parameters
  // direction: "horizontal",
  // loop: true,
  // autoplay: {
  //   delay: 5000,
  // },

  slidesPerView: 3,
  spaceBetween: 20,

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    1140: {
      slidesPerView: 3,
    },
  },

  navigation: {
    nextEl: ".localize-your-vehicle-swiper-button-next",
    prevEl: ".localize-your-vehicle-swiper-button-prev",
  },

  // If we need pagination
  pagination: {
    el: ".localize-your-vehicle-swiper-pagination",
  },
});

// * home page swiper (Avis)
new Swiper(".avis-swiper", {
  // Optional parameters
  // direction: "horizontal",
  // loop: true,
  // autoplay: {
  //   delay: 5000,
  // },

  slidesPerView: 1,
  spaceBetween: 20,

  navigation: {
    nextEl: ".avis-swiper-button-next",
    prevEl: ".avis-swiper-button-prev",
  },

  // If we need pagination
  pagination: {
    el: ".avis-swiper-pagination",
  },
});
