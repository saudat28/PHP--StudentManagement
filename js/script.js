function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  var dropdownLinks = document.querySelectorAll(".dropdown-menu");

  // Add a click event listener to each link
  dropdownLinks.forEach(function(link) {
     link.addEventListener("click", function(event) {
        // Prevent the default action of the link (redirecting to the href)
        event.preventDefault();
        
        // Do something else here (e.g. update the page with the link's data)
     });
  });
  
  var close = document.getElementsByClassName("closebtn");
  var i;
  
  for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
      var div = this.parentElement;
      div.style.opacity = "0";
      setTimeout(function(){ div.style.display = "none"; }, 600);
    }
  }
