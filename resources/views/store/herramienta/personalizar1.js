function iniCANVAS(variable){

	var miCANVAS = document.getElementById(variable);
	if (miCANVAS.getContext) {
		var canvas=miCANVAS.getContext("2d");
		canvas.fillStyle="#e34949";
		canvas.fillRect (0,0,300,200);
	}

}
