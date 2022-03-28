<?php define("TITLE", "About | PAF"); ?>
<?php include('include/array.php'); ?>
<?php include('include/header.php'); ?>
<div class="hero bg-pink">
    <div class="hero__inner">
        <div class="content">
            <div class="text">
                <h2> We are </h2>
                <h1>
                    <span class="pink">Pink</span>
                    <span class="green">Africa</span> Foundation
                </h1>
            </div>

        </div>
    </div>
</div>
</div>
</header>
<section class="content">
    <div class="content__inner">

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
            </div>
        </div>
        <div class="core">
            <h3>Core Values</h3>
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