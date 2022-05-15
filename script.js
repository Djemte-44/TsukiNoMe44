// $(function () {
//  $(".menu-link").click(function () {
//   $(".menu-link").removeClass("is-active");
//   $(this).addClass("is-active");
//  });
// });

// $(function () {
//  $(".main-header-link").click(function () {
//   $(".main-header-link").removeClass("is-active");
//   $(this).addClass("is-active");
//  });
// });

// const dropdowns = document.querySelectorAll(".dropdown");
// dropdowns.forEach((dropdown) => {
//  dropdown.addEventListener("click", (e) => {
//   e.stopPropagation();
//   dropdowns.forEach((c) => c.classList.remove("is-active"));
//   dropdown.classList.add("is-active");
//  });
// });

$(".search-bar input")
 .focus(function () {
  $(".header").addClass("wide");
 })
 .blur(function () {
  $(".header").removeClass("wide");
 });


//search filter
 function myFunction() {
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      txtValue = a.textContent || a.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "";
      } else {
          li[i].style.display = "none";
      }
  }
}

// $(document).click(function (e) {
//  var container = $(".status-button");
//  var dd = $(".dropdown");
//  if (!container.is(e.target) && container.has(e.target).length === 0) {
//   dd.removeClass("is-active");
//  }
// });

// $(function () {
//  $(".dropdown").on("click", function (e) {
//   $(".content-wrapper").addClass("overlay");
//   e.stopPropagation();
//  });
//  $(document).on("click", function (e) {
//   if ($(e.target).is(".dropdown") === false) {
//    $(".content-wrapper").removeClass("overlay");
//   }
//  });
// });

// $(function () {
//  $(".status-button:not(.open)").on("click", function (e) {
//   $(".overlay-app").addClass("is-active");
//  });
//  $(".pop-up .close").click(function () {
//   $(".overlay-app").removeClass("is-active");
//  });
// });

// $(".status-button:not(.open)").click(function () {
//  $(".pop-up").addClass("visible");
// });

// $(".pop-up .close").click(function () {
//  $(".pop-up").removeClass("visible");
// });


//dark-mode

const toggleButton = document.querySelector('.dark-light');

toggleButton.addEventListener('click', () => {
  document.body.classList.toggle('light-mode');
});


