<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript">
    function iniCANVAS(cual){
        var miCANVAS = document.getElementById(cual);
        if (miCANVAS.getContext) {
            var canvas=miCANVAS.getContext("2d");
            canvas.fillStyle="#db4141";
            canvas.fillRect (0,0,300,200);
        }
    }
    function drawSQUARES(cual,x1,y1,w,h,c) {
        var miCANVAS = document.getElementById(cual);
        if (miCANVAS.getContext) {
            var canvas=miCANVAS.getContext("2d");
            canvas.fillStyle=c;
            canvas.fillRect(x1,y1,w,h);
        }
    }
    function drawRECS(cual,x1,y1,w,h,c) {
        var miCANVAS = document.getElementById(cual);
        if (miCANVAS.getContext) {
            var canvas=miCANVAS.getContext("2d");
            canvas.fillStyle=c;
            canvas.strokeRect(x1,y1,w,h);
        }
    }
    function texto(cual){
        var miCANVAS = document.getElementById(cual).innerHTML = "<textarea style='border-color:red;'>Hola Mundo</textarea>";
        if (miCANVAS.getContext) {
            var canvas=miCANVAS.getContext("2d");
            canvas.fillStyle=c;
            canvas.strokeRect(x1,y1);
        }
    }
</script>
</head>
<body>
    <canvas id="demo" width="300" height="200"> <img src="URL_imagenAlterna" /> </canvas>

    <script>iniCANVAS('demo')</script>

    <button type="button" onclick="drawSQUARES('demo',10,20,50,50,'#F00');"> rectangulo 1 </button>
    <button type="button" onclick="drawSQUARES('demo',30,100,70,50,'#00F');"> rectangulo 2 </button>
    <button type="button" onclick="drawRECS('demo',50,10,50,50,'#000');"> rectangulo 3 </button>
    <button type="button" onclick="drawRECS('demo',160,110,70,50,'#000');"> rectangulo 4 </button>
    <button type="button" onclick="texto('demo',160,110);"> texto 4 </button>
</body>
</html>
