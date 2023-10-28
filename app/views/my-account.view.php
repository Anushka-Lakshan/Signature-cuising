 <?php  include "app/views/partials/header.php"; ?>

    <!-- main content starts here -->

    <main class="account-page">
        <div class="cart-heading">
            <div class="container">
                <h1>
                    My Account
                </h1>
                <p>
                    Your Account, Your Control
                </p>
            </div>
        </div>
        <div class="container">
            <div class="tabs">

                <input type="radio" name="tab-ctrl" id="tab-1" class="tab-ctrl" checked>
                <input type="radio" name="tab-ctrl" id="tab-2" class="tab-ctrl">
                <input type="radio" name="tab-ctrl" id="tab-3" class="tab-ctrl">

                <div class="tab-labels">
                    <label for="tab-1">My Orders</label>
                    <label for="tab-2">Reservations</label>
                    <label for="tab-3">Edit Account</label>
                </div>

                <div class="tab-panels">
                    <div class="panel" id="t-p-1">
                        <h2>My Orders</h2>
                        <p class="t-sub">Track Your Order Details</p>

                        <div class="table-container">

                            <ul class="Order-table">
                                <li class="table-header">
                                    <div class="col col-1">Order No</div>
                                    <div class="col col-2">Items</div>
                                    <div class="col col-3">Total</div>
                                    <div class="col col-4">Date & Time</div>
                                    <div class="col col-5">Order Status</div>
                                </li>
                                <li class="table-row">
                                    <div class="col col-1" data-label="Order No">42235</div>
                                    <div class="col col-2" data-label="Items">

                                        <div>
                                            <div class="order-t-i">
                                                <p>Chicken Biriyani</p><span>X 2</span>
                                            </div>
                                            <div class="order-t-i">
                                                <p>Chicken Noodles</p><span>X 1</span>
                                            </div>
                                            <div class="order-t-i">
                                                <p>Mix Biriyani</p><span>X 2</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col col-3" data-label="Total">$350</div>
                                    <div class="col col-4" data-label="Date & Time">2023/12/11 16:55</div>
                                    <div class="col col-5" data-label="Order status">pending</div>
                                </li>

                                <li class="table-row">
                                    <div class="col col-1" data-label="Order No">42235</div>
                                    <div class="col col-2" data-label="Items">

                                        <div>
                                            <div class="order-t-i">
                                                <p>Chicken Biriyani</p><span>X 2</span>
                                            </div>
                                            <div class="order-t-i">
                                                <p>Chicken Noodles</p><span>X 1</span>
                                            </div>
                                            <div class="order-t-i">
                                                <p>Mix Biriyani</p><span>X 2</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col col-3" data-label="Total">$350</div>
                                    <div class="col col-4" data-label="Date & Time">2023/12/11 16:55</div>
                                    <div class="col col-5" data-label="Order status">pending</div>
                                </li>

                                <li class="table-row">
                                    <div class="col col-1" data-label="Order No">42235</div>
                                    <div class="col col-2" data-label="Items">

                                        <div>
                                            <div class="order-t-i">
                                                <p>Chicken Biriyani</p><span>X 2</span>
                                            </div>
                                            <div class="order-t-i">
                                                <p>Chicken Noodles</p><span>X 1</span>
                                            </div>
                                            <div class="order-t-i">
                                                <p>Mix Biriyani</p><span>X 2</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col col-3" data-label="Total">$350</div>
                                    <div class="col col-4" data-label="Date & Time">2023/12/11 16:55</div>
                                    <div class="col col-5" data-label="Order status">pending</div>
                                </li>

                                



                            </ul>
                        </div>

                    </div>
                    <div class="panel" id="t-p-2">
                        <h2>My Reservations</h2>
                        <p class="t-sub">View your Reservation status</p>

                        <div class="table-container">

                            <ul class="reservation-table">
                                <li class="table-header">
                                    <div class="col col-1">Reser. No</div>
                                    <div class="col col-2">People</div>
                                    <div class="col col-3">Date</div>
                                    <div class="col col-4">Time</div>
                                    <div class="col col-5">Name</div>
                                    <div class="col col-6">Phone</div>
                                    <div class="col col-7">Branch</div>
                                    <div class="col col-8">Status</div>
                                </li>
                                <li class="table-row">
                                    <div class="col col-1" data-label="Reser. No">42235</div>
                                    <div class="col col-2" data-label="People">6</div>
                                    <div class="col col-3" data-label="Date">2023/12/11</div>
                                    <div class="col col-4" data-label="Time">16:55</div>
                                    <div class="col col-5" data-label="Name">Anushka Lakshan</div>
                                    <div class="col col-6" data-label="Phone">076 611661104</div>
                                    <div class="col col-7" data-label="Branch">Colombo</div>
                                    <div class="col col-8" data-label="Status">pending</div>
                                </li>
                                <li class="table-row">
                                    <div class="col col-1" data-label="Reser. No">42235</div>
                                    <div class="col col-2" data-label="People">6</div>
                                    <div class="col col-3" data-label="Date">2023/12/11</div>
                                    <div class="col col-4" data-label="Time">16:55</div>
                                    <div class="col col-5" data-label="Name">Anushka Lakshan</div>
                                    <div class="col col-6" data-label="Phone">076 611661104</div>
                                    <div class="col col-7" data-label="Branch">Colombo</div>
                                    <div class="col col-8" data-label="Status">pending</div>
                                </li>
                                <li class="table-row">
                                    <div class="col col-1" data-label="Reser. No">42235</div>
                                    <div class="col col-2" data-label="People">6</div>
                                    <div class="col col-3" data-label="Date">2023/12/11</div>
                                    <div class="col col-4" data-label="Time">16:55</div>
                                    <div class="col col-5" data-label="Name">Anushka Lakshan</div>
                                    <div class="col col-6" data-label="Phone">076 611661104</div>
                                    <div class="col col-7" data-label="Branch">Colombo</div>
                                    <div class="col col-8" data-label="Status">pending</div>
                                </li>

                                

                            </ul>
                        </div>
                    </div>
                    <div class="panel" id="t-p-3">
                        <h2>Edit Account</h2>
                        <p class="t-sub">Change Your Account Details</p>

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
            
                            <button class="form-full-btn btn-main">Update Account Details</button>
        
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </main>


    <!-- main content ends here -->

    <?php include("app/views/partials/footer.php"); ?>