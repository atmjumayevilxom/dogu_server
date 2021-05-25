// Fetches recent post from blog...only applicable for Blogger blogs.
// By Hamza Dhamiya
// Twitter: @hamzadhamiya
var q = $("li.blog-post");
q.each(function () {
  var e = $(this),
    indexnumber = Math.random(),
    domain = "http://bloggerever.com",
    f = e.attr("data-label"),
    g =
      domain +
      "/feeds/posts/summary/-/" +
      f +
      "?max-results=4&alt=json-in-script";
  e.append('<div class="nav-item"></div>');
  $.ajax({
    type: "GET",
    url: g,
    async: false,
    contentType: "application/json",
    dataType: "jsonp",
    success: function (json) {
      for (var i = 0; i < json.feed.entry.length; i++) {
        var h = json.feed.entry[i];
        for (var j = 0; j < h.link.length; j++) {
          if (h.link[j].rel == "alternate") {
            var l = h.link[j].href;
            break;
          }
        }
        try {
          var k = h.media$thumbnail.url.replace("s72-c", "s250-no");
        } catch (m) {
          var k =
            "https://lh4.googleusercontent.com/-sEsEVEIbC_A/VC75LXVY_9I/AAAAAAAAFjw/3IMVKlywmmE/s500/No%2520image.jpg";
        }
        var z = h.title.$t;
        var nnitem =
          "<div class='item'><img src='" +
          k +
          "'/><h3><a href='" +
          l +
          "'>" +
          z +
          "</a></h3></div>";
        e.find(".nav-item").append(nnitem);
      }
    },
  });
});

/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

// Toggle animation//////////

[...document.querySelectorAll(".item-1")].map((item) => {
  item.addEventListener("click", (event) => {
    event.currentTarget.classList.toggle("active");
  });
});

////  Initialize Swiper

(function ($) {
  $(function () {

  var agSwiper = $('.swiper-container');

  if (agSwiper.length > 0) {

    var sliderView = 1;
    var ww = $(window).width();
    if (ww >= 1700) sliderView = 7;
    if (ww <= 1700) sliderView = 7;
    if (ww <= 1560) sliderView = 6;
    if (ww <= 1400) sliderView = 5;
    if (ww <= 1060) sliderView = 4;
    if (ww <= 800) sliderView = 3;
    if (ww <= 560) sliderView = 2;
    if (ww <= 400) sliderView = 1;

    var swiper = new Swiper('.swiper-container', {
      slidesPerView: sliderView,
      spaceBetween: 0,
      loop: true,
      loopedSlides: 16,
      speed: 700,
      autoplay: true,
      autoplayDisableOnInteraction: true,
      centeredSlides: true
    });

    $(window).resize(function () {
      var ww = $(window).width();
      if (ww >= 1700) swiper.params.slidesPerView = 7;
      if (ww <= 1700) swiper.params.slidesPerView = 7;
      if (ww <= 1560) swiper.params.slidesPerView = 6;
      if (ww <= 1400) swiper.params.slidesPerView = 5;
      if (ww <= 1060) swiper.params.slidesPerView = 4;
      if (ww <= 800) swiper.params.slidesPerView = 3;
      if (ww <= 560) swiper.params.slidesPerView = 2;
      if (ww <= 400) swiper.params.slidesPerView = 1;
    });

    $(window).trigger('resize');

    var mySwiper = document.querySelector('.swiper-container').swiper;

    agSwiper.mouseenter(function () {
      mySwiper.autoplay.stop();
      console.log('slider stopped');
    });

    agSwiper.mouseleave(function () {
      mySwiper.autoplay.start();
      console.log('slider started again');
    });
  }

  });
})(jQuery);




// var swiper = new Swiper(".swiper-container", {
//   slidesPerView: 3,
//   spaceBetween: 30,
//   slidesPerGroup: 1,
//   loop: true,
//   autoplay: true,
//   autoplayTimeout: 2000,
//   autoplayHoverPause: true,
//   loopFillGroupWithBlank: true,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   responsive: {
//     0: {
//         items: 1,
//         nav: false
//     },
//     600: {
//         items: 2,
//         nav: false
//     },
//     1000: {
//         items: 3,
//         nav: false
//     }
// }
// });

// header sliders js //////

var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
