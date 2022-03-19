window.onload = initCountdown;

function initCountdown(){
  alert("Welcome to my site!")
var countDownDate = new Date("Dec 21, 2018");


  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24)); 
  // Display the result in the element with id="demo"
  document.getElementById("countdown").innerHTML = "Fall will be over in: " + days + " Days!"
}
  

