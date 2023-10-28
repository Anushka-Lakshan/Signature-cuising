
    <?php include("app/views/partials/header.php");  ?>

    <!-- main content starts here -->

    <section id="heading-register" class="page-heading">
        <div class="container">
            <h1>
                Sign in
            </h1>
            <p>
                Join Us and Unlock Exclusive Benefits
            </p>
        </div>
        <img class="GoDown" src="./assets/images/Go-down.svg" alt="" onclick="lenis.scrollTo('main');">
    </section>

    <main>
        <div class="container">
            <h2 class="heading">
                Create an Account
            </h2>

            <div class="register-row">
                <form id="register" action="" method="post" data-aos="fade-right">

                    <div class="form-col">
                        <label for="reg-name">Full Name*</label>
                        <input type="text" name="reg-name" id="reg-name" required>
                    </div>
    
                    <div class="form-col">
                        <label for="reg-email">Email*</label>
                        <input type="email" name="reg-email" id="reg-email" required>
                    </div>
                    
                    <div class="form-col">
                        <label for="reg-phone">Phone*</label>
                        <input type="text" name="reg-phone" id="reg-phone" required>
                    </div>
    
                    <div class="form-col">
                        <label for="reg-dob">Date of Birth*</label>
                        <input type="date" name="reg-dob" id="reg-dob" required>
                    </div>
    
                    <div class="form-col">
                        <label for="reg-pass">Password*</label>
                        <input type="password" name="reg-pass" id="reg-pass" required>
                    </div>
    
                    <div class="form-col">
                        <label for="reg-pass2">Confirm Password*</label>
                        <input type="password" name="reg-pass" id="reg-pass2" required>
                    </div>
    
                    <div class="form-col">
                        <label for="res-branch">Prepared Branch*</label>
                        <select name="res-branch" id="res-branch">
                            <option value="">select branch</option>
                            <option value="1">Colombo</option>
                            <option value="">Kandy</option>
                            <option value="">Galle</option>
                        </select>
                    </div>
                    <div class="form-full">
                        <label for="res-msg">Address*</label>
                        <textarea name="res-msg" id="res-msg"></textarea>
                    </div>
    
                    <button class="form-full-btn btn-main">Register</button>

                    <p>If you already have an account, you can <a href="/login" class="inline-link">Log in</a> here.</p>
                </form>

                <div class="img" data-aos="fade-left">
                    <img src="./assets/images/logo.png" alt="" data-aos="zoom-out" data-aos-duration="1000">
                </div>
                <!-- <img src="./assets/images/register-form.png" alt=""> -->

            </div>
            

        </div>
    </main>


    <!-- main content ends here -->

    <?php include("app/views/partials/footer.php");  ?>