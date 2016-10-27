<?php
//require_once('mysql.php');
$conn = new PDO(
    'mysql:host=localhost;dbname=freelancer', 'root', ''
);

if(isset($_POST['nome_projeto'])){

$nome_projeto = "null";
$dominio = "null";
$possui_logo = "null";
$video_promocional = "null";
$contato_email = "null";
$email_corporativo = "null";
$multiplos_idiomas = "null";
$tipo_pagamento = "null";
$anuncio_adsense_admob = "null";
$plats_mobiles = "null";


if(isset($_POST['nome_projeto'])){$nome_projeto = $_POST['nome_projeto']; }
if(isset($_POST['dominio'])){$dominio = $_POST['dominio']; }
if(isset($_POST['cb_logo'])){$possui_logo = $_POST['cb_logo']; }
if(isset($_POST['cb_videopromocional'])){$video_promocional = $_POST['cb_videopromocional']; }
if(isset($_POST['cb_fomularioemail'])){$contato_email = $_POST['cb_fomularioemail']; }

if(isset($_POST['cb_emailcorporativo'])){ $email_corporativo = $_POST['cb_emailcorporativo'];}



if(isset($_POST['cb_multiplosidiomas'])){ $multiplos_idiomas = $_POST['cb_multiplosidiomas']; }

if(isset($_POST['pagamento'])){
	if($_POST['pagamento'] == 'sim'){
		
		if(isset($_POST['rb_meiopagamento'])){
			
			$tipo_pagamento = $_POST['rb_meiopagamento'];
			
			
		}
		
	}
}


if(isset($_POST['cb_adsense_admob'])){$anuncio_adsense_admob = $_POST['cb_adsense_admob'];}

if(isset($_POST['cb_appandroid'])){	$plats_mobiles = $plats_mobiles . 'android;'; } 
if(isset($_POST['cb_appios'])){	$plats_mobiles = $plats_mobiles . 'ios;'; } 
if(isset($_POST['cb_appwinphone'])){	$plats_mobiles = $plats_mobiles . 'winphone;'; } 


try {
			$stmt = $conn->prepare("INSERT INTO formulario_projetos (nome_projeto,dominio,possui_logo,video_promocional,contato_email,email_corporativo,multiplos_idiomas,pagamento_app,anuncios_adsense_admob,aplicativos_mobile) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

			
			 $stmt->execute(array($nome_projeto, $dominio, $possui_logo,$video_promocional,$contato_email,$email_corporativo,$multiplos_idiomas,$tipo_pagamento,$anuncio_adsense_admob,$plats_mobiles ));

			$stmt->execute();
			echo "ok";

	
	 }catch ( PDOException $ex ){ echo "erro"; }

      }
?>