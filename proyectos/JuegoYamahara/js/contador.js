console.log('Hola mundo contador');
var i=0
function aumentar(){
i++;
    Element.textContent = contador;
document.getElementById('contador').innerHTML = i
}
function disminuir(){
i--;
    Element.textContent = contador;
document.getElementById('contador').innerHTML = i
}
function limpiar(){
document.getElementById('contador').innerHTML = ""
}
