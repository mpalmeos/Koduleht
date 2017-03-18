window.onload = function() {
	var b = document.getElementsByClassName("parl");
	
    for (var i = 0; i < b.length; i++) {
		b[i].onclick = function() {
			if (window.getComputedStyle(b).getPropertyValue("float") == "left"){
				b.style.cssFloat = "right";
			} else {
				b.style.cssFloat = "left";
			}
		}
	}
 }