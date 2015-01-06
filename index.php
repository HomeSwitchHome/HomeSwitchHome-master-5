<?php require_once("config.php"); ?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Home Switch Home</title>
		<link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		<script>
			function disparaitre(){
			      if(document.getElementById('masquer').style.display == 'none'){
			      document.getElementById('masquer').style.display = 'block';
			      }
			      else {
			      document.getElementById('masquer').style.display = 'none';
			      }
			}
		</script>
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.onvisible.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
	</head>

	<body>
		<div id="wrapper">
			<?php include("header.php"); ?>
	
		<section id="banner">
			<div id="logo">
				
				<h1>Home Switch Home</h1>
				<p>Le site d'échange de logement entre particuliers</p>
				<a href="#" class="button_transparent" onclick="disparaitre();"><p><div id="button_transparent">Comment ça marche ?</div></p></a>	
			</div>
			<div id="masquer" class="ccmarche" style="display: none;">
					<img src="images/logoccm.png" onclick="disparaitre();" id="ccmar">
			</div>
			</section>			
			<div id="masquer" class="ccmarche" style="display: none;">
					<img src="images/logoccm.png" onclick="disparaitre();">
			</div>	
		
			<div id="page" class="container">
		
				<div class="entry">

					<p>Home Switch Home est un site d'échange de logement gratuits entre particulliers. Avez-vous déjà songé partir en vacances, 2 semaines, un mois, ou plus, et ce gratuitement ? Si oui, ce site est fait pour vous. Vous y trouverez toutes les raisons d'essayer un nouveau mode de vacances, celui de l'échange de maisons. Vous aimeriez voyager en étant chez vous tout en respectant votre budget? La formule d'échange d'appartement ou de maison vous conviendra... Villa, maison, appartement: troquez - les et vive les vacances gratuites! </p>
				
				</div>
		
			</div>
			<div id="titre_carousel">
				<h1><strong>Logements les plus populaires</strong></h1>
			</div>
			<section class="carousel">
				<div class="reel">

					<article>
						<div class="tbox1">
				
					<div class="box-style">
				
						<div class="content">
				
							<div class="image"><img src="images/maison1.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>						
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style">
				
						<div class="content">
				
							<div class="image"><img src="images/maison2.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>					
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style">
				
						<div class="content">
				
							<div class="image"><img src="images/maison3.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>							
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style">
				
						<div class="content">
				
							<div class="image"><img src="images/maison4.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>						
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style">
				
						<div class="content">
				
							<div class="image"><img src="images/maison5.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>					
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style">
				
						<div class="content">
				
							<div class="image"><img src="images/maison6.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>							
					</article>
			</section>

		</br>
		<div id="titre_carousel">
				<h1><strong>Logements les mieux notés</strong></h1>
		</div>
		<section class="carousel">
				<div class="reel">

					<article>
						<div class="tbox1">
				
					<div class="box-style-orange">
				
						<div class="content">
				
							<div class="image"><img src="images/maison5.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>						
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style-orange">
				
						<div class="content">
				
							<div class="image"><img src="images/maison4.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>					
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style-orange">
				
						<div class="content">
				
							<div class="image"><img src="images/maison6.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>							
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style-orange">
				
						<div class="content">
				
							<div class="image"><img src="images/maison2.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>						
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style-orange">
				
						<div class="content">
				
							<div class="image"><img src="images/maison1.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>					
					</article>
				
					<article>
						<div class="tbox1">
				
					<div class="box-style-orange">
				
						<div class="content">
				
							<div class="image"><img src="images/maison3.jpg" width="324" height="" id="imgcarousel" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>							
					</article>
			</section>






			<!--<div id="three-column" class="container">
				
				<div class="tbox1">
				
					<div class="box-style">
				
						<div class="content">
				
							<div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
								
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>
		
				<div class="tbox2">
			
					<div class="box-style">
				
						<div class="content">
					
							<div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
					
								<h2>Mauris vulputate dolor</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>
		
				<div class="tbox3">
			
					<div class="box-style">
				
						<div class="content">
					
							<div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
					
								<h2>Nulla luctus eleifend </h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh.</p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>
	
				</div>
	
			<div id="three-column" class="container">
		
				<div class="tbox1">
			
					<div class="box-style">
				
						<div class="content">
					
							<div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
				
								<h2>Fusce ultrices fringilla</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>
				
							</div>
			
						</div>
		
					</div>
		
				<div class="tbox2">
			
					<div class="box-style">
			
						<div class="content">
					
							<div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
					
								<h2>Mauris vulputate dolor</h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. </p>
								<a href="#" class="button">Plus d'informations</a>

							</div>
			
						</div>
		
					</div>
		
				<div class="tbox3">
			
					<div class="box-style">
				
						<div class="content">
					
							<div class="image"><img src="images/maison1.jpg" width="324" height="200" alt="" /></div>
					
								<h2>Nulla luctus eleifend </h2>
								<p>Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh.</p>
								<a href="#" class="button">Plus d'informations</a>

							</div>
			
						</div>
		
					</div>

				</div> 

			</div> -->
		</br>
		</div>	
		<div id="footer">

			<?php include("footer.php") ?>

		</div>

	</body>

</html>