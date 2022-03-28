//hero slide show
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  let slides = document.getElementsByClassName("main__slides");

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 10000); // Change image every 5 seconds
}
