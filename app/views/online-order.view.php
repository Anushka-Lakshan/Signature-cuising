
<?php include("app/views/partials/header.php");  ?>

    <!-- main content starts here -->

    <section id="heading-order-online" class="page-heading">
        <div class="container">
            <h1>
                Discover a World of Flavors
            </h1>
            <p>
                Explore Our Menu Selections and Personalize Your Gastronomic Journey
            </p>
        </div>
        <img class="GoDown" src="./assets/images/Go-down.svg" alt="" onclick="lenis.scrollTo('main');">
    </section>
    <main>
        <div class="container">
            <div class="row-natural-msg">
                <div class="msg-body" data-aos="fade-right">
                    <h3>
                        Natural Goodness, No Artificial Compromises
                    </h3>
                    <p>
                        At Signature Cuisine, we're committed to using only natural ingredients in our dishes. We steer
                        clear of artificial flavors and additives, so you can enjoy delicious meals without compromise,
                        knowing you're making a healthy choice

                        <img src="./assets/images/quat.png" alt="">
                    </p>
                </div>
                <div class="msg-img" data-aos="fade-left">
                    <img src="./assets/images/Natural.png" alt="">
                </div>
            </div>

            <!-- food item menu -->

            <section id="menu">
                <div class="categories">
                    <h3>Menu</h3>
                    <ul id="menu-cats">
                        <li class="active">All</li>
                        <li data-cat="1">Offers</li>
                        <li data-cat="2">Rice Specialities</li>
                        <li data-cat="3">Noodles</li>
                        <li data-cat="4">Kottu</li>
                        <li data-cat="5">Pasta</li>
                        <li data-cat="6">Desserts & Beverages</li>
                    </ul>
                </div>

                <div id="Food-items">

                    <!-- item template -->
                    <div class="food-item" data-itemcat="2">
                        <div class="inner-div">
                            <img src="./assets/Food-imgs/item (1).png" alt="">
                            <div class="details">
                                <p class="title">
                                    Chicken Special Biriani
                                </p>
                                <p class="price">
                                    Rs.1500
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn-cart">Add to cart</a>
                    </div>

                    <!-- item template -->
                    <div class="food-item" data-itemcat="3">
                        <div class="inner-div">
                            <img src="./assets/Food-imgs/item (1).png" alt="">
                            <div class="details">
                                <p class="title">
                                    Noodles
                                </p>
                                <p class="price">
                                    Rs.1500
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn-cart">Add to cart</a>
                    </div>

                    <!-- item template -->
                    <div class="food-item" data-itemcat="2">
                        <div class="inner-div">
                            <img src="./assets/Food-imgs/item (1).png" alt="">
                            <div class="details">
                                <p class="title">
                                    Chicken Special Biriani
                                </p>
                                <p class="price">
                                    Rs.1500
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn-cart">Add to cart</a>
                    </div>

                    <!-- item template -->
                    <div class="food-item" data-itemcat="2">
                        <div class="inner-div">
                            <img src="./assets/Food-imgs/item (1).png" alt="">
                            <div class="details">
                                <p class="title">
                                    Chicken Special Biriani
                                </p>
                                <p class="price">
                                    Rs.1500
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn-cart">Add to cart</a>
                    </div>

                     <!-- item template -->
                     <div class="food-item" data-itemcat="3">
                        <div class="inner-div">
                            <img src="./assets/Food-imgs/item (1).png" alt="">
                            <div class="details">
                                <p class="title">
                                    Noodles new
                                </p>
                                <p class="price">
                                    Rs.1500
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn-cart">Add to cart</a>
                    </div>

                     <!-- item template -->
                     <div class="food-item" data-itemcat="4">
                        <div class="inner-div">
                            <img src="./assets/Food-imgs/item (1).png" alt="">
                            <div class="details">
                                <p class="title">
                                    Kottu
                                </p>
                                <p class="price">
                                    Rs.1500
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn-cart">Add to cart</a>
                    </div>

                     <!-- item template -->
                     <div class="food-item" data-itemcat="2">
                        <div class="inner-div">
                            <img src="./assets/Food-imgs/item (1).png" alt="">
                            <div class="details">
                                <p class="title">
                                    Chicken Special Biriani
                                </p>
                                <p class="price">
                                    Rs.1500
                                </p>
                            </div>
                        </div>
                        <a href="#" class="btn-cart">Add to cart</a>
                    </div>


                </div>

            </section>

            <section>

                <h2 class="heading">
                    How it works
                </h2>

                <div class="row-how-to">
                    <div class="how-to-card" data-aos="fade-up">
                        <img src="./assets/images/online-shopping-min.gif" alt="">
                        <p class="titile">Build Your Order</p>
                        <p class="desc">
                            Browse our menu, select your favorite dishes, and add them to your cart. Customize your meal to your heart's content
                        </p>
                    </div>
                    <div class="how-to-card" data-aos="fade-up" data-aos-delay="200">
                        <img src="./assets/images/home (1)-min.gif" alt="">
                        <p class="titile">Share Your Location</p>
                        <p class="desc">
                            Provide your home address, so we know where to deliver your delicious meal. We'll ensure it reaches your doorstep
                        </p>
                    </div>
                    <div class="how-to-card" data-aos="fade-up" data-aos-delay="400">
                        <img src="./assets/images/scooter-min.gif" alt="">
                        <p class="titile">Sit Back and Relax</p>
                        <p class="desc">
                            Once you've placed your order, our dedicated team will prepare your food with care and deliver it to your home. All that's left for you to do is enjoy!
                        </p>
                    </div>
                </div>

            </section>
        </div>
    </main>




    <script>
        let btns = document.querySelectorAll('#menu-cats > li');
        let items = document.querySelectorAll('#Food-items > .food-item');

        btns.forEach((btn) => {
            btn.addEventListener('click', filterImg);
        });

        function filterImg(e){

            setActiveCat(e);

            items.forEach( item => {
                item.classList.remove('shrink');
                item.classList.add('expand');

                let itemCat = parseInt(item.dataset.itemcat);

                let btnCat = parseInt(e.target.dataset.cat);

                if(itemCat !== btnCat){
                    item.classList.remove('expand');
                    item.classList.add('shrink');
                }
            });

        }

        btns[0].addEventListener('click', (e) => {
            setActiveCat(e);

            items.forEach( item => {
                item.classList.remove('shrink');
                item.classList.add('expand');

            });
        })

        function setActiveCat(e){

            btns.forEach( btn => {
                btn.classList.remove('active');
            });

            e.target.classList.add('active');

        }



    </script>

    <!-- main content ends here -->
    
    <?php include("app/views/partials/footer.php"); ?>