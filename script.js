function preloader() {
  setTimeout(showPage, 4000); // Show content after 5 seconds
}

function showPage() {
  document.getElementById("preloader").style.display = "none";
  document.getElementById("content").style.display = "block";
}
