window.onload = function() {
	var b = document.getElementById('parl')
	var massiiv = new Array(b);
	massiiv.onclick = function(){
		for (i=0; i<massiiv.length; i++){
			var c = massiiv[i];			
			if (c.style.cssFloat == left){
				c.style.cssFloat = right;
			} else if (c.style.cssFloat == right) {
				c.style.cssFloat = left;
			}
		}
	}
}