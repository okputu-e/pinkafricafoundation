<?php define("TITLE", "Volunteer | PAF"); ?>
<?php include('include/array.php'); ?>
<?php include('include/header.php'); ?>
<div class="hero bg-green">
    <div class="hero__inner">
        <div class="content">
            <div class="text">
                <h2>Become</h2>
                <h1>Volunteer</h1>
            </div>

        </div>
    </div>
</div>
</div>
</header>
<section class="content">
    <div class="content__inner">

        <div class="volunteer_form">

            <form action="" method="post">
                <div class="form-heading">
                    <h3>Volunteer Form</h3>
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
                    <label for="coverletter">Cover Letter: </label><br>
                    <textarea name="coverletter" id="coverletter" cols="30" rows="10"></textarea>
                </div>
                <div class="form-item">
                    <label for="file">Curriculum Vitae</label>
                    <input type="file" name="file" id="file">
                </div>
                <div class="form-btn">
                    <button type="submit" name="volunteer" id="send" class="btn btn__green">Volunteer</button>
                </div>

            </form>
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