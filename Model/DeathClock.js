var _second = 1000;
var _minute = _second * 60;
var _hour = _minute * 60;
var _day = _hour * 24;

function showRemaining(end, place, timer) {
	
    var now = new Date();
    var distance = end - now;
    if (distance < 0) {
        clearInterval(timer);
		document.getElementById(place).innerHTML = "DEATH HAS COME!";
        return;

    } else if (place  == "countdown") {
		if (distance < 600000) {
            document.getElementById(place).style.color = "#ff0000";
		}

	} else if (distance < 86400000) {
		document.getElementById(place).style.color = "#ff0000";

    }
	
    var days = Math.floor(distance / _day);
    var hours = Math.floor((distance % _day) / _hour);
    var minutes = Math.floor((distance % _hour) / _minute);
    var seconds = Math.floor((distance % _minute) / _second);
    if (minutes < 10) {minutes = "0"+minutes;}
	if (seconds < 10) {seconds = "0"+seconds;}

	if ( days == 1 ){
        document.getElementById(place).innerHTML = days + " päev ";

	} else if ( days > 1 ){
		document.getElementById(place).innerHTML = days + " päeva ";

	} else {
		document.getElementById(place).innerHTML = "";
	}

	if( hours == 1 ){
		document.getElementById(place).innerHTML += hours + " tund ";

	} else if( hours > 1 || hours == 0 ){
		document.getElementById(place).innerHTML += hours + " tundi ";

	} 	

	document.getElementById(place).innerHTML += minutes + ":";
	document.getElementById(place).innerHTML += seconds;
}