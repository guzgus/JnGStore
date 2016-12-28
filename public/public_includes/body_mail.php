<?php

$logo_url = "src='http://bsp.mx/acp/public/imgs/logo_acp_vector.png' width='300' height='115'";

if($origen=="AD1"){


	          $sbj="Solicitud de documentos - ".$cve_periodo." ";
	          $msg = "<!DOCTYPE html>
	                    <html lang='en-ES'>
	                            <head>
	                                <meta charset='utf-8'>
	                        </head>
	                    <body>
	                        <img ".$logo_url." />
	                        <div>
	                          <p><strong>".$empresa_nombre ."</strong></p>
	                          <p><strong>P R E S E N T E </strong></p>
	                          <p style='text-align:justify'>Por este medio le solicitamos amablemente,  que se ponga en contacto con nosotros  para acordar en que momento podemos pasar por  su documentación para realizar la contabilidad de su empresa correspondiente al  periodo ".$cve_periodo.".<br><br>
								Reciba un cordial saludo y quedamos en espera de su confirmación  de enterado.</p>
	                          <p style='text-align:justify'><small><strong>I M P O R T A N T E</strong>
	                          <br>Le recordamos que si no contamos con su información antes del día 08, se cobrará un cargo extra por el reporte de impuestos en tiempo y forma.</small></p>
	                          <p>Atentamente<br>
	                             <strong>Aguilera Contadores Públicos S.C</strong>
	                          </p>
		                      <p style='font-size:11px'> Av. Álvaro  Obregón N° 286 Piso 3-B, C.P. 06700, Col. Roma Delegación Cuauhtémoc, México, Distrito Federal <br>
									Teléfonos:  5211-4421, 5211-5392, 5211-5514, 5211-5515</p><br>
							  <p style='font-size:10px; text-align:center' > Este correo electrónico no admite respuestas. Si requiere más información favor de ponerse en contacto con nosotros vía telefónica.  </p>
	                    </div>
	                    </body>
	                    </html>";       
	             }

if($origen=="READ1"){

	  $sbj="Re: Solicitud de documentos - ".$cve_periodo."";
	  $msg = "<!DOCTYPE html>
	            <html lang='en-ES'>
	                    <head>
	                        <meta charset='utf-8'>
	                </head>
	            <body>
	                <img ".$logo_url." />
	                <div>
	                  <p><strong>".$empresa_nombre."              </strong></p>
	                  <p><strong>P R E S E N T E </strong></p>
	                  <p style='text-align:justify'>Por este medio le informamos que hasta el momento <strong>NO</strong> hemos recibido  documentación para poder realizar su contabilidad del periodo  ".$cve_periodo.".</p>
	                  <p style='text-align:justify'>Es por esta razón de la manera mas atenta le pedimos que se ponga en contacto con nosotros para acordar de que forma se solventará esta situación.</p>
	                  <p style='text-align:justify'>Reciba un cordial saludo y quedamos en espera de su confirmación de enterado.</p>
	                  <p style='text-align:justify'><small><strong>I M P O R T A N T E</strong>
	                  <br>Le recordamos que si no contamos con su información antes del día 08, se cobrará un cargo extra por el reporte de impuestos en tiempo y forma.</small></p>
	                  <p>Atentamente<br>
	                     <strong>Aguilera Contadores Públicos S.C</strong>
	                  </p>
                      <p style='font-size:11px'> Av. Álvaro  Obregón N° 286 Piso 3-B, C.P. 06700, Col. Roma Delegación Cuauhtémoc, México, Distrito Federal <br>
							Teléfonos:  5211-4421, 5211-5392, 5211-5514, 5211-5515</p><br>
					  <p style='font-size:10px; text-align:center' > Este correo electrónico no admite respuestas. Si requiere más información favor de ponerse en contacto con nosotros vía telefónica.  </p>

	                  
	            </div>
	            </body>
	            </html>";  
	      }

if($origen=="addwork"){

	  $sbj="Trabajo Especial";
	  $msg = "<!DOCTYPE html>
	            <html lang='en-ES'>
	                    <head>
	                        <meta charset='utf-8'>
	                </head>
	            <body>
	                <img ".$logo_url." />
	                <div>
	                  <p style='text-align:justify'><strong>".$name_trabajador." </strong>, por este medio te informamos que se te ha asignado al equipo de trabajo especial titulado <strong>'".$titulo_trabajo."'</strong>, para mayor información  favor de ingresar a la plataforma y dirigirse a la sección de “trabajos especiales”.</p>
	                  <p>Atentamente<br>
	                     <strong>Aguilera Contadores Públicos S.C</strong>
	                  </p>
                      <p style='font-size:11px'> Av. Álvaro  Obregón N° 286 Piso 3-B, C.P. 06700, Col. Roma Delegación Cuauhtémoc, México, Distrito Federal <br>
							Teléfonos:  5211-4421, 5211-5392, 5211-5514, 5211-5515</p><br>
					  <p style='font-size:10px; text-align:center' > Este correo electrónico no admite respuestas. Si requiere más información favor de ponerse en contacto con nosotros vía telefónica.  </p>
		            </div>
	            </body>
	            </html>";
	  $msg_text ="<div>
	                  <p style='text-align:justify'><strong>".$name_trabajador." </strong>, por este medio te informamos que se te ha asignado al equipo de trabajo especial titulado <strong>'".$titulo_trabajo."'</strong>, para mayor información  favor de dirigirse a la sección de “trabajos especiales”.</p>
		            </div>" ;
	      }

if($origen=="seguimiento"){

	  $sbj="Seguimiento del periodo ".$cve_periodo."";
	  $msg = "<!DOCTYPE html>
	            <html lang='en-ES'>
	                    <head>
	                        <meta charset='utf-8'>
	                </head>
	            <body>
	                <img ".$logo_url." />
	                <div>
	                  <p style='text-align:justify'>".$msj."</p>
	                  <p style='text-align:justify'>Mensaje enviado por colaborador: ".$msj_add."</p>

	                  <p>Atentamente<br>
	                     <strong>Aguilera Contadores Públicos S.C</strong>
	                  </p>
                      <p style='font-size:11px'> Av. Álvaro  Obregón N° 286 Piso 3-B, C.P. 06700, Col. Roma Delegación Cuauhtémoc, México, Distrito Federal <br>
							Teléfonos:  5211-4421, 5211-5392, 5211-5514, 5211-5515</p><br>
					  <p style='font-size:10px; text-align:center' > Este correo electrónico no admite respuestas. Si requiere más información favor de ponerse en contacto con nosotros vía telefónica.  </p>
		            </div>
	            </body>
	            </html>";
	      }

if($origen=="nuevo" || $origen=="refutado"){

	  $sbj="Avances del periodo ".$cve_periodo."";
	  $msg = "<!DOCTYPE html>
	            <html lang='en-ES'>
	                    <head>
	                        <meta charset='utf-8'>
	                </head>
	            <body>
	                <img ".$logo_url." />
	                <div>
	                  <p style='text-align:justify'>".$msj."</p>
	                  <p>Atentamente<br>
	                     <strong>Aguilera Contadores Públicos S.C</strong>
	                  </p>
                      <p style='font-size:11px'> Av. Álvaro  Obregón N° 286 Piso 3-B, C.P. 06700, Col. Roma Delegación Cuauhtémoc, México, Distrito Federal <br>
							Teléfonos:  5211-4421, 5211-5392, 5211-5514, 5211-5515</p><br>
					  <p style='font-size:10px; text-align:center' > Este correo electrónico no admite respuestas. Si requiere más información favor de ponerse en contacto con nosotros vía telefónica.  </p>
		            </div>
	            </body>
	            </html>";
	      }

if($origen=="cobrosolicitud"){

	  $sbj="Trabajo Especial - Solicitud de cobro";
	  $msg = "<!DOCTYPE html>
	            <html lang='en-ES'>
	                    <head>
	                    <meta charset='utf-8'></head>
	            <body>
	                <img ".$logo_url." />
	                <div>
	                  <p style='text-align:justify'>Estimado Jaime, por este medio le informamos que ".$name_coord.", el cual es coordinador del trabajo especial <strong>'".$titulo_trabajo."'</strong>, ha notificado que el trabajo se ha finalizado correctamente, así mismo ha solicitado de la manera más atenta el cobro del mismo.</p>
	                  <p>Atentamente<br>
	                     <strong>Aguilera Contadores Públicos S.C</strong>
	                  </p>
                      <p style='font-size:11px'> Av. Álvaro  Obregón N° 286 Piso 3-B, C.P. 06700, Col. Roma Delegación Cuauhtémoc, México, Distrito Federal <br>
							Teléfonos:  5211-4421, 5211-5392, 5211-5514, 5211-5515</p><br>
					  <p style='font-size:10px; text-align:center' > Este correo electrónico no admite respuestas. Si requiere más información favor de ponerse en contacto con nosotros vía telefónica.  </p>
	            </div>
	            </body>
	            </html>";  
	      }

if($origen=="changevento"){

	  $sbj="Agenda - Cambio de fecha";
	  $msg = "<!DOCTYPE html>
	            <html lang='en-ES'>
	                    <head>
	                    <meta charset='utf-8'></head>
	            <body>
	                <img ".$logo_url." />
	                <div>
	                  <p style='text-align:justify'>".$name_coord." , por este medio te informamos que el evento titulado <strong>".$asunto."</strong>, ha sido cambiado de fecha por el usuario ".$name_change.".</p>
	                  <p style='text-align:justify'>Actualmente el evento esta agendado con fecha <strong>".$fecha_edit."</strong>.</p>
	                  <p>Atentamente<br>
	                     <strong>Aguilera Contadores Públicos S.C</strong>
	                  </p>
                      <p style='font-size:11px'> Av. Álvaro  Obregón N° 286 Piso 3-B, C.P. 06700, Col. Roma Delegación Cuauhtémoc, México, Distrito Federal <br>
							Teléfonos:  5211-4421, 5211-5392, 5211-5514, 5211-5515</p><br>
					  <p style='font-size:10px; text-align:center' > Este correo electrónico no admite respuestas. Si requiere más información favor de ponerse en contacto con nosotros vía telefónica.  </p>
	            </div>
	            </body>
	            </html>";  
	      }

if($origen=="checkevento"){

	  $sbj="Agenda - URGENTE";
	  $msg = "<!DOCTYPE html>
	            <html lang='en-ES'>
	                    <head>
	                    <meta charset='utf-8'></head>
	            <body>
	                <img ".$logo_url." />
	                <div>
	                  <p style='text-align:justify'>".$msj_to.".</p>
	                  <p>Atentamente<br>
	                     <strong>Aguilera Contadores Públicos S.C</strong>
	                  </p>
                      <p style='font-size:11px'> Av. Álvaro  Obregón N° 286 Piso 3-B, C.P. 06700, Col. Roma Delegación Cuauhtémoc, México, Distrito Federal <br>
							Teléfonos:  5211-4421, 5211-5392, 5211-5514, 5211-5515</p><br>
					  <p style='font-size:10px; text-align:center' > Este correo electrónico no admite respuestas. Si requiere más información favor de ponerse en contacto con nosotros vía telefónica.  </p>
	            </div>
	            </body>
	            </html>";  
	      }


?>