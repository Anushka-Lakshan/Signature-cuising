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

</head>

<body>

    <!-- fixed navigation -->
    <nav>
        <div id="logo">
            <img src="./assets/images/logo.png" alt="Signature Cuisine Logo" onclick="location.href='/'">
        </div>
        <div class="nav-area">
            <div class="subNav">

                <div class="dropdown">
                    <button onclick="subnav()" class="subnav-dropbtn">Account Options</button>
                    <div id="Subnav-Dropdown" class="dropdown-content">
                        <a href="/register">Sign in</a>
                        <a href="/login">Log in</a>
                        <span>
                            <span id="cartBubble">
                                2
                            </span>
                            <a href="/cart">Cart</a>
                        </span>
                    </div>
                </div>

            </div>
            <div class="mainNav">
                <ul class="">
                    <li><a href="/">Home</a></li>
                    <li><a href="/online-order">Online order</a></li>
                    <li><a href="/reservation">Reservation</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/facility">Facilities</a></li>
                    <li><a href="/about">About us</a></li>
                    <li><a href="/contact">Contact us</a></li>
                </ul>

                <ul id="Full-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/online-order">Online order</a></li>
                    <li><a href="/reservation">Reservation</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/facility">Facilities</a></li>
                    <li><a href="/about">About us</a></li>
                    <li><a href="/contact">Contact us</a></li>
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