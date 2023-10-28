
    <?php include("app/views/partials/header.php");  ?>

    <!-- main content starts here -->

    <section id="heading-contact" class="page-heading">
        <div class="container">
            <h1>
                Contact Us
            </h1>
            <p>
                We're Here to Assist You
            </p>
        </div>
        <img class="GoDown" src="./assets/images/Go-down.svg" alt="" onclick="lenis.scrollTo('main');">
    </section>

    <main>
        <div class="container">
            <h2 class="heading">
                Stay touch with Us
            </h2>

            <div class="row reservation-row">
                <form action="" id="reservation-form" data-aos="fade-right">

                    <div class="form-col">
                        <label for="full-name">Full Name*</label>
                        <input type="text" name="full-name" id="full-name" required>
                    </div>

                    <div class="form-col">
                        <label for="email">Email*</label>
                        <input type="email" name="email" id="email" required>
                    </div>


                    <div class="form-full">
                        <label for="res-msg">Message</label>
                        <textarea name="res-msg" id="res-msg" required></textarea>
                    </div>

                    <button class="form-full-btn btn-main">Submit</button>
                </form>

                <img src="./assets/images/contact-img.jpg" alt="" data-aos="fade-left">
            </div>


            <h2 class="heading">
                Our Branches
            </h2>

            <div id="branches">

                <div class="branch-box">
                    <div class="details">
                        <h5>Branch name</h5>
                        <p class="title">Address:</p>
                        <p>
                            5/18, Maaragama,  Colombo, wester province, Sri lanka
                        </p>
                        <p class="title">Tel no:</p>
                        <p>+94 76 6116604, 011 2088912</p>
                    </div>
                    <div class="map">
                        <iframe width="250" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?q=6.924482,79.861913&hl=es&z=14&amp;output=embed">
                        </iframe>
                    </div>
                </div>

                <div class="branch-box">
                    <div class="details">
                        <h5>Branch name</h5>
                        <p class="title">Address:</p>
                        <p>
                            5/18, Maaragama,  Colombo, wester province, Sri lanka
                        </p>
                        <p class="title">Tel no:</p>
                        <p>+94 76 6116604, 011 2088912</p>
                    </div>
                    <div class="map">
                        <iframe width="250" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?q=6.924482,79.861913&hl=es&z=14&amp;output=embed">
                        </iframe>
                    </div>
                </div>

                <div class="branch-box">
                    <div class="details">
                        <h5>Branch name</h5>
                        <p class="title">Address:</p>
                        <p>
                            5/18, Maaragama,  Colombo, wester province, Sri lanka
                        </p>
                        <p class="title">Tel no:</p>
                        <p>+94 76 6116604, 011 2088912</p>
                    </div>
                    <div class="map">
                        <iframe width="250" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?q=6.924482,79.861913&hl=es&z=14&amp;output=embed">
                        </iframe>
                    </div>
                </div>

                




            </div>

        </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/ukiyojs@4.1.2/dist/ukiyo.min.js"></script>

    <script>
        const images = document.getElementsByClassName('ukiyo');
        new Ukiyo(images);
    </script>


    <!-- main content ends here -->

    <?php include("app/views/partials/footer.php");  ?>