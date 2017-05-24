$(document).ready(function(){

	$('.pic a').lightBox({
	// we call the lightbox method, and convert all the hyperlinks in the .pic container into a lightbox gallery

		imageLoading: 'lightbox/images/loading.gif',
		imageBtnClose: 'lightbox/images/close.gif',
		imageBtnPrev: 'lightbox/images/prev.gif',
		imageBtnNext: 'lightbox/images/next.gif'

	});

});