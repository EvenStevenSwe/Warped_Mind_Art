<?php
/*
Template Name: kontakt
*/
get_header();?>

    <div class="wma-textruta">
        <h4 class="toptext">Kontakt</h4>
        <div class="wma-contact">
            <form action="mail.php" method="POST">

                <div class="contact left">
                    <textarea name="message" rows="7" placeholder="Meddelande"></textarea>
                </div> <!-- contact left -->

                <div class="contact right">
                    <input type="text" name="name" placeholder="Namn">
                    <input type="text" name="email" placeholder="E-post"">
                    <input type="text" name="amne" placeholder="Ämne">
                </div> <!-- contact right -->

                <div class="submit-delete">
                    <input type="submit" value="Skicka" id="input-submit-delete"><input type="reset" value="Rensa" id="input-submit-delete">
                </div> <!-- submit-delete -->

            </form>
        </div> <!-- wma-contact -->
    </div> <!-- wma-textruta -->

<?php get_footer();