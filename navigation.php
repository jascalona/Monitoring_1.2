<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        <div id="location">

        </div>


        <script>
            if (navigator.geolocation) {
                
                navigator.geolocation.getCurrentPosition(success,error, options);
            
            
            } else {
                alert("no puedes obtener geo");
            }


            var options = {
                EnableHighAccuracy:true,
                Timeout: 500,
                MaximunAge:0
            }


            //Carga golocalizacion
            function success(getCurrentPosition){

                //variables

                let coords = getCurrentPosition.coords;

                console.log(getCurrentPosition);

//                document.getElementById("location").innerHTML = "latitud:" + coords.latitude + "<br>" + "longitud:" + coords.longitude;
            }

            //script error
            function error(err){
                
                alert("Solicitud de geolocalización denegada por el usuario!")
                    
                
            }


        </script>


</body>
</html>