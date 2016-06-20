<?php header('Content-Type: text/html; charset=ISO-8859-1'); ?>

<?php
$pg = "principal";
if (isset($_GET["pg"])) {
	$pg = $_GET["pg"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt" xml:lang="pt">

    <head>
    	<title>Audio Clin - Otorrinonaringologia e fonoaudiologia</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
        <meta name="description" content="" />
    	<meta name="keywords" content="" />
    	<meta name="robots" content="index,follow" />
    	<meta name="author" content="http://www.tiedesign.com.br" />
    
    	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>

        <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.8.16.custom.css" type="text/css" />
        <link rel="stylesheet" href="css/open-sans/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css?dt=2016" type="text/css" />
		<link rel="stylesheet" href="css/jquery.ad-gallery.css" type="text/css" media="screen"/>
        
<?php
$user_agent = $_SERVER["HTTP_USER_AGENT"];
if (preg_match('/Opera/i',$user_agent)) {
?>
        <link rel="stylesheet" href="css/style_opera.css" type="text/css" media="screen"/>
<?php	
}
?>

    	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    	<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
    	<script type="text/javascript" src="js/util.js"></script>
    	<script type="text/javascript" src="js/jquery.ad-gallery.pack.js"></script>
		<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&language=pt_BR"></script>
    	<script type="text/javascript">
            $(document).ready(function() {
				<?php 
				if ($pg == "clinica") { 
				?>            	
            	var galleries = $('.ad-gallery').adGallery({
					loader_image: 'images/ajax-loader.gif',
					display_next_and_prev: true,
					display_back_and_forward: true,
					slideshow: {
						enable: false
					}
				});
				<?php
				} 
				?>            	
            });
    	</script>
    </head>

    <body>

        <div id="pg">
            <div id="header">
            	<a href="?">
					<img id="logo" src="images/audioclin.jpg"/>
				</a>

				<img id="atendimento" src="images/atendimento.jpg"/>
                
                <div id="menu">
                    <table width="100%" cellspacing="0" align="right">
                        <tr>
                            <td align="center"><a href="?" class="menuitem">Principal</a></td>
                            <td align="center"><a href="?pg=clinica" class="menuitem">Clínica</a></td>
                            <td align="center"><a href="?pg=servicos" class="menuitem">Serviços</a></td>
                            <td align="center"><a href="?pg=equipe" class="menuitem">Equipe</a></td>
                            <td align="center"><a href="?pg=eventos" class="menuitem">Eventos</a></td>
                            <td align="center"><a href="?pg=convenios" class="menuitem">Convênios</a></td>
                            <td align="center" width="100px"><a href="?pg=localizacao" class="menuitem">Localização</a></td>
                            <td align="center"><a href="?pg=contato" class="menuitem">Contato</a></td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div id="pgContent" class="<?php echo ($pg == "principal") ? "" : "watermark"; ?>">
                <?php include($pg . ".php"); ?>
            </div>

            <div id="footer">
				<span id="endereco" class="floatLeft">
					<strong>Endereço</strong>
					<span>
						<br />Av. Benjamin Constant, 1010 - Sala 607
						<br />Centro - Lajeado/RS
					</span>
				</span>
				
				<span id="contato" class="floatLeft">
					<strong>Atendimento</strong>
					<span>
						<br />
						Fones: (51) 3714.5227 / (51) 3714.2223
						<br />
						E-mail: contato@audioclinrs.com.br
					</span>
				</span>
				 
				
				<span id="tie" class="floatRight">
					<a id="tie" title="Tie Design - &quot;A eleg&acirc;ncia do seu neg&oacute;cio na Internet&quot;" href="http://www.tiedesign.com.br" target="_blank">
						<img src="images/tie.png"/>
					</a>
				</span>
            </div>
			<span id="copyright" class="floatRight">
				&copy; Copyright 2011 Audio Clin &mdash; Todos os direitos reservados
			</span>

        </div>

		<br />
		
    </body>
</html>