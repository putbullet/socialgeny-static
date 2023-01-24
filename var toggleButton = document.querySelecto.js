var toggleButton = document.querySelector(".sidebar-toggle");
var sidebarMenu = document.querySelector(".sidebar-menu");

toggleButton.addEventListener("click", function() {
  sidebarMenu.classList.toggle("open");
});
