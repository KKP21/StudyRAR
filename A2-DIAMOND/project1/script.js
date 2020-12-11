//alert("welcome")

const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click', function (){
	nav.classList.toggle('slide');
})


// function validateForm() {
//   var x = document.forms["theForm"]["email"].value;
//   var y = document.forms["theForm"]["password"].value;
//   if (x !== "gita@gmail.com" || y !== "123") {
//     alert("Email atau Password salah");
//     return false;
//   }
//   else{
//   	confirm("Selamat Datang! Yakin ingin melakukan login?")
//   }
// }
