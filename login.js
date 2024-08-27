const signupbutton = document.getElementById('signupbutton');
const signinbutton = document.getElementById('signinbutton');
const signinform = document.getElementById('signin');
const signupform = document.getElementById('signup');



signupbutton.addEventListener('click', function (){
  signinform.style.display = "none";
  signupform.style.display = "block";
});

signinbutton.addEventListener('click', function (){
  signinform.style.display = "block";
  signupform.style.display = "none";
});