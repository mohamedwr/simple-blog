<?php require('data/postsall.php'); ?>
<!DOCTYPE html>
<html>
    <head><?php require('data/head.php'); ?></head>
    <body>

        <?php require('data/navbar.php'); ?>

        <section class="main row">
            <main>
                <?php Start(); ?>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Check out the news
                </div>
                <?php News(); ?>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Normal Posts
                </div>
                <?php Normal(); ?>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Lessons
                </div>
                <?php Less(); ?>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Advices
                </div>
                <?php Advices(); ?>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Coming Soon!
                </div>
                <?php Soon(); ?>
            </main>
        </section>

        <?php require('data/lpaths.php'); ?>

        <?php require('data/footer.php'); ?>

        <?php require('data/scripts.php'); ?>
    </body>
</html>
