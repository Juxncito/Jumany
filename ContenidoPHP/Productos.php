<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUMANY | Juegos</title>
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
    <section class="Juegos">

        <div class="Plantilla">
        <?php

        include('../DataBase/Conecxion.php');


        $conn = conectarBaseDeDatos();

        $sql = "SELECT * FROM juegos";
        $result = $conn->query($sql);

        foreach ($result as $row){
            ?>
            <div >
            <div class="Fondo">
                
                <img src="data:image/jpeg;base64, <?php echo base64_encode( $row['Img'] )?>">
                
                <div class="Plantilla-txt">
                    <h3><?php echo $row["Nombre"];?></h3>
                </div>
                <div class="Precio">
                    <p><?php echo '$'. number_format ($row["Precio"],2,'.',',');?></p>
                    <a href="Factura.php" class="btn-comprar">Comprar</a>
                </div>

            </div>
        </div>

        <?php 
        }
        ?>
    
    </section>

    <section class="footer">
    <footer class="footer-distributed">

	<div class="footer-left">
		<h3>JUMANY</h3>

		

		<p class="footer-company-name">Copyright © 2024 <strong>Jumany Corp</strong> All rights reserved.</p>
	</div>

	<div class="footer-center">
		<div>
			<i class="fa fa-phone"><a><img src="../Img/telefono.png" alt=""></a></i>
			<p>+91 74**9**258</p>
		</div>
		<div>
			<i class="fa fa-envelope"><img src="../Img/email.png" alt=""></i>
			<p><a href="#">info@jumany.com</a></p>
		</div>
	</div>
	<div class="footer-right">
		<p class="footer-company-about">
			<span>Redes Sociales</span>
		</p>
		<div class="footer-icons">
			<a href=""><i class="fa fa-facebook"><img src="../Img/facebook.png" alt=""></i></a>
			<a href="#"><i class="fa fa-instagram"><img src="../Img/instagram.png" alt=""></i></a>
			<a href="#"><i class="fa fa-linkedin"><img src="../Img/twitter.png" alt=""></i></a>
			<a href="#"><i class="fa fa-twitter"><img src="../Img/discord.png" alt=""></i></a>
			
		</div>
	</div>
</footer>
</section>
    

</body>
</html>