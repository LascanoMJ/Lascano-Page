var starterScreen = document.querySelector('.Welcome');
starterScreen.addEventListener('click',()=>{
  starterScreen.style.opacity = 0;
  setTimeout(()=>{
    starterScreen.classList.add('hidden')
    showImages();
  },610)
})

function enableScroll() {
  document.body.classList.add('scroll');
}

function showImages() {
  var containers = document.querySelectorAll('.container'); // Select all image containers
  containers.forEach(function(container) {
    container.style.display = 'block'; // Show each image container
  });
}

var swiper = new Swiper('.blog-slider', {
  spaceBetween: 30,
  effect: 'fade',
  loop: true,
  mousewheel: {
    invert: false,
  },
  // autoHeight: true,
  pagination: {
    el: '.blog-slider__pagination',
    clickable: true,
  }
});