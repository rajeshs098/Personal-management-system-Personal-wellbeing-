// javascript functionfor open and close left side nav //

 /* Set the width of the side navigation to 0 and the left margin of the page content to250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "250px"

 document.getElementById("main").style.marginLeft= "250px"
}
 /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0px"

 document.getElementById("main").style.marginLeft= "0px"
}