import './bootstrap';
import Alpine from 'alpinejs'
import menuMobile from './alpine/menuMobile';
import Splide from '@splidejs/splide';

new Splide( '.splide',{
    type   : 'loop',
    drag   : 'free',
    focus  : 'center',
    autoWidth: true,
    autoScroll: {
      speed: 1,
    },
  } ).mount();
window.Alpine = Alpine
Alpine.data('menuMobile', menuMobile)
Alpine.start()