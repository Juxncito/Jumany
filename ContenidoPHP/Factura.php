<!DOCTYPE html>
<html>
<head>
    <title>JUMANY | Factura</title>
    <link rel="stylesheet" href="../CSS/Style.css">
</head>
<body>
    <header class="header">
		<div class="container">
		    <div class="btn-menu">
		    	<label for="btn-menu">☰</label>
		    </div>
			    <div class="logo">
				    <h1>JUMANY</h1>
			    </div>
			    <nav class="menu">
				    
			    </nav>
		    </div>
		    <input type="checkbox" id="btn-menu">
		    <div class="container-menu">
				<div class="cont-menu">
				<nav>
					<a href="../index.php">Inicio</a>
					<a href="Productos.php">Juegos</a>
					<a href="TarjetasDeRegalo.php">Tarjetas De Regalo</a>
					<a href="OfertaRempalago.php">Oferta Rempalgo</a>
					<a href="SobreNosotros.php">Sobre Nosotros</a>
				</nav>
					<label for="btn-menu">✖️</label>
			</div>
		</div>

	</header>

    <div class="modal Factura_Form">
        <div class="Formulario Coloor">
            <h1>Crear Factura</h1>

            <form  action="crear_factura.php" method="POST">
                <p>
                    <label for="nombre" style="color: white;">Nombre
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="nombre" required>
                </p>

                <p>
                    <label class="Coolor" for="correo">Correo
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="email" name="correo" required>
                </p>
                
                <p>
                    <label for="cedula">Cédula
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="cedula" required>
                </p>
                
                <p>
                    <label for="num_cuenta">Cuenta
                        <span class="obligatorio">*</span>
                    </label>
                    <input type="text" name="num_cuenta" required>
                </p>
                <button type="submit"> Crear Factura</button>
            </form>

            <button class="btn-comprar" onclick="cerrarVentana()">Cerrar</button>
        </div>
    </div>

    <div class="overlay" id="ventanaFlotante" style="display: none;">
        <div class="modal">
            <h2>Última Factura</h2>
            <div id="datosFactura">
                <!-- Aquí se mostrarán los datos de la última factura -->
            </div>

            <button class="btn-comprar" onclick="cerrarVentana()">Cerrar</button>
        </div>
    </div>

    <script>

        function cerrarVentana() {
            document.getElementById("ventanaFlotante").style.display = "none";
            window.location.href = "Productos.php";
        }
    </script>
</body>
</html>