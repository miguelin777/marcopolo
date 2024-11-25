<?php
include ('conexion.php');
$producto="SELECT * FROM producto";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Modificar producto</title>
    <meta charset="utf-8">
		<link rel="stylesheet" href="nicepage.css" media="screen">
		<link rel="stylesheet" href="AGREGAR.css" media="screen">
        <link rel="stylesheet" href="CSS.css" media="screen">
		<script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
		<script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
		<link rel="stylesheet" href="styles-new.css">
		<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
		<link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
</head>
<body>
<header class="u-clearfix u-header u-header" id="sec-9723"><div class="u-clearfix u-sheet u-sheet-1">
			<a href="#" class="u-image u-logo u-image-1" data-image-width="188" data-image-height="196">
			  <img src="images/WhatsAppImage2024-05-19at1.21.12PM.jpeg" class="u-logo-image u-logo-image-1">
			</a>
			<p class="u-align-center u-custom-font u-font-montserrat u-text u-text-1">MARCO POLO<br>PAPEL*IMPRESIÓN </p>
			
			<nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-position="">
				<div class="menu-collapse u-custom-font u-font-montserrat" style="font-size: 1.125rem; letter-spacing: 0px; font-weight: 700;">
					<a class="u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#"></a>
				</div>
				<div class="u-custom-menu u-nav-container">
					<ul class="u-custom-font u-font-montserrat u-nav u-spacing-20 u-unstyled u-nav-1">
						<li class="u-nav-item">
							<a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="HOME.html" style="padding: 5px;">HOME</a>
						</li>
						<li class="u-nav-item">
							<a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="AGREGAR.html" style="padding: 5px;">AGREGAR</a>
						</li>
						<li class="u-nav-item">
							<a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="MODIFICAR.html" style="padding: 5px;">MODIFICAR</a>
						</li>
						<li class="u-nav-item">
							<a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base" href="ELIMINAR.html" style="padding: 5px;">ELIMINAR</a>
						</li>
					</ul>
				</div>
				<div class="u-custom-menu u-nav-container-collapse">
					<div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
						<div class="u-inner-container-layout u-sidenav-overflow">
							<div class="u-menu-close"></div>
							
							<ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
								<li class="u-nav-item">
									<a class="u-button-style u-nav-link" href="HOME.html">HOME</a>
								</li>
								<li class="u-nav-item">
									<a class="u-button-style u-nav-link" href="AGREGAR.html">AGREGAR</a>
								</li>
								<li class="u-nav-item">
									<a class="u-button-style u-nav-link" href="MODIFICAR.html">MODIFICAR</a>
								</li>
								<li class="u-nav-item">
									<a class="u-button-style u-nav-link" href="ELIMINAR.html">ELIMINAR</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
				</div>
			</nav>
		</header>
		
		<section align="center">
		
            <div class="u-carousel-item u-clearfix u-section-1-2">
                <div class="u-clearfix u-sheet u-sheet-1">
                
                    <h3 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1">Prod<span style="font-weight: 700;"></span>ucto<span style="font-weight: 700;"></span></h3>
                    <br>
                    <br>
                    <div class="u-expanded-width u-table u-table-responsive u-table-1">
        
                        <table class="u-table-entity">
                        
                            <colgroup>
                                <col width="50%">
                                <col width="50%">
                            </colgroup>
                        
                            <tbody class="u-align-center u-font-montserrat u-table-body u-table-body-1">
                            
                                <tr style="height: 49px;" class="">
									<td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-1">Id Marca</td>
									<td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-1">Id Categoria</td>
									<td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-1">Nombre</td>
									<td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-1">Descripción</td>
									<td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-1">Precio</td>
									<td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-1">Imagen</td>
                                </tr>

                                <?php
                            $resultado=mysqli_query($conexion,$producto);
                            while ($row=mysqli_fetch_assoc($resultado)) { ?>
                                <tr align="center">
								<td><?php echo $row["idMarca"];?></td>
								<td><?php echo $row["idCategoria"];?></td>
								<td><?php echo $row["nombre"];?></td>
								<td><?php echo $row["descr"];?></td>
                                <td><?php echo $row["precio"];?></td>
                                <td><img width="130" height="130" src="images/<?php echo $row["imagen"];?>"></td>
                                <td><a href="actualizarProd.php?id=<?php echo $row["idProducto"]; ?>" class="table__item__link">Editar</a></td>
                                </tr>
                            <?php }mysqli_free_result($resultado); ?>
    
                                </tbody>    
                        <script src="confirmacion.js"></script>
                        </table>
                    </div>
                    <br>
                    <a href="MODIFICAR.html" class="u-active-none u-align-center u-border-hover-palette-2-base u-border-none u-btn u-button-style u-custom-font u-font-montserrat u-hover-none u-palette-1-base u-text-body-color u-btn-2">REGRESAR</a>
                </form>
                </div>
            </div>
        </div>
    </section>

	</body>
</html>