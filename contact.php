<?php define("TITLE", "Contact | PAF"); ?>
<?php include('include/array.php'); ?>
<?php include('include/header.php'); ?>
<div class="hero bg-green">
    <div class="hero__inner">
        <div class="content">
            <div class="text">
                <h2>PAF</h2>
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</div>
</div>
</header>
<section class="content">
    <div class="content__inner">
        <div class="contact">
            <div class="contact__form">
                <form action="" method="post">
                    <div class="form-heading">
                        <h3>Contact Form</h3>
                    </div>
                    <div class="form-item">
                        <label for="fullname">Full Name: </label><br>
                        <input type="text" name="fullname" id="fullname">
                    </div>
                    <div class="form-item">
                        <label for="email">Email:</label><br>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-item">
                        <label for="subject">Subject:</label><br>
                        <input type="text" name="subject" id="subject">
                    </div>
                    <div class="form-item">
                        <label for="message">Message: </label><br>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-btn">
                        <button type="submit" name="send" id="send" class="btn btn__green">send</button>
                    </div>

                </form>
            </div>
            <div class="contact__map">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=State%20Housing%20Estate,%20Opposite%20Apples%20Fast%20Food.%20Calabar.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                        <style>

                        </style>
                        <style>

                        </style>
                    </div>
                </div>
            </div>
        </div>

        <div class="volunteer">
            <div class="volunteer_inner">
                <h3>Levitate Africa With Us</h3>
                <p> We are certain that when we tell our stories in the next decade, there would be an avalanche of
                    successful tales from those who were given a second chance at life; women and children who could
                    have died but were promptly rescued because we together took a stand to help one more person stay
                    alive by supporting healthcare. </p>
                <div class="buttons">
                    <a href="" class="btn btn__pink">Become a Partner</a>
                    <a href="" class="btn btn__green">Become a Volunteer</a>
                </div>
            </div>
        </div>

        <div class="partners">
            <h3>Our partners</h3>
            <section class="customer-logos slider">
                <?php foreach ($partnerLogo as $logo) : ?>
                    <div class="slide">
                        <img src="<?php echo $logo['img'] ?>" alt="<?php echo $logo['name'] ?>" />
                    </div>
                <?php endforeach; ?>
            </section>
        </div>
    </div>
</section>
<?php include('include/footer.php'); ?>