window.onscroll = function() {myFunction()};
var navbar =document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction(){
if (window.pageYOffset >= sticky) {
    navbar.ClassList.add("sticky");
} else{
    navbar.ClassList.remove("sticky");
}
}