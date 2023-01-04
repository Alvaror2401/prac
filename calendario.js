meses=["enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre","noviembre","diciembre"];
lasemana=["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"]
diassemana=["lun","mar","mié","jue","vie","sáb","dom"];
//Tras cargarse la página ...
window.onload = function() {
    //fecha actual
    hoy=new Date(); //objeto fecha actual
    diasemhoy=hoy.getDay(); //dia semana actual
    diahoy=hoy.getDate(); //dia mes actual
    meshoy=hoy.getMonth(); //mes actual
    annohoy=hoy.getFullYear(); //año actual

// Elementos del DOM: en cabecera de calendario 
tit=document.getElementById("titulos"); //cabecera del calendario
ant=document.getElementById("anterior"); //mes anterior
pos=document.getElementById("posterior"); //mes posterior
// Elementos del DOM en primera fila
f0=document.getElementById("fila0");