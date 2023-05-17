function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
 }

 const accordion = document.querySelector('.accordion');

 accordion.addEventListener('click', function(event) {
   if (event.target.tagName === 'LI') {
     const content = event.target.nextElementSibling;
     event.target.classList.toggle('accordion-active');
     content.classList.toggle('accordion-active');
   }
 });
 