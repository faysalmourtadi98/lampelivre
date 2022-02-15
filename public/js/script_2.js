var LoginForm=document.getElementById("LoginForm");
var RegForm=document.getElementById("RegForm");
var Indicator=document.getElementById("Indicator");
   function register(){
       RegForm.style.marginLeft="5%";
       LoginForm.style.marginLeft="0%";
       Indicator.style.transform="translateX(100px)";
   }
   function login(){
       RegForm.style.marginLeft="100%";
       LoginForm.style.marginLeft="90%";
       Indicator.style.transform="translateX(0px)";
   }