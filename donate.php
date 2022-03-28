<?php define("TITLE", "Donate | PAF"); ?>
<?php include('include/array.php'); ?>
<?php include('include/header.php'); ?>
<div class="hero bg-green">
    <div class="hero__inner">
        <div class="content">
            <div class="text">
                <h2>PAF</h2>
                <h1>Partners</h1>
            </div>

        </div>
    </div>
</div>
</div>
</header>
<section class="content">
    <div class="content__inner">

        <div class="donate">
            <h3>Sponsorship Packages</h3>

            <div class="donate__card">

                <?php foreach ($donateCards as $card) : ?>
                    <div class="card-container">
                        <div class="card-container__inner">
                            <div class="card-head">
                                <h4 class="green"><?php echo $card['card-heading'] ?></h4>
                                <p><?php echo $card['card-price'] ?></p>
                            </div>
                            <ul class="card-list">
                                <?php echo $card['card-item'] ?>
                            </ul>
                            <div class="card-footer">
                                <a href="" class="btn <?php echo $card['btn-color'] ?>">Donate</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

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