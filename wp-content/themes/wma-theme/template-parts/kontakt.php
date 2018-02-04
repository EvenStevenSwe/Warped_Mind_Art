<?php
/*
Template Name: kontakt
*/
get_header();?>

    <!DOCTYPE html>
    <head>
        <title>Tack för ditt meddelande!</title>
    </head>
    <body>

    <div class="wma-textruta">
        <h4 class="toptext">Kontakt</h4>
        <div class="wma-contact">

    <form action="" method="post">

        <div class="contact-left">
            <textarea name="message" rows="7" placeholder="Meddelande"></textarea>
        </div> <!-- contact left -->

        <div class="contact-right" id="mobilefield">
            <input type="text" name="first_name" placeholder="Förnamn">
            <input type="text" name="last_name" placeholder="Efternamn">
            <input type="text" name="email" placeholder="E-post">
            <input type="text" name="amne" placeholder="Ämne">
        </div> <!-- contact right -->

        <div class="submit-delete">
            <input type="submit" name="submit" value="Skicka" id="input-submit-delete">
        </div> <!-- submit-delete -->
    </form>

	        <?php
	        if(isset($_POST['submit'])){
		        $to = "wma@freakvent.com"; // den egna e-mail adressen
		        $from = $_POST['email']; // den som skickar mailet
		        $first_name = $_POST['first_name'];
		        $last_name = $_POST['last_name'];
		        $amne = $_POST['amne'];
		        $subject = "Tack för ditt meddelande!";
		        $subject2 = "Kopia av skickat meddelande";
		        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
		        $message2 = "Här kommer en kopia på ditt meddelande " . $first_name . "\n\n" . $_POST['message'];

		        $headers = "From:" . $from;
		        $headers2 = "From:" . $to;
		        mail($to,$subject,$message,$headers);
		        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
		        echo "Tack för ditt meddelande! " . $first_name . ", jag svarar så snabbt jag kan.";

	        }
	        ?>

        </div> <!-- wma-contact -->
    </div> <!-- wma-textruta -->

<?php get_footer();

