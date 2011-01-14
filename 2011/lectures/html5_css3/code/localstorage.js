(function() {
  var counter = localStorage.getItem("visit-counter") || "0";
  counter = parseInt(counter) + 1;
  localStorage.setItem("visit-counter", counter);  
  document.getElementById("counter").innerHTML = counter;
})();
