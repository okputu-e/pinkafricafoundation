<footer class="footer">
    <div class="footer__inner">
        <div class="content">
            <div class="logo">
                <a href="">
                    <img src="/client/images/paf_logo/paf_logo_white.png" alt="paf_logo_white" />
                </a>
                <small> Working to build a better Africa for men, women, and children. </small>
            </div>
            <div class="social">
                <h4>Follows us</h4>
                <a href="https://web.facebook.com/pages/category/Non-Governmental-Organization--NGO-/PINK-Africa-Foundation-422865494808277/?_rdc=1&_rdr">
                    <i class="fab fa-facebook fa-lg"></i>
                </a>
                <a href="https://www.instagram.com/pinkafricafoundation/?hl=en">
                    <i class="fab fa-instagram fa-lg"></i>
                </a>
                <a href="https://twitter.com/boldlypink_paf">
                    <i class="fab fa-twitter fa-lg"></i>
                </a>
            </div>
            <ul class="useful-links">
                <h4>Useful Links</h4>
                <li class="useful-link">
                    <a href="about.php">About</a>
                </li>
                <li class="useful-link">
                    <a href="volunteer.php">Volunteer</a>
                </li>
                <li class="useful-link">
                    <a href="Event.php">Event</a>
                </li>
                <li class="useful-link">
                    <a href="gallery.php">Gallery</a>
                </li>
                <li class="useful-link">
                    <a href="donate.php">Donate</a>
                </li>
            </ul>
            <div class="footer_contact">
                <h4>Contact Us</h4>
                <address class="contact_list"> 4, Sen Greg Ngaj Street, State Housing Estate, <br /> Opposite Apples
                    Fast Food. Calabar. </address>
                <a href="tel:+234803 934 2680" class="contact_list">+234803 934 2680</a>
                <a href="mailto:info@pinkafricafoundation.org" class="contact_list"> info@pinkafricafoundation.com </a>
            </div>
        </div>
    </div>
    <div class="copyright">
        <hr />
        <small>&copy; <?php echo date('Y'); ?> Pinkafricafoundation. All rights reserved</small>
    </div>
</footer>
</div>
<!--jquery js-->
<script src="/client/javascript/jquery-3.6.0.min.js"></script>
<!--slick js-->
<script src="/client/javascript/slick.min.js"></script>

<?php if (TITLE == "Home | PAF") : ?>
    <!--default js-->
    <script src="/client/javascript/main.js"></script>
    <script src="/client/javascript/hero.js"></script>


<?php elseif (TITLE == "Gallery | PAF") : ?>
    <script src="/client/javascript/main.js"></script>
    <script src="/client/javascript/gallery.js"></script>

<?php elseif (TITLE == "Event | PAF") : ?>
    <!--default js-->
    <script src="/client/javascript/main.js"></script>

<?php else : ?>
    <!--default js-->
    <script src="/client/javascript/main.js"></script>
<?php endif; ?>

</body>

</html>