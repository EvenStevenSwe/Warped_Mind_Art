<?php
/*
Template Name: kontakt
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Kontakt</h4>
            <div class="wma-kontakt">

        <form>
            <form action="mail.php" method="POST">
                Meddelande: <textarea name="message" rows="6" cols="25"></textarea>
                Namn: <input type="text" name="name">
                E-post: <input type="text" name="email">
                Ämne: <input type="text" name="amne">
                <input type="submit" value="Skicka"><input type="reset" value="Rensa">
          </form>

            </div>

    </div> <!-- wma-textruta -->

<?php get_footer();