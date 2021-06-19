function f(){
    location.reload();
}
function en(){

}
function st(){
    x = document.querySelector(".js-lstudent");
    console.log(x);
    x.fill = "black";
    console.log(x);
}
function ad(){

}

document.querySelector(".js-limpiar").addEventListener('click',f);
document.querySelector(".js-enviar").addEventListener('click',en);
document.querySelector(".js-student").addEventListener('click',st);
document.querySelector(".js-admin").addEventListener('click',ad);