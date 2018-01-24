<?php
/*
Template Name: kontakt
*/
get_header();?>

    <aside id="kontakt" class="kontakt">
        <div class="text-vertical-center">
            <div class="content_box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <form id="contact-form" method="post" action="js/contact.php">

                                <div class="messages"></div>
                                <div class="controls"><div class="row"><div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_name">Namn: *</label>
                                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Var vänlig skriv ditt förnamn *" required="required" data-error="Förnamn behövs här.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6"><div class="form-group">
                                                <label for="form_lastname">Efternamn *</label>
                                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Var vänlig skriv ditt efternamn *" required="required" data-error="Efternamn behövs här.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row"><div class="col-md-6"><div class="form-group">
                                                <label for="form_email">E-mail *</label>
                                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Var vänlig skriv ditt e-mail *" required="required" data-error="Giltig email behövs här.">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6"><div class="form-group">
                                                <label for="form_phone">Telefon</label>
                                                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Var vänlig skriv ditt telefonnummer">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row"><div class="col-md-12"><div class="form-group">
                                                <label for="form_message">Meddelande *</label>
                                                <textarea id="form_message" name="message" class="form-control" placeholder="Ditt meddelande *" rows="4" required="required" data-error="Var vänling, lämna ett meddelande."></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-12"><input type="submit" class="btn btn-success btn-send" value="Skicka meddelande"></div>
                                    </div>

                                    <div class="row"><div class="col-md-12"><p class="ftext"><strong>*</strong> Obligatorisk för att kunna få svar.</p></div></div>

                                </div> <!-- controls -->
                            </form>
                        </div> <!-- col-lg-8 col-lg-offset-2 -->
                    </div> <!-- row -->
                </div> <!-- container -->
            </div> <!-- content_box -->
        </div> <!-- text-vertical-center -->
    </aside>



<?php get_footer();