var $ = jQuery;

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