var navbar_right;
var mobile_navbar_toggle;

window.onresize = function () {
  check_navbar();
};

window.onload = function () {
  navbar_right = document.getElementById("navbar-right");
  mobile_navbar_toggle = document.getElementById("mobile-navbar-toggle");
  check_navbar();

  mobile_navbar_toggle.onclick = function () {
    if (navbar_right.style.display == "none") {
      navbar_right.style.display = "block";
      navlist.style.display = "block";
      navlist1.style.display = "block";
      navlist2.style.display = "block";
      navlist3.style.display = "block";
      navlist4.style.display = "block";
    } else {
      navbar_right.style.display = "none";
      navlist.style.display = "";
      navlist1.style.display = "";
      navlist2.style.display = "";
      navlist3.style.display = "";
      navlist4.style.display = "";
    }
  };
};
