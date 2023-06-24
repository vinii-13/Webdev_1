/*
 var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
*/
function videoslider(links){
  document.querySelector(".slider").src=links;
}
window.addEventListener('load', () => {
  const preloader = document.getElementById('preloader');
  preloader.classList.add('hide-preloader');
});
