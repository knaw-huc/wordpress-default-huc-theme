var menuOpen = false;

var clClose = document.querySelectorAll("#hcMenuButton");
  for (i = 0; i < clClose.length; i++) {

    clClose[i].addEventListener('click', function() {
      if (menuOpen ==true) {
        menuOpen = false;
      } else {
        menuOpen = true;
      }
      handleMenu();

    });
}

function handleMenu() {
  if (menuOpen == true) {
    document.getElementById("hcMenu").classList.add("hcFullscreenMenu");
    document.getElementById("hcMenuButton").innerHTML = 'Close <img src="images/icons/close-inv.svg">';
  }
  if (menuOpen == false) {
    document.getElementById("hcMenu").classList.remove("hcFullscreenMenu");
    document.getElementById("hcMenuButton").innerHTML = 'More <img src="images/icons/menu-inv.svg">';
  }
}
