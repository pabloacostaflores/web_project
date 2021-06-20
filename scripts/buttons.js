//Función para validar una CURP
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
function validarEmail(valor) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(valor)){
        alert("La dirección de email " + valor + " es correcta.");
    } else {
        alert("La dirección de email es incorrecta.");
    }
}

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