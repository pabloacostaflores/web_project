function f(){
    // location.reload();
}
function en(){

}
function st(){
    var x = document.querySelector(".js-lstudent");
    x.setAttribute("fill","#6C1D45");
    var y = document.querySelector("#poliAdmin");
    y.setAttribute("fill","white");
    var studiForm = document.querySelector(".form");
    studiForm.style.display = "block";
    // var adminForm = document.querySelector(".adminform");
    // adminForm.display = "none";
}
function ad(){
    var x = document.querySelector(".js-lstudent");
    x.setAttribute("fill","white");
    var y = document.querySelector("#poliAdmin");
    y.setAttribute("fill","#6C1D45");
    var studiForm = document.querySelector(".form");
    studiForm.style.display = "none";
    // var adminForm = document.querySelector(".adminform");
    // adminForm.display = "inline";
}
document.querySelector(".js-limpiar").addEventListener('click',f);
document.querySelector(".js-enviar").addEventListener('click',en);
document.querySelector(".js-student").addEventListener('click',st);
document.querySelector(".js-admin").addEventListener('click',ad);