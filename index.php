<?php define("TITLE", "Home | PAF"); ?>
<?php include('include/array.php'); ?>
<?php include('include/header.php'); ?>
<div class="main">
    <?php foreach ($heroImages as $image) : ?>
        <div class="main__slides fade">
            <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>" />
            <div class="main__content">
                <div class="content text">
                    <h1><?php echo $image['caption1'] ?></h1>
                    <h2><?php echo $image['caption2'] ?></h2>
                    <div class="main_buttons">
                        <a href="donate.php" class="btn btn__pink">Donate Now</a>
                        <a href="about.php" class="btn btn__green">Know More</a>
                    </div>
                </div>

            </div>
        </div>
    <?php endforeach; ?>

</div>
</div>
</header>
<section class="content">
    <div class="content__inner">
        <div class="core_values">
            <div class="education">
                <div class="icon">
                    <i class="fas fa-school fa-2x"></i>
                </div>
                <div class="text">
                    <p>Education</p>
                </div>
            </div>
            <div class="empowerment">
                <div class="icon">
                    <i class="fas fa-hand-holding-usd fa-2x"></i>
                </div>
                <div class="text">
                    <p>Empowerment</p>
                </div>
            </div>
            <div class="health">
                <div class="icon">
                    <i class="far fa-hospital fa-2x"></i>
                </div>
                <div class="text">
                    <p>Health care</p>
                </div>
            </div>
            <div class="advocacy">
                <div class="icon">
                    <i class="fas fa-podcast fa-2x"></i>
                </div>
                <div class="text">
                    <p>Advocacy</p>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="about__image">
                <img src="/client/images/paf_ambassadors/Paf_Ambs.jpg" alt="" />
            </div>
            <div class="about__content">
                <h3>About Us</h3>
                <div class="about_text">
                    <p class="first_paragraph"> Pink Africa Foundation was founded on the 19th of Jan, 2017 and duly
                        registered with the Corporate Affairs Commission (CAC), Nigeria on the 2nd of May, 2018 as a
                        Non- Governmental, Non-profit organization with a mission to improve the education, economic and
                        health well-being of African women and Children through worldwide collaboration. </p>
                    <br />
                    <p class="second_paragraph"> Pink Africa Foundation was established by a coalition of volunteer
                        professionals in Africa. We believe and work with sincerity of purpose, focused on our goals to
                        impact our world positively for the better. </p>
                </div>
                <div class="more_button">
                    <a href="about.php" class="btn btn__green">More About us</a>
                </div>
            </div>
        </div>
        <div class="events">
            <h3>Events</h3>
            <div class="events__main">
                <?php foreach ($Events as $event) : ?>
                    <div class="event">
                        <div class="event__image">
                            <img src="<?php echo $event['img'] ?>" alt="<?php echo $event['name'] ?>" />
                        </div>
                        <div class="event__details">
                            <?php echo $event['calender'] ?>
                            <h4><?php echo $event['name'] ?></h4>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="events__button">
                <a href="event.php" class="btn btn__pink">All Events</a>
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
        <div class="gallery">
            <h3>Gallery</h3>
            <div class="gallery__images">

                <?php foreach ($galleryImages as $image) : ?>
                    <div class="images">
                        <img src="<?php echo $image['img'] ?>" alt="<?php echo $image['name'] ?>" />
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="gallery__button">
                <a href="https://web.facebook.com/pages/category/Non-Governmental-Organization--NGO-/PINK-Africa-Foundation-422865494808277/?_rdc=1&_rdr" class="btn btn__green">View all</a>
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
<!-- php include'include/eventModal.php'; ?> -->
<?php include('include/footer.php'); ?>