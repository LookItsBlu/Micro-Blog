<!DOCTYPE html>
<html lang="fr">

<?php
    include('includes/verifLogin.inc.php');
    include('includes/header.inc.php');
?>

<body id="page-top" class="index">

    <?php include('includes/haut.inc.php'); ?>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <span class="name">Le fil</span>
                        <hr class="star-light">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section>
        <div class="container">
            <div class="row">
                <?php
                    if($loggedIn) {
                        echo <<<FORM
                        <form method="post" action="php/updateMsg.php?a=add">
                            <div class="col-sm-10">
                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success btn-lg">Envoyer</button>
                            </div>
                        </form>
FORM;
                    }
                ?>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <?php include('includes/messages.inc.php'); ?>

                </div>
            </div>
        </div>
    </section>

    <?php include('includes/bas.inc.php'); ?>

</body>

</html>
