window.onload = function() {
	var m = document.getElementById('viimane');
	m.onclick = function() {
	m.style.top = Math.random()*50 + "%";
	m.style.left = Math.random()*50 + "%";
	}
}