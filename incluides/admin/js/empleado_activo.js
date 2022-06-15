document.addEventListener('DOMContentLoaded',function(){

    total_datos();
   
});
document.addEventListener('keyup',function(){
    var datoBusqueda = document.querySelector('#busqueda').value;
    if(datoBusqueda != ""){
        buscar_datos(datoBusqueda);     
    } else {
        total_datos();  
    }
})

function buscar_datos(consulta) {
    
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = './ap/empleados_activos_busqueda.php';
        var data = 'consulta='+consulta;
        request.open('POST',ajaxUrl,true);
        request.setRequestHeader('Content-type','Application/x-www-form-urlencoded');
        request.send(data);
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                   document.querySelector('#datos').innerHTML = request.responseText;
            }
        }
}

function total_datos() {
    
    var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = './app/empleados_activos_total.php';
        request.open('POST',ajaxUrl,true);
        request.send();
        request.onreadystatechange = function() {
            if(request.readyState == 4 && request.status == 200) {
                   document.querySelector('#datos').innerHTML = request.responseText;
            }
        }
}