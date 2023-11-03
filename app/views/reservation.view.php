
<?php include "app/views/partials/header.php" ?>

    <!-- main content starts here -->
    
    <section id="heading-reservation" class="page-heading">
        <div class="container">
            <h1>
                Indulge in Culinary Excellence
            </h1>
            <p>
                Reserve Your Table for an Exceptional Dining Experience
            </p>
        </div>
        <img class="GoDown" src="./assets/images/Go-down.svg" alt="" onclick="lenis.scrollTo('main');">
    </section>

    <main>
        <div class="container">
            <h2 class="heading">
                Make a Reservation
            </h2>

            <div class="row reservation-row">
                <form action="" id="reservation-form" data-aos="fade-right">
                    <div class="form-col">
                        <label for="res-date">Date*</label>
                        <input type="date" id="res-date" name="res-date" min="2023-10-02" max="2023-12-02" required>
                    </div>
                    <div class="form-col">
                        <label for="res-time">Time*</label>
                        <input type="time" id="res-time" name="res-time" min="14:00" max="22:00" required>
                    </div>
                    <div class="form-col">
                        <label for="res-persons">Persons*</label>
                        <input id="res-persons" type="number" min="0" max="12" required>
                    </div>
                    <div class="form-col">
                        <label for="res-email">Email*</label>
                        <input type="email" name="res-email" id="res-email" required>
                    </div>
                    <div class="form-col">
                        <label for="res-fname">Full Name*</label>
                        <input type="text" name="res-fname" id="res-fname" required>
                    </div>
                    
                    <div class="form-col">
                        <label for="res-phone">Phone*</label>
                        <input type="tel" name="res-phone" id="res-phone" required>
                    </div>

                    <div class="form-col">
                        <label for="res-branch">Branch*</label>
                        <select name="res-branch" id="res-branch">
                            <option value="">select branch</option>
                            <option value="1">Colombo</option>
                            <option value="">Kandy</option>
                            <option value="">Galle</option>
                        </select>
                    </div>
                    <div class="form-full">
                        <label for="res-msg">Special Comments (Optional)</label>
                        <textarea name="res-msg" id="res-msg"></textarea>
                    </div>

                    <button class="form-full-btn btn-main">Check Availability</button>
                </form>

                <img src="./assets/images/reserv-img.png" alt="" data-aos="fade-left">
            </div>
        </div>
        <section class="resev">
            <p data-aos="zoom-out">
                Experience dining reimagined at Signature Cuisine. Our expertly crafted dishes fuse tradition with innovation to create unforgettable flavors. With inviting ambiance and warm hospitality, each meal becomes a cherished moment. Join us for a culinary journey that's nothing short of exceptional
            </p>
        </section>
    </main>



    <!-- main content ends here -->

<?php include "app/views/partials/footer.php" ?>