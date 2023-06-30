<?php
//
			if(filter_var($email, FILTER_VALIDATE_EMAIL))
			{
					// Many receivers
					 $to  = "hopeliz835@gmail.com, $email";

				 // Subject
					 $subject = $get_subject;

					 // message
					 $message = "
					 <!DOCTYPE html>
					 <html>
					  <head>
					   <meta charset=\"utf-8\">
					   <title></title>
					   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
					  </head>
					  <body>
					   <h1 align='center'>Contact</h1>
					   <table border=2 cellpadding=5px cellspacing=5px align='center'>
						<tr>
						 <th>Full name: </th>
						 <td>$fullname</td>
						</tr>
						<tr>
						 <th>E-mail address: </th>
						 <td>$email</td>
						</tr>
						<tr>
						<tr>
						 <th>Phone number: </th>
						 <td>$phone</td>
						</tr>
						<tr>
						 <th>Subject: </th>
						 <td>$subject</td>
						</tr>
						<tr>
						 <th>Message: </th>
						 <td>$$get_message</td>
						</tr>
					   </table>
					  </body>
					 </html>
					 ";

					// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
					 $headers[] = 'MIME-Version: 1.0';
					 $headers[] = 'Content-type: text/html; charset=utf-8';

					 // En-têtes additionnels
					 //$headers[] = 'To: <hopeliz835@gmail.com>';
					 $headers[] = "From: <hopeliz835@gmail.com>";
					 //$headers[] = "Cc: $email, hopeliz835@gmail.com";
					 //$headers[] = 'Bcc: hopeliz835@gmail.com';
					 // Envoi
					 if(mail($to, $subject, $message, implode("\r\n", $headers)))
					 {
                        echo'<div style="text-align: center;"><h5>Your message has been successfully sent</div>';
					 }
			}
			else
			{
				echo "An error has occured please try it again!";
			}
