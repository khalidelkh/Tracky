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

// * screen shots swiper
new Swiper(".swiper-screenshots-container", {
  // Optional parameters
  // direction: "horizontal",
  // loop: true,
  // autoplay: {
  //   delay: 5000,
  // },

  slidesPerView: 4,
  spaceBetween: 20,

  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    640: {
      slidesPerView: 2,
    },
    1140: {
      slidesPerView: 4,
    },
  },

  navigation: {
    nextEl: ".swiper-screenshots-button-next",
    prevEl: ".swiper-screenshots-button-prev",
  },

  // If we need pagination
  pagination: {
    el: ".swiper-screenshots-pagination",
  },
});
// * Product filter in product page
const productFilterButtons = document.querySelectorAll(
  ".product-filter-button"
);
productFilterButtons?.forEach((button) => {
  button.addEventListener("click", function () {
    // Remove active attribute from all buttons
    for (var i = 0; i < productFilterButtons.length; i++) {
      productFilterButtons[i].removeAttribute("data-active");
    }

    // Add active attribute to the clicked button
    button.setAttribute("data-active", "");
  });
});
function filterProducts(categorie) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("produit-list").innerHTML = this.responseText;
      }
  };
  xhttp.open("GET", "/wp-admin/admin-ajax.php?action=filter_produits&categorie=" + categorie, true);
  xhttp.send();
}
