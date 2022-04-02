
<!DOCTYPE HTML>

<html>
	<head>
		<title>Hackers</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

        <div id="wrapper">
                <header id="header">
                    <div class="logo">
                        <span class="icon fa-gem"></span>
                    </div>
                    <div class="content">
                        <div class="inner">
                            <h1>Resultados de la consulta</h1>
                        </div>
                    </div>
                    <nav>
                        <ul>
                            <li><a>Nombre: <b>{{$datos['name']}}</b></a></li>
                            <li><a>Edad aproximada: <b>{{$datos['age']}}</b></a></li>
                            <li><a>Similitudes: <b>{{$datos['count']}}</b></a></li>
                        </ul>
                    </nav>
                </header>

                <footer id="footer">
                    <p>Programa realizado por Aaron Zamora</p>
                </footer>
        </div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>

