window.onload = function() {
	var b = document.getElementById('parl');
	var massiiv = [];
  massiiv.push(b);
  b.onclick = function() {
    for (i = 0; i < massiiv.length; i++) {
      var c = massiiv[i];
      if (c.style.cssFloat == "left") {
        b.style.cssFloat = "right";
      } else if (c.style.cssFloat == "right") {
        b.style.cssFloat = "left";
      }
    }
  }
}