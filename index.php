<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">  	
    
  </head>
  <body>

    <header></header>
    <main>
	<div id="wrapper">
			<div class="saludo">
			<?php echo '<p> Hola Mundo</p>'?>
		</div>
    		<div class="text-center">
  				<div class="contenedor" id="cambiar">
    				<h1>con php css y js<span>&#160;</span></h1>
      			</div>

	      	
			    <div class="form-element">
			        <label>Nombre</label>
			        <input type="text" name="username" id="input" pattern="[a-zA-Z0-9]+" required />
			    </div>
			    
			    <button type="submit"  onClick="callFunction();" name="login" value="Enviar">Enviar</button>
			    
			
				<?php echo "<br/><br/>" . date("l jS \of F Y h:i:s A"); ?>

			</div>
		</div>
    </main>
    <footer></footer>

    <script src="script/script.js" type="text/javascript"></script>
    
  </body>
</html>


