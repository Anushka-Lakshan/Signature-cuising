<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Signature Cuisine</title>
    <!-- slider css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
    <!-- Animate on scroll CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- my Css -->
    <link rel="stylesheet" href="./assets/css/common.css">
    <link rel="stylesheet" href="./assets/css/mainStyle.css">
    <link rel="stylesheet" href="./assets/css/customer.css">

    <!-- Gsap scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <!-- animate on scroll js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <?php 
        
        if (isset($_SESSION['temp_msg'])) {
            echo '
            <script>
                Swal.fire({
                    title: "'. $_SESSION['temp_msg']. '",
                    text: "'. (isset($_SESSION['temp_msg_secondery']) ? $_SESSION['temp_msg_secondery'] : ''). '",
                    icon: "'. (isset($_SESSION['temp_msg_type']) ? $_SESSION['temp_msg_type'] : 'success'). '",
                    showCancelButton: false,
                    confirmButtonText: "Continue"
                });
            </script>
            ';
            unset($_SESSION['temp_msg']);
            unset($_SESSION['temp_msg_secondery']);
            unset($_SESSION['temp_msg_type']);
        }
        
    ?>
    <!-- fixed navigation -->
    <nav>
        <div id="logo">
            <img src="./assets/images/logo.png" alt="Signature Cuisine Logo" onclick="location.href='<?= BASE_URL ?>/'">
        </div>
        <div class="nav-area">
            <div class="subNav">


                <div class="dropdown">
                    <button onclick="subnav()" class="subnav-dropbtn">Account Options</button>
                    <div id="Subnav-Dropdown" class="dropdown-content">

                        <?php if (isset($_SESSION['Customer_Id'])): ?>
                            <a href="<?= BASE_URL ?>/my-account">My Account</a>
                            <a href="#"  onclick="logout()">Logout</a>

                            <script>

                                function logout(){
                                    Swal.fire({
                                        title: 'Do you want to log out?',
                                        icon: 'question',
                                        showCancelButton: true,
                                        confirmButtonColor: '#FF0000', // Red color for "Yes"
                                        confirmButtonText: 'Yes',
                                        cancelButtonText: 'Cancel'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            // User clicked "Yes," redirect to /logout
                                            window.location.href = '<?= BASE_URL ?>/logout';
                                        }
                                    });
                                }
                            </script>

                        <?php else: ?>
                            <a href="<?= BASE_URL ?>/register">Sign in</a>
                            <a href="<?= BASE_URL ?>/login">Log in</a>

                        <?php endif; ?>

                        <!-- <a href="/register">Sign in</a>
                        <a href="/login">Log in</a> -->
                        <span>
                            <span id="cartBubble">
                                2
                            </span>
                            <a href="<?= BASE_URL ?>/cart">Cart</a>
                        </span>
                    </div>
                </div>

            </div>
            <div class="mainNav">
                <ul class="">
                    <li><a href="<?= BASE_URL ?>/">Home</a></li>
                    <li><a href="<?= BASE_URL ?>/online-order">Online order</a></li>
                    <li><a href="<?= BASE_URL ?>/reservation">Reservation</a></li>
                    <li><a href="<?= BASE_URL ?>/gallery">Gallery</a></li>
                    <li><a href="<?= BASE_URL ?>/facility">Facilities</a></li>
                    <li><a href="<?= BASE_URL ?>/about">About us</a></li>
                    <li><a href="<?= BASE_URL ?>/contact">Contact us</a></li>
                </ul>

                <ul id="Full-nav">
                    <li><a href="<?= BASE_URL ?>/">Home</a></li>
                    <li><a href="<?= BASE_URL ?>/online-order">Online order</a></li>
                    <li><a href="<?= BASE_URL ?>/reservation">Reservation</a></li>
                    <li><a href="<?= BASE_URL ?>/gallery">Gallery</a></li>
                    <li><a href="<?= BASE_URL ?>/facility">Facilities</a></li>
                    <li><a href="<?= BASE_URL ?>/about">About us</a></li>
                    <li><a href="<?= BASE_URL ?>/contact">Contact us</a></li>
                    <img src="./assets/images/close.png" alt="nav-close" id="nav-close">
                </ul>

                <div class="navButtons">
                    <img src="./assets/images/menu.png" alt="menu icon" id="menu-icon">
                    <img src="./assets/images/search.png" alt="search icon" id="search">
                </div>

            </div>
        </div>

    </nav>


    <!-- search overlay -->
    <div id="searchOverlay">
        <img src="./assets/images/close.png" alt="" id="searchClose" title="close search">
        <div class="searchForm">
            <input type="text" name="SearchText" id="SearchText" placeholder="Search anything...">
            <button id="searchBTN"><img src="./assets/images/search.png" alt=""></button>
        </div>
        <div class="searchResults">
            <p>Search Results</p>
            <hr/>
            <div class="resultArea">
                <div class="resultColumn">
                    <p>Food items</p>
                    <div class="food-result">
                        <img src="./assets/images/rice.jpg" alt="">
                        <div>
                            <p class="title">
                                <a href="#">Chicken Special Biriyani</a>
                            </p>
                            <p class="price">Rs.1500</p>
                        </div>
                    </div>

                    <div class="food-result">
                        <img src="./assets/images/rice.jpg" alt="">
                        <div>
                            <p class="title">
                                <a href="#">Chicken Special Biriyani</a>
                            </p>
                            <p class="price">Rs.1500</p>
                        </div>
                    </div>

                    <div class="food-result">
                        <img src="./assets/images/rice.jpg" alt="">
                        <div>
                            <p class="title">
                                <a href="#">Chicken Special Biriyani</a>
                            </p>
                            <p class="price">Rs.1500</p>
                        </div>
                    </div>
                </div>

                <div class="resultColumn">
                    <p>Food Categories</p>
                    <div class="cat-result">
                        <a href="#">Rice</a>
                        <a href="#">Pasta</a>
                        <a href="#">Noodles</a>
                        
                    </div>
                </div>

                <div class="resultColumn">
                    <p>Facilities</p>
                    <div class="Faci-result">
                        <a href="#">kids play area</a>
                        <a href="#">Bar</a>
                        <a href="#">Free wifi</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>