<?php define("TITLE", "Gallery | PAF"); ?>
<?php include('include/array.php'); ?>
<?php include('include/header.php'); ?>
<div class="hero bg-pink">
    <div class="hero__inner">
        <div class="content">
            <div class="text">
                <h2>PAF</h2>
                <h1>Gallery</h1>
            </div>

        </div>
    </div>
</div>
</div>
</header>
<section class="content">
    <div class="content__inner">
        <div class="gallery">
            <h3>Gallery</h3>
            <div class="gallery__images">

                <?php foreach ($galleryImages as $image) : ?>
                    <div class="images">
                        <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>" onclick="openModal()" class="hover-shadow" />
                    </div>
                <?php endforeach; ?>

                <!-- The Modal/Lightbox -->
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <?php foreach ($galleryImages as $image) : ?>
                            <div class="gallerySlides">
                                <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>" />
                            </div>
                        <?php endforeach; ?>

                        <!-- Next/previous controls -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
            </div>
            <div class="gallery__button">
                <a href="https://www.instagram.com/pinkafricafoundation/?hl=en" class="btn btn__green">View More</a>
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
                    <a href="donate.php" class="btn btn__pink">Become a Partner</a>
                    <a href="volunteer.php" class="btn btn__green">Become a Volunteer</a>
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