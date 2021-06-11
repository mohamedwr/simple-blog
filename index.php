<?php require('data/posts.php'); ?>
<!DOCTYPE html>
<html>
    <head><?php require('data/head.php'); ?></head>
    <body>

        <?php require('data/navbar.php'); ?>

        <section class="main row">
            <main>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Check out the news
                </div>
                <?php oneNews(); ?>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Latest Post
                </div>
                <?php oneLast(); ?>
                <div class="alert alert-primary text-center alerts" role="alert">
                    Coming Soon!
                </div>
                <?php oneSoon(); ?>
            </main>
        </section>

        <?php require('data/lpaths.php'); ?>

        <?php require('data/footer.php'); ?>

        <?php require('data/scripts.php'); ?>
    </body>
</html>
