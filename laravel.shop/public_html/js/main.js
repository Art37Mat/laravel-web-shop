
let navbar = document.getElementById('navbar').classList
let active_class = "navbar_scrolled"


// Слушаем событие прокрутки

window.addEventListener('scroll', e => {
if(scrollY > 500) navbar.add(active_class)
else navbar.remove(active_class)
})



// const root = document.documentElement;
// const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue("--marquee-elements-displayed");
// const marqueeContent = document.querySelector("ul.marquee-content");

// root.style.setProperty("--marquee-elements", marqueeContent.children.length);

// for(let i=0; i<marqueeElementsDisplayed; i++) {
//   marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
// }


// const nav = document.querySelector('nav');
// const links = nav.querySelectorAll('a');
// const subMenus = nav.querySelectorAll('ul ul');


// links.forEach(link => {
//   link.addEventListener('mouseover', function() {
//     // Скрываем все подменю
//     subMenus.forEach(menu => {
//       menu.style.display = 'none';
//     });
//     // Отображаем подменю текущей ссылки (если оно есть)
//     const subMenu = this.nextElementSibling;
//     if (subMenu) {
//       subMenu.style.display = 'block';
//     }
//   });
// });


function changeStyle() {
  var style = document.getElementById("myStyle");
  if (style.getAttribute("href") == "css/main1.css") {
    style.setAttribute("href", "css/main2.css");
  } else {
    style.setAttribute("href", "css/main1.css");
  }
}








var buttons = document.getElementsByClassName("myButton");
var popups = document.getElementsByClassName("myPopup");
var closeButtons = document.getElementsByClassName("close");

for (var i = 0; i < buttons.length; i++) {
  buttons[i].onclick = function() {
    var popup = this.nextElementSibling;
    popup.style.display = "block";

    window.onclick = function(event) {
      if (event.target == popup) {
        popup.style.display = "none";
      }
    }
  };
}

for (var i = 0; i < closeButtons.length; i++) {
  closeButtons[i].onclick = function() {
    var popup = this.parentElement;
    popup.style.display = "none";
    window.onclick = null;
  };
}







// const btn = document.getElementById('btn');
// const popup = document.getElementById('popup');
// const close = document.getElementById('close');

// btn.addEventListener('click', () => {
//   popup.style.display = 'block';
// });

// close.addEventListener('click', () => {
//   popup.style.display = 'none';
// });




// function toggleMenu() {
//   var menu = document.getElementById("menu");
//   if (menu.style.display === "none") {
//     menu.style.display = "block";
//   } else {
//     menu.style.display = "none";
//   }
// }


function spoiler(id) {
  if   (  document.getElementById(id).style.display == "none" )
       {  document.getElementById(id).style.display = "";   } 
  else {  document.getElementById(id).style.display = "none"; }
}
















