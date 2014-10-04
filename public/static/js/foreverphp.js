var foreverphp = (function() {
	var _foreverphp = {
		resolveUrl: function(url) {
			var newUrl = url;
			var lastChar = newUrl.charAt(newUrl.length - 1);

			//if (!lastChar.contains("/")) {
			//	newUrl = "." + newUrl;
			//}

			// Retorno la nueva Url con el trailing slash controlado
			return newUrl;
		}
	};

	return _foreverphp;
})();