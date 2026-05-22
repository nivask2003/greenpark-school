window.addEventListener("scroll", function () {
  document.getElementById("header").classList.toggle("scrolled", window.scrollY > 50);
});