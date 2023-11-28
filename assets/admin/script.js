
var sscdn_Dates = sscdn_4Dates;
var sscdn_discount_time = sscdn_4discount_time;
var countDownDate = new Date(sscdn_Dates+ ' ' + sscdn_discount_time).getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    // Display the countdown in the element with id="countdown_timer"
    document.getElementById("countdown_timer").innerHTML = days + "D " + hours + "H "
        + minutes + "M " + seconds + "S ";
    // If the countdown is over, display a message
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown_timer").innerHTML = "TIME EXPIRED";
    }
}, 1000);