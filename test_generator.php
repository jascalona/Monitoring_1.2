<script>
function geoloc() {
  d=document.getElementById("mapa");
  if (navigator.geolocation){
    d.innerHTML="<p>Ubicacion:</p>";
    navigator.geolocation.getCurrentPosition(showPosition,showError);
  }
else {
   d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaización.</p>";
   }
}
function showPosition(position){
  latitud=position.coords.latitude;
    longitud=position.coords.longitude;
    d.innerHTML+="<p>Latitud: "+latitud+"</p>";
    d.innerHTML+="<p>Longitud: "+longitud+"</p>";
}
function showError(error){
  switch(error.code) {
    case error.PERMISSION_DENIED:
      d.innerHTML+="<p>El usuario ha denegado el permiso a la localización, NOTA: debe aceptar los permisos!</p>"
      break;
    case error.POSITION_UNAVAILABLE:
      d.innerHTML+="<p>La información de la localización no está disponible.</p>"
      break;
    case error.TIMEOUT:
      d.innerHTML+="<p>El tiempo de espera para buscar la localización ha expirado.</p>"
      break;
    case error.UNKNOWN_ERROR:
      d.innerHTML+="<p>Ha ocurrido un error desconocido.</p>"
      break;
    }
  }
</script>

<div id="geoloc">
  <button onclick="geoloc()">Ver geolocalización.</button><br/>
  <div id="mapa"></div>
</div>