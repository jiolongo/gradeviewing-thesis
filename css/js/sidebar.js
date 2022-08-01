



//  let sidebar = document.querySelector("#sidebar");
// let closeBtn = document.querySelector("#btn");
// let sections = document.querySelector(".tm-section");


// document.onclick = function(e){
//   if(e.target.id !=='sidebar' && e.target.id !=='btn'&& e.target.class !=='sections')
//   {
//     btn.classList.remove('active');
//     sidebar.classList.remove('active');
//     sections.classList.remove('active');
//   }
  
// }


// btn.onclick = function(){
//   btn.classList.toggle('active');
//   sidebar.classList.toggle('active');
//   sections.classList.toggle('active');

// }


let arrow = document.querySelectorAll(".arrow");
for (var i = 0; i < arrow.length; i++) {
  arrow[i].addEventListener("click", (e)=>{
 let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
 arrowParent.classList.toggle("showMenu");
  });
}
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".bx-menu");
console.log(sidebarBtn);
sidebarBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("close");
});