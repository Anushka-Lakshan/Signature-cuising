
    <?php include "app/views/partials/header.php"; ?>

    <!-- main content starts here -->
    
    <main class="cart-page">
        <div class="cart-heading">
            <div class="container">
                <h1>
                    Cart
                </h1>
                <p>
                    Customize your order
                </p>
            </div>
        </div>
        <div class="container">
            <div class="cart-row">
                <div id="cart">
                    <div class="cart-head">
                        <h3>Cart</h3>
                        <button>Remove All</button>
                    </div>
                    <table id="cart-body">

                        <!-- single product -->
                        <tr>
                            <td class="p-details">
                                <img src="./assets/Food-imgs/item (1).png" class="p-img">
                                <div>
                                    <p class="p-name">
                                        Chicken Mix Biriyani
                                    </p>
                                    <p class="single-price">
                                        Rs.1500 each
                                    </p>
                                </div>
                            </td>
                            <td class="p-controls">
                                <button>+</button>
                                    <p>1</p>
                                <button>-</button>
                            </td>
                            <td class="p-price">
                                <p>
                                    Rs.3000
                                </p>
                                <button class="p-remove">
                                    Remove
                                </button>
                            </td>
                        </tr>

                        <!-- single product -->
                        <tr>
                            <td class="p-details">
                                <img src="./assets/Food-imgs/item (1).png" class="p-img">
                                <div>
                                    <p class="p-name">
                                        Chicken Mix Biriyani
                                    </p>
                                    <p class="single-price">
                                        Rs.1500 each
                                    </p>
                                </div>
                            </td>
                            <td class="p-controls">
                                <button>+</button>
                                    <p>1</p>
                                <button>-</button>
                            </td>
                            <td class="p-price">
                                <p>
                                    Rs.3000
                                </p>
                                <button class="p-remove">
                                    Remove
                                </button>
                            </td>
                        </tr>

                        <tr class="total-row">
                            <td colspan="2" class="total-col">
                                <p>
                                    Total
                                </p>
                                <p>3 Items</p>
                            </td>
                            <td class="total-price">
                                Rs.9500
                            </td>
                        </tr>
                        

                    </table>
                    <a href="online-order.html" class="btn-green">Continue Shopping</a>
                </div>

                <div class="order-summery">
                    <h4>Order Summary</h4>
                    <table>

                        <tr>
                            <td> Order Total</td>
                            <td>
                                Rs.6500
                            </td>
                        </tr>
                        <tr>
                            <td>Delivery Charge</td>
                            <td>
                                Rs.400
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Sub Total</td>
                            <td>Rs.6500</td>
                        </tr>

                    </table>
                    <a href="#" class="btn-main form-full-btn">Checkout</a>
                </div>
            </div>
        </div>
    </main>


    <!-- main content ends here -->

    <?php include "app/views/partials/footer.php";  ?>