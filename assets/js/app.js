// loading spinner
setTimeout(function() {
    document.getElementById("loading").classList.add("animated");
    document.getElementById("loading").classList.add("fadeOut");
    setTimeout(function() {
      document.getElementById("loading").classList.remove("animated");
      document.getElementById("loading").classList.remove("fadeOut");
      document.getElementById("loading").style.display = "none";
    }, 800);
  }, 1500);


// Match Height
$(function() {
  $('.about_section').matchHeight();
});

function svgasimg() {
return document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image", "1.1");
}