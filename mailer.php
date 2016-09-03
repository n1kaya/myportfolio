<?php
$email_to = "nikaya.yang@gmail.com";
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$text = "NAME: $name<br>
         EMAIL: $email<br>	 
         MESSAGE: $message";
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
$headers .= "From: <$email>" . "\r\n";
mail($email_to, "Message", $text, $headers);
?>

<!-- 
 <form action="mailer.php" id="contact_form" method="post" class="wow fadeInUpBig" data-wow-offset="80" data-wow-duration="2s">

                    <p>
                    <label>Name</label>
                    <input type="text" name="name" id="name" value="" class="requiredField name" />
                    </p>

                    <p>
                    <label>Email Address</label>				
                    <input type="text" name="email" id="email" value=""  class="requiredField email" /> 
                    </p>

                    <p>
                    <label>Your Message</label>
                    <textarea name="message" id="message" rows="8" cols="30" class="requiredField message"></textarea>
                    </p>

                    <p><input name="submitted" id="submitted" value="Submit" class="submit" type="submit" /></p>

                </form>  <!--End Contact Form --> -->