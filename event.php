<?php define("TITLE", "Event | PAF"); ?>
<?php include('include/array.php'); ?>
<?php include('include/header.php'); ?>
<div class="hero bg-green">
    <div class="hero__inner">
        <div class="content">
            <div class="text">
                <h2>All PAF</h2>
                <h1>Events</h1>
            </div>

        </div>
    </div>
</div>
</div>
</header>
<section class="content">
    <div class="content__inner">
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