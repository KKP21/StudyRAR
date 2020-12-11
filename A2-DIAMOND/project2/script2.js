const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function (){
	nav.classList.toggle('slide');
})

/*function validateForm() {
  var x = document.forms["theForm"]["password"].value;
  var y = document.forms["theForm"]["password-v"].value;
  if (x=="123" || y=="123") {
    confirm("ok untuk login!");
    return false;
  }
  else{
  	alert("mix match password");
    return false;
  }
}*/