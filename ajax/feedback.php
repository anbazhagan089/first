
<?php 
error_reporting(0);
?>
<?php
// Fill up array with names
$name=addslashes($_POST['name']);
$email=addslashes($_POST['email']);
$phone=addslashes($_POST['phone']);
$message=addslashes($_POST['message']);





?>


<?php
$to = "anto@a10digital.com";
$subject = "A10 Contact Form";

$message = "

	<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
	<html xmlns='http://www.w3.org/1999/xhtml'>
	<head>
		
	</head>
	<body bgcolor='#E1E1E1' leftmargin='0' marginwidth='0' topmargin='0' marginheight='0' offset='0'>

		
		<center style='background-color:#E1E1E1;'>
			<table border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='bodyTable' style='table-layout: fixed;max-width:100% !important;width: 100% !important;min-width: 100% !important;'>
				<tr>
					<td align='center' valign='top' id='bodyCell'>

						

						<table bgcolor='#FFFFFF'  border='0' cellpadding='0' cellspacing='0' width='500' id='emailBody'>

							<tr mc:hideable>
								<td align='center' valign='top'>
									<!-- CENTERING TABLE // -->
									<table border='0' cellpadding='0' cellspacing='0' width='100%'>
										<tr>
											<td align='center' valign='top'>
												<!-- FLEXIBLE CONTAINER // -->
												<table border='0' cellpadding='30' cellspacing='0' width='500' class='flexibleContainer'>
													<tr>
														<td style='padding-bottom:10px;' align='center' valign='top' width='500' class='flexibleContainerCell'>
                                                            
                                                            


															<!-- CONTENT TABLE // -->
															<table align='left' border='1' cellpadding='0' cellspacing='0' width='100%'>
																<tr>
																	<td align='left' valign='top' style='padding:10px'>
																		Name
																	</td>
																	<td align='left' valign='middle' style='padding:10px'>
																		$name
																	</td>
																</tr>
                                                                
                                                               
                                                                
                                                                <tr>
																	<td align='left' valign='top' style='padding:10px'>
																		Email
																	</td>
																	<td align='left' valign='middle' style='padding:10px'>
																		$email
																	</td>
																</tr>
                                                                
                                                                <tr>
																	<td align='left' valign='top' style='padding:10px'>
																		Interest
																	</td>
																	<td align='left' valign='middle' style='padding:10px'>
																		$phone
																	</td>
																</tr>
                                                                
                                                                <tr>
																	<td align='left' valign='top' style='padding:10px'>
																		Message
																	</td>
																	<td align='left' valign='middle' style='padding:10px'>
																		$message
																	</td>
																</tr>
															</table>
															<!-- // CONTENT TABLE -->

														</td>
													</tr>
												</table>
												<!-- // FLEXIBLE CONTAINER -->
											</td>
										</tr>
									</table>
									<!-- // CENTERING TABLE -->
								</td>
							</tr>
							<!-- // MODULE ROW -->


						
							

						</table>
						<!-- // END -->

					<br><br>

					</td>
				</tr>
			</table>
		</center>
	</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$name.'<'.$email.'>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

?>