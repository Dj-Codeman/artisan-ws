<?php
// add meta data and css
// include the header 
include("parts/header.html");
?>

<div class="stacked-div">
    <!-- generic html body -->
    <link rel="stylesheet" type="text/css" href="../static/css/cover.css">
    <section class="cover" style="width: 100%; object-position: center bottom; margin-bottom: 40px;">
        <img src="static/img/office.jpg">
        <div class="image-overlay"></div>
        <div class="cover-content">
            <h1 style="margin-bottom: 60px;">See us in action
            </h1>

            <p class="desktop-only" style="padding-left: 20%; width: 60%; text-align: left;">
                For small businesses and Entrepenuers, navigating the complexities of technology can be a daunting and
                expensive task. At
                Artisan
                Hosting, we understand your unique challenges and aspirations. Our mission is to make your journey
                easier.
                This is one such step, envision secure data storage, collaborative tools, and your personalized online
                office
                suite, seamlessly accessible. Is it too good to be true? Experience it firsthand. Every link on this
                page
                unlocks a world of Artisan Hosting products, fortified by our reliable infrastructure.
            </p>
        </div>
    </section>

    <p class="mobile-only" style="padding-bottom: 10% ; font-size: 1.8rem; text-align: center;">
        Every link on this page unlocks a world of Artisan Hosting products,
        fortified by our reliable
        infrastructure
    </p>

    <!-- Disclamer for shared credential services -->
    <h2 class="desktop-only">
        # While exploration is encouraged,
        kindly avoid confidential activities as credentials are accessible to all.
    </h2>
    <h2 class="mobile-only">
        * Please avoid confidential activities while using demos.
    </h2>

    <!-- the image text block -->
    <div class="div-dynamic">
        <!-- Nextcloud -->
        <div class="row-div">
            <img src="static/img/nextcloud.jpg" class="desktop-only">
            <div class="stacked-div">
                <h1> Nextcloud </h1>
                <p style="font-size: 25px;">
                    With Nextcloud individuals and organizations can create their own private cloud environment for
                    storing and managing files, documents, photos, and more. With Nextcloud, you can access your data
                    from any device, securely share files with others, collaborate in real-time on documents, and
                    synchronize your files across various devices.</p>
                <h4 style="margin-top: -10px;">USERNAME: </br> artisan-guest</h4>
                <h4 style="margin-top: -7px;">PASSWORD: </br> none</h4>
                <a class="button tg" href="https://www.artisanhosting.net/under_contruction.php" target="_blank"><i class="fa fa-cloud"
                        style="padding-right: 10px;"></i>NEXTCLOUD</a>

            </div>
        </div>

        <!-- Bitwarden -->
        <div class="row-div">
            <img src="static/img/bitwarden.png" class="desktop-only" style="max-height: 600px; max-width: 710px;">
            <div class="stacked-div">
                <h1> Bitwarden </h1>
                <p style="font-size: 25px;">
                    Bitwarden is a password manager that puts a strong focus on ensuring the security and privacy of
                    your sensitive information.
                    </br>
                    One of the standout features of Bitwarden is its end-to-end encryption. In simpler terms, this
                    process ensures that only you, and not even Artisan Hosting, have access to your passwords and
                    sensitive data.</p>
                <h4 style="margin-top: -10px;">USERNAME: demo@artisanhosting.net</h4>
                <h4 style="margin-top: -1px;">PASSWORD: </h4>
                <h4 style="margin-top: -7px;"> RosenBridge1!</h4>
                <a class="button tg" href="https://bitwarden.arhst.net" target="_blank"><i class="fa fa-lock"
                        style="padding-right: 10px;"></i>BITWARDEN</a>

            </div>
        </div>

        <!-- Plausible -->
        <div class="row-div">
            <img src="static/img/Plausible.webp" class="desktop-only">
            <div class="stacked-div">
                <h1> Plausible </h1>
                <p style="font-size: 25px;">
                    Plausible Analytics is a user-friendly web analytics tool that helps you track and understand the
                    behavior of visitors on your website. It provides insights into how people interact with your site,
                    which pages they visit, how long they stay, and more, all while respecting their privacy. This one
                    is more personal the best example is the show you the data for this website.</p>
                <a class="button tg" href="https://stats.artisanhosting.net/artisanhosting.net" target="_blank"><i
                        class="fa fa-database" style="padding-right: 10px;"></i>Plausible</a>

            </div>
        </div>

        <!-- wordpress -->
        <div class="row-div">
            <img src="static/img/wordpress.png" class="desktop-only">
            <div class="stacked-div">
                <h1> Wordpress </h1>
                <p style="font-size: 25px;">
                    Plausible Analytics is a user-friendly web analytics tool that helps you track and understand the
                    behavior of visitors on your website. It provides insights into how people interact with your site,
                    which pages they visit, how long they stay, and more, all while respecting their privacy. This one
                    is more personal the best example is the show you the data for this website.</p>
                <a class="button tg" href="https://demo.arhst.net" target="_blank"><i class="fa fa-desktop"
                        style="padding-right: 10px;"></i>Wordpress</a>

            </div>
        </div>
    </div>

</div>

<?php
//  insert footer data
include("parts/footer.php");
?>