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
        <!-- Owncloud -->
        <div class="row-div">
            <img src="static/img/Owncloud.png" class="desktop-only" style="max-height: 600px; max-width: 710px;">
            <div class="stacked-div">
                <h1> Owncloud </h1>
                <p style="font-size: 25px;">
                    OwnCloud powered by Artisan Hosting, where innovation meets customization. Experience a cloud
                    solution that adapts to your unique needs, from storage capacities to collaboration tools, all while
                    ensuring unparalleled security through encryption and comprehensive access controls. Seamlessly
                    collaborate on projects and ideas with an intuitive user interface that simplifies even the most
                    complex tasks. While NextCloud offers its merits, OwnCloud stands out as a leader in providing
                    tailored solutions, setting new standards for security and support. </p>

                <h4 style="margin-top: -10px;">USERNAME: Einstein</h4>
                <h4 style="margin-top: -7px;">PASSWORD: RosenBridge1!</h4>
                <a class="button tg" href="https://owncloud.arhst.net" target="_blank"><i class="fa fa-cloud"
                        style="padding-right: 10px;"></i>OWNCLOUD</a>

            </div>
        </div>

        <!-- Passbolt -->
        <div class="row-div">
            <img src="static/img/Passbolt.png" class="desktop-only" style="max-height: 600px; max-width: 710px;">
            <div class="stacked-div">
                <h1> Passbolt </h1>
                <p style="font-size: 25px;">
                    For our discerning clients with elevated needs, Passbolt is tailored to match your expectations.
                    With a focus on security, and control, Passbolt offers a comprehensive platform that seamlessly
                    integrates into your workflows. From end-to-end encryption to customizable access controls, Passbolt
                    ensures your critical data remains locked down, all while enhancing collaboration amongst your team.
                </p>
                <a class="button tg" href="https://t.me/ArtisanHosting" target="_blank"><i class="fa fa-lock"
                        style="padding-right: 10px;"></i>Contact us for demo</a>

            </div>
        </div>

        <!-- Plausible -->
        <div class="row-div">
            <img src="static/img/Plausible.webp" class="desktop-only" style="max-height: 600px; max-width: 710px;">
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
            <img src="static/img/Banner.png" class="desktop-only" style="max-height: 600px; max-width: 710px;">
            <div class="stacked-div">
                <h1> CUSTOM </h1>
                <p style="font-size: 25px;">
                    Designed and Delivered by Us:
                    </br>
                    Have a project in mind? Whether it's a custom website that speaks to your identity or a unique tool
                    that enhances your operations, we're here to make it happen. Reach out to us for inquiries about our
                    custom websites and bespoke solutions. Let's collaborate to turn your ideas into reality.</p>
                <a class="button tg" href="https://t.me/ArtisanHosting" target="_blank"><i class="fa fa-desktop"
                        style="padding-right: 10px;"></i>Get in touch</a>

            </div>
        </div>
    </div>

</div>

<?php
//  insert footer data
include("parts/footer.php");
?>