let vcurp = 1;
let vbol = 1;
let vcp = 1;
let vtel = 1;
let vcel = 1;
let vemail = 1;

function curpValida(curp) {
    var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
    
    validado = curp.match(re);
    if (!validado)  //Coincide con el formato general?
        return false;
    //Validar que coincida el dígito verificador
    function digitoVerificador(curp17) {
        //Fuente https://consultas.curp.gob.mx/CurpSP/
        var diccionario  = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
            lngSuma      = 0.0,
            lngDigito    = 0.0;
        for(var i=0; i<17; i++)
            lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
        lngDigito = 10 - lngSuma % 10;
        if (lngDigito == 10) return 0;
        return lngDigito;
    }
    if (validado[2] != digitoVerificador(validado[1])) 
        return false;
        
    return true; //Validado
}
//Función para validar una CURP
function validarCurp(input){
    var curp = input.value.toUpperCase();
    // console.log(curp);
    if (!curpValida(curp)) {
        input.classList.add("wrong");
        input.classList.remove("correct");
        vcurp = 0;
    } else {
        input.classList.remove("wrong");
        input.classList.add("correct");
        vcurp = 1;
    }
}

function boletaValida(boleta) {
    var re = /^[P][PE]\d{8}$/,
    validado = boleta.match(re);
    if(validado)
        return true;
    var ri = /^\d{10}$/,
    validado = boleta.match(ri);
    if(validado)
        return true;
    return false; //Validado
}
//Función para validar una CURP
function validarBoleta(input){
    var boleta = input.value;
    console.log(boleta);
    if (!boletaValida(boleta)) {
        input.classList.add("wrong");
        input.classList.remove("correct");
        vbol = 0;
    } else {
        input.classList.remove("wrong");
        input.classList.add("correct");
        vbol = 1;
    }
}

function cvalida(input) {
    var re = /^\d{5}$/,
    validation = input.match(re); 
    if(validation)return true;
    return false;
}
//Función para validar una CURP
function validarCP(input){
    var CP = input.value;
    if (!cvalida(CP)) {
        input.classList.add("wrong");
        input.classList.remove("correct");
        vcp = 0;
    } else {
        input.classList.remove("wrong");
        input.classList.add("correct");
        vcp = 1;
    }
}
function telvalida(input) {
    var re = /^\d{10}$/,
    validation = input.match(re); 
    if(validation)return true;
    return false;
}
//Función para validar una CURP
function validarTel(input){
    var tel = input.value;
    if (!telvalida(tel)) {
        input.classList.add("wrong");
        input.classList.remove("correct");
        vtel = 0;
    } else {
        input.classList.remove("wrong");
        input.classList.add("correct");
        vtel = 1;
    }
}
function celvalida(input) {
    var re = /^\d{10}$/,
    validation = input.match(re); 
    if(validation)return true;
    return false;
}
//Función para validar una CURP
function validarCel(input){
    var Cel = input.value;
    if (!celvalida(Cel)) {
        input.classList.add("wrong");
        input.classList.remove("correct");
        vcel = 0;
    } else {
        input.classList.remove("wrong");
        input.classList.add("correct");
        vcel = 1;
    }
}
function emailValida(input) {
    var re = /^\d{10}$/,
    validation = input.match(re); 
    if(validation)return true;
    return false;
}
function emailValidar(valor) {
    var punto = false;
    var str = valor;
    console.log(str);
    for(var i=0;i<str.length;i++){
        if(str.charAt(i) == '.')punto=true;
    }
    if(/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/.test(valor) && punto){
        return true;
    } return false;
}
//Función para validar una CURP
function validarEmail(input){
    var Cel = input.value;
    if (!emailValidar(Cel)) {
        input.classList.add("wrong");
        input.classList.remove("correct");
        vemail = 0;
    } else {
        input.classList.remove("wrong");
        input.classList.add("correct");
        vemail = 1;
    }
}   

function f(){
    location.reload();
}
function en(){
    console.log({vcurp ,vbol,vcp,vtel,vcel,vemail });
    if(vcurp == 1 && vbol == 1 && vcp == 1 && vtel == 1 && vcel == 1 && vemail == 1){
        alert("Los datos ingresados son correctos");
        document.querySelector(".js-submit").click();
    }else{
        alert("Verifica la entrada de tus datos");
    }
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