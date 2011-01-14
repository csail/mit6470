var onSuccess = function (position) {
  var coords = position.coords;
  var positionString = "at " + coords.latitude + ", " + coords.longitude;
  document.getElementById("location").innerHTML = positionString;   
}
var onError = function (error) { alert(error); }
navigator.geolocation.getCurrentPosition(onSuccess, onError);
