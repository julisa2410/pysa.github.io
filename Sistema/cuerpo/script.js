document.getElementById("btn_Iniciar_Sesion").addEventListener("click", iniciarsesion);
document.getElementById("btn_Registrar").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);

//Declaracopn de variables
var Contenedor_LoginRegistro = document.querySelector(".contenedor_Login-Registro");
var Formulario_Login = document.querySelector(".formulario_login");
var Formulario_Register = document.querySelector(".formulario_registro");
var CajaTrasera_Login = document.querySelector(".caja_trasera_login");
var CajaTrasera_Registro = document.querySelector(".caja_trasera_registro");
 
function anchoPagina() {
    if(window.innerWidth > 850){
        CajaTrasera_Login.style.display = "block";
        CajaTrasera_Registro.style.display = "block";
    }
    else{
        CajaTrasera_Registro.style.display = "block";
        CajaTrasera_Registro.style.opacity = "1";
        CajaTrasera_Login.style.display = "none";
        Formulario_Login.style.display = "block";
        Formulario_Register.style.display = "none";
        Contenedor_LoginRegistro.style.left = "0px";
    }
    
}

anchoPagina();

function iniciarsesion(){
    if(window.innerWidth > 850){
        Formulario_Register.style.display= "none";
        Contenedor_LoginRegistro.style.left = "10px";
        Formulario_Login.style.display = "block";
        CajaTrasera_Registro.style.opacity = "1";
        CajaTrasera_Login.style.opacity = "0";
    }
    else{
        Formulario_Register.style.display= "none";
        Contenedor_LoginRegistro.style.left = "0px";
        Formulario_Login.style.display = "block";
        CajaTrasera_Registro.style.display = "block";
        CajaTrasera_Login.style.display = "none";
    }   
}

function register(){
    if(window.innerWidth > 850){
        Formulario_Register.style.display= "block";
        Contenedor_LoginRegistro.style.left = "410px";
        Formulario_Login.style.display = "none";
        CajaTrasera_Registro.style.opacity = "0";
        CajaTrasera_Login.style.opacity = "1";
    }
    else{
        Formulario_Register.style.display= "block";
        Contenedor_LoginRegistro.style.left = "0px";
        Formulario_Login.style.display = "none";
        CajaTrasera_Registro.style.display = "none";
        CajaTrasera_Login.style.display = "block";
        CajaTrasera_Login.style.opacity = "1";   
    }   
}