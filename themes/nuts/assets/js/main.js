import swiperAbout from "./swiper_about";
import swiperQuality from "./swiper_quality";
import swiperSertificates from "./swiper_sertificates";
import scrollTop from "./scroll_top";
import scrollPages from "./scroll_pages";
import swiperProducts from "./swiper_products";
import salAnimation from "./sal";
import mmenu from "./mmenu";
import formsSubmit from "./forms-submit";



const isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

class App {
  static init() {
    if (isSafari) {
      window.console.log(`isSafari`);
    }

    // if (window.objectFitImages) {
    //   window.objectFitImages();
    // }

    swiperAbout();
    swiperQuality();
    swiperSertificates();
    swiperProducts();
    scrollTop();
    scrollPages();
    salAnimation();
    mmenu();
    formsSubmit();

  }
}

App.init();
window.App = App;
