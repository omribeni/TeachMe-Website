// functions for toggeling the text/img on search
	function showText(){
		document.getElementById("searchh").classList.remove("searchNowHide");
		document.getElementById("searchh").classList.add("searchNowShow");
		document.getElementById("magn").classList.remove("searchNowShow");
		document.getElementById("magn").classList.add("searchNowHide");
	}

	function unshowText(){
		document.getElementById("searchh").classList.add("searchNowHide");
		document.getElementById("searchh").classList.remove("searchNowShow");
		document.getElementById("magn").classList.remove("searchNowHide");
		document.getElementById("magn").classList.add("searchNowShow");
	}