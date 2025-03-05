import './bootstrap';
import Alpine from 'alpinejs'
import menuMobile from './alpine/menuMobile';

window.Alpine = Alpine
Alpine.data('menuMobile', menuMobile)
Alpine.start()