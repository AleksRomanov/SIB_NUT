import swiperAbout from "./swiper_about";
import swiperQuality from "./swiper_quality";
import swiperSertificates from "./swiper_sertificates";
import swiperProducts from "./swiper_products";
import salAnimation from "./sal";
import mmenu from "./mmenu";



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
    salAnimation();
    mmenu();

  }
}

App.init();
window.App = App;
