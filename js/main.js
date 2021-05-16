const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);

const mediaQuery = window.matchMedia('(min-width: 992px)')
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 && mediaQuery.matches) {
    document.getElementById("header").style.height = "90px";
    document.getElementById("header").style.marginTop = "-17px";
  } else {
    document.getElementById("header").style.height = "auto";
    document.getElementById("header").style.marginTop = "0px";
  }
}
