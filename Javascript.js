document.addEventListener("DOMContentLoaded", function () {
  var myportfolioButton = document.getElementById("MyPortfolio");

  myportfolioButton.addEventListener("click", function() {
    var portfolioURL = "PORTFOLIO.html";
    window.location.href = portfolioURL;
  });
});

var starterScreen = document.querySelector('.Welcome');
starterScreen.addEventListener('click',()=>{
  starterScreen.style.opacity = 0;
  setTimeout(()=>{
    starterScreen.classList.add('hidden')
  },610)
})

function enableScroll() {
  document.body.classList.add('scroll');
}

