<?

$from = "sistemas@derecho.posgrado.unam.mx";

	// Para el env&iacute;o de mails
	include_once('public_includes/class.phpmailer.php');
	// Indica si los datos provienen del formulario
	//$postback = isset($_POST['postback']) ? true : false;
	
	//if ENVIA POR CORREO LOS ARCHIVOS
		extract($_POST);
		$mail = new phpmailer (); # Crea una instancia
		$mail -> From = $from;
		$mail -> FromName = "Sistemas - Programa de Posgrado en Derecho"; # Puede obtenerse del formulario, por facilidad se hace de esta manera
		$mail -> AddAddress ($to);
		$mail -> Subject = $sbj;
		$mail -> Body = $msg;
		$mail -> IsHTML (true);
		$archivos = '';
		$msg = "Mensaje Enviado";
		
	   	if (isset ($_FILES["archivos"])) { # Si es que se subi&oacute; alg&uacute;n archivo
			$msg .= "<ul>";
			foreach ($_FILES["archivos"]["error"] as $key => $error) { # Iterar sobre la colecci&oacute;n de archivos
				if ($error == UPLOAD_ERR_OK) { // Si no hay error
					$tmp_name = $_FILES["archivos"]["tmp_name"][$key];
					$name = $_FILES["archivos"]["name"][$key];
					$msg .= "<li>$name</li>";
					$name =  $name; # Generar un nombre &uacute;nico para el archivo
					$mail -> AddAttachment ($tmp_name, $name); # A&ntilde;ade el archivo adjunto
					
					/*Si se van a guardar los archivos en un directorio, deber&iacute;an descomentarse
					las siguientes l&iacute;neas, si se van a guardar los nombres 
					de los archivos en una base de datos, aqu&iacute; deber&iacute;a realizarse algo...					
				   	
					move_uploaded_file($tmp_name, "doc_eventos/$name"); # Guardar el archivo en una ubicaci&oacute;n, debe tener los permisos necesarios
					*/
				} #if
	   		} # foreach
			$msg .= '</ul>';
		} # if
		if (!$mail -> Send ()){
			$msg = "No se pudo enviar el email";
		}

?>