var parlid  = document.getElementsByClassName("parl");
window.onload = function() {
    for (var i = 0; i < parlid.length; i++) {
		parlid[i].onclick = function() {
			liigutaKuul(this);
		}
	}
	
	function liigutaKuul(yks) {
		if (window.getComputedStyle(yks).getPropertyValue("float") == "left") {
			yks.style.cssFloat = "right";
		} else {
			yks.style.cssFloat = "left";
		}
	}
 }