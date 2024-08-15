import 'flowbite';
import './bootstrap';
import Swal from 'sweetalert2';
import "trix";
import "trix/dist/trix.css";

const swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  