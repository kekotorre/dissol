<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<center><img src="http://mundigraphic.es/img/logomundigraphic.png"></center>
<h2>Hola {{ $name }}, gracias por registrarte en <a href="www.mundigraphic.es"><strong>Mundigraphic</strong></a>!</h2>
<p>Por favor confirma tu correo electrónico.</p>
<p>Para ello simplemente debes hacer click en el siguiente enlace:
    <a href="{{ url('/register/verify/' . $confirmation_token) }}">Clic para confirmar tu email</a>
</p>
</body>
</html>