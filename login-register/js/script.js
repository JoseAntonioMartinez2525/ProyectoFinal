

document.getElementsById('btn__registrarse').onclick = register;

var contenedor_login-register=document.querySelector('.contenedor__login-register');
var formulario_login=document.querySelector('.formulario__login');
var formulario_register=document.querySelector('.formulario__register');
var caja_fondo-login=document.querySelector('.caja__fondo-login');
var caja_fondo-register=document.querySelector('.caja__fondo-register');


function register(){
formulario_register.style.display="block";
contenedor_login-register.style.left="410px";
formulario_login.style.display="none";
caja_fondo-register.style.opacity="0";
caja_fondo-login.style.opacity="1";


}