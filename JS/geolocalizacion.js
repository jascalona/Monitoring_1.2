$(document).ready(function () {
    //Click al boton para pedir permisos
    $("#permiso_geo").click(function () {
        //Si el navegador soporta geolocalizacion
        if (!!navigator.geolocation) {
            //Pedimos los datos de geolocalizacion al navegador
            navigator.geolocation.getCurrentPosition(
                    //Si el navegador entrega los datos de geolocalizacion los imprimimos
                    function success(getCurrentPosition){
                        //var geo
                    
                        let coords = getCurrentPosition.coords;
                    
                        
                        var latitude = coords.latitude;
                    
                        var longitude =coords.longitude
                    
                        var geos = String(coords.latitude) + "," + String(coords.longitude);
                    
                    
                        document.getElementById("geo").value=geos;
                    
                    
                        //declaracion para id div
                       // document.getElementsByTagName("geolocalizacion").innerHTML = coords.latitude + "," + coords.longitude;
                        
                    },
                    //Si no los entrega manda un alerta de error
                    function () {
                        window.alert("Solicitud de GEO denegada por el Usuario! NOTA: debe aceptar las politicas de GEO!");
                        

                        //sesion Drop Cache
                        history.replaceState(null,null,location.pathname)

                        
                    
                    }
            );
        }
    });

});

