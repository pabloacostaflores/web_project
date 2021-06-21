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

console.log(curpValida("SUEJ010405HDFRLNA0"));

function f(){
    location.reload();
}
function en(){
    // para select no clase sino id
    // alert("Tus datos son correctos?");
    var obj = new Object();
    obj.bol = document.querySelector(".js-boleta").value;
    obj.nombre = document.querySelector(".js-nombre").value;
    obj.apPaterno = document.querySelector(".js-apPaterno").value;
    obj.apMaterno = document.querySelector(".js-apMaterno").value;
    obj.curp = document.querySelector(".js-curp").value;
    console.log(obj.curp);
    if(!curpValida(toString(obj.curp))){
        document.querySelector(".js-curp").classList.add("wrong");
        return;
    }else{
        document.querySelector(".js-curp").classList.add("correct");
    }
    obj.genero = document.querySelector("#js-genero").innerHTML;
    obj.fecha = document.querySelector(".js-fecha").value;
    obj.estado = document.querySelector("#js-estado").innerHTML;
    obj.del = document.querySelector(".js-del").value;
    obj.col = document.querySelector(".js-col").value;
    obj.dir = document.querySelector(".js-dir").value;
    obj.cp = document.querySelector(".js-cp").value;
    obj.tel = document.querySelector(".js-tel").value;
    obj.cel = document.querySelector(".js-cel").value;
    obj.email = document.querySelector(".js-email").value;
    obj.estpro = document.querySelector("#js-escuela").innerHTML;
    obj.pro = document.querySelector("#js-entidad_pro").innerHTML;
    obj.opci = document.querySelector("#js-opcion").innerHTML;
    console.log(obj);
    //insertar lo de arriba en php

    // if(exito)alert("Datos enviados con exito!");
    // else alert("Hubo un error en el sistema.");
    alert("Te hemos enviado a tu correo el pdf de tu inscripcion");

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