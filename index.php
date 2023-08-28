<?php
// add meta data and css
// include the header 
include("parts/header.html");
?>

<!-- generic html body -->
<link rel="stylesheet" type="text/css" href="../static/css/cover.css">
<section class="cover">
    <img src="static/img/Banner.png">
    <div class="image-overlay"></div>
    <div class="cover-content">
        <h1>LEAVE "IT" TO US</h1>
    </div>
</section>

<!-- Generic text blog -->
<div class="stacked-div" style="width: 80%; padding-left: 10%; ">
    <h1> WHAT IS ARTISAN HOSTING</h1>
    <p>
        <?php include("static/text/whatis.html"); ?>
    </p>

    <!-- Hacked theme -->
    <div class="hacked desktop-only">
        <div class="hacked-text">
            <h1> WHAT WE OFFER: </h1>
            <p># Cloud platforms (Nextcloud or Owncloud) </p>
            <p># Office software (MyDrive) </p>
            <p># Photo backup software (piwigo, immich) </p>
            <p># Credential Management Software (Bitwarden, Passbolt) </p>
            <p># Websites and blogs (Wordpress, Custom sites) </p>
        </div>
    </div>

    <!-- Boxing with competitors -->
    <br>
    <hr class="dotted-line" />
    <?php include("static/text/diff.html") ?>
    <hr class="dotted-line" />

    <!-- The 3 divs -->
    <h1 class="desktop-only">ARTISAN HOSTING IS HERE WHEREVER YOUR JOURNEY TAKES YOU</h1>
    <h1 class="mobile-only"> ARTISAN HOSTING IS HERE FOR: </h1>

</div>

<div class="div-dynamic">

    <!-- Small -->
    <div class="div-3">
        <h2> Entrepreneurs </h2>
        <section class="cover">
            <img src="static/img/wp_sml_plant.jpeg" style="height: 500px;">
            <div class="image-overlay"></div>
            <div class="cover-content">
                <p>Start Simply, Save More: Avoid the hassle of migrating and shelling out a higher fee with every
                    new team member.
                    At Artisan Hosting, we simplify your journey with straightforward pricing that works for you.
                </p>
            </div>
        </section>

        <a class="button" href="https://www.artisanhosting.net/small_demo.php"> Entrepreneur Demos </a>
    </div>

    <!-- Medium -->
    <div class="div-3 desktop-only">
        <h2> Small Business </h2>
        <section class="cover">
            <img src="static/img/wp_med_plant.jpeg" style="height: 500px;">
            <div class="image-overlay"></div>
            <div class="cover-content">
                <p>Artisan Hosting empowers your small business with everything from secure data storage to
                    collaborative tools and a stunning website,
                    we've got you covered, so you can focus on what you do best.
                </p>
            </div>
        </section>
        <a class="button" href="https://www.artisanhosting.net/small_demo.php"> Small Business Demos </a>
    </div>

    <!-- Large -->
    <div class="div-3">
        <h2> Beyond </h2>
        <section class="cover">
            <img src="static/img/wp_big_plant.jpeg" style="height: 500px;">
            <div class="image-overlay"></div>
            <div class="cover-content">
                <p>
                    Artisan Hosting has you covered. From collaborating with hundreds of users at a time.
                    To websites with thousands of users a day.
                    Get larger scale infrastructure without a large scale IT department.
                </p>
            </div>
        </section>
        <a class="button" href="https://www.artisanhosting.net/big_demo.php"> Beyond Demos </a>
    </div>
</div>

<div class="stacked-div desktop-only" style="margin-bottom: -60px; width: 60%; padding-left: 20%; ">
    <h1> Interested ? </h1>
    <p style="padding-bottom: 40px;" >
        At Artisan Hosting, we're dedicated to growth and improvement, and that means exciting updates are always on the
        horizon. By following or connecting with us, you'll be the first to know about new features, enhancements, and
        insights.
    </p>
</div>

<hr class="dotted-line" style="margin-top: 5%;" />

<?php
//  insert footer data
include("parts/footer.php");
?>