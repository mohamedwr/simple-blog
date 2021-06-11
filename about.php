<?php require('data/posts.php'); ?>
<!DOCTYPE html>
<html>
    <head><?php require('data/head.php'); ?></head>
    <body>

        <?php require('data/navbar.php'); ?>

        <section class="me row">
            <div><img src="images/me.jpg" /></div>
            <div class="lead">
                i am mohammed waleed<br>a web designer and developer<br>Facebook: www.facebook.com/mohammed.rady.1293
            </div>
        </section>

        <section class="mystats">
            <h2 class="h1 text-center">My Skills</h2>
            <hr>
            <div class="row">
                <div class="col-lg-3 h3 text-center text-primary">HTML5</div>
                <div class="col-lg-3 h3 text-center text-secondary">CSS3</div>
                <div class="col-lg-3 h3 text-center text-success">Javascript</div>
                <div class="col-lg-3 h3 text-center text-danger">JS Dom</div>
                <div class="col-lg-3 h3 text-center text-warning">JS Bom</div>
                <div class="col-lg-3 h3 text-center text-info">Bootstrap</div>
                <div class="col-lg-3 h3 text-center text-dark">PHP</div>
                <div class="col-lg-3 h3 text-center text-primary">MySQL</div>
            </div>
        </section>

        <section class="contact" id="contact">
            <h2 class="h1 text-center">Contact</h2>
            <hr>
            <form class="form-inline row text-center" action="data/contact.php" method="post">
                <div class="part1 offset-1 text-right col-5">
                    <input required type="text" class="form-control" placeholder="Name" name="name"><br>
                    <input required type="email" class="form-control" placeholder="Email" name="email"><br>
                    <input required type="text" class="form-control mb-2" placeholder="Subject" name="subject">
                </div>
                <div class="part2 text-left col-4">
                    <textarea required class="form-control" placeholder="Your Message.." name="msg"></textarea><br>
                    <button type="submit" class="btn btn-outline-success mb-2">Send</button>
                </div>
            </form>
        </section>

        <?php require('data/footer.php'); ?>

        <?php require('data/scripts.php'); ?>
    </body>
</html>
