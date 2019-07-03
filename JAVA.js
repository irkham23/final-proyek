function nama() {
	document.getElementById("tulis").innerHTML = "IRKHAM TAUFIK ABIMANYU";
}

function header() {
	document.getElementById("nama").innerHTML = "HURUHARACODING"
}

function cari () {
			var kata = document.formcari.keyword.value;
			var hasil = "https://www.google.com/search?q=" + kata;
			var feature = "height=500, width=750, scrollbars=yes location=yes"
			window.open(hasil, 'google', feature )
		}