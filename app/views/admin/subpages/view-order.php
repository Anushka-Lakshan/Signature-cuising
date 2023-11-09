<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-dark text-white">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= BASE_URL ?>/admin-dashboard?page=orders">Orders</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">
                        Order Details
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center mb-3">
                <h4 class="page-title">Order: <?= $_GET['id'] ?> </h4>

            </div>
        </div>
    </div>

    <?php

    if (!isset($_GET['id'])) {
        sweetAlert("Error", "Invalid ID", "error");
        echo '<script>window.location = "' . BASE_URL . '/admin-dashboard?page=orders";</script>';
    }

    include "app/models/Order.model.php";
    $order = new Order();
    $orderData = $order::get_item_by_id($_GET['id']);

    $orderData = $orderData[0];

    ?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-9">
                <div class="card">


                    <!-- <div class="card-body">

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Order No
                                    </div>
                                    <div class="col-sm-9">
                                        002
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Customer Name
                                    </div>
                                    <div class="col-sm-9">
                                        Anushka Lakshan
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Ordered Branch
                                    </div>
                                    <div class="col-sm-9">
                                        Colombo
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Order Details
                                    </div>
                                    <div class="col-sm-9">

                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Unit Price</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Chicken Biriyani</td>
                                                    <td>Rs.1200</td>
                                                    <td>2</td>
                                                    <td>Rs.2400</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Mix rice</td>
                                                    <td>Rs.1100</td>
                                                    <td>1</td>
                                                    <td>Rs.1100</td>
                                                </tr>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th scope="row" colspan="4">Item Total Price</th>
                                                    <td>Rs.2500</td>
                                                </tr>

                                                <tr>
                                                    <th scope="row" colspan="4">Delivery Charge</th>
                                                    <td>Rs.300</td>
                                                </tr>

                                                <tr class="font-bold">
                                                    <th scope="row" colspan="4">Sub Total</th>
                                                    <td>Rs. 2800</td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Payment method
                                    </div>
                                    <div class="col-sm-9">
                                        Cash on delivery
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Current Status
                                    </div>
                                    <div class="col-sm-2">
                                        <i class="far fa-clock me-1"></i> Pending
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Change Status
                                            </button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                              <a class="dropdown-item" href="#">Preparing</a>
                                              <a class="dropdown-item" href="#">Delivering</a>
                                              <a class="dropdown-item" href="#">Completed</a>
                                              <div class="dropdown-divider"></div>
                                              <a class="dropdown-item text-danger" href="#">Cancelled</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Ordered Date & Time
                                    </div>
                                    <div class="col-sm-9">
                                        10/31/2023 17:50
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Address
                                    </div>
                                    <div class="col-sm-9">
                                        5/18, Fiesi lane, Colombo 7
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        User Note
                                    </div>
                                    <div class="col-sm-9">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur sapiente, minus, blanditiis iusto provident inventore quas quis in culpa magnam tempora ipsum facilis nam quos alias corrupti repellat quasi reprehenderit.
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Confirmed by
                                    </div>
                                    <div class="col-sm-9">
                                        not-yet
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Delivered by
                                    </div>
                                    <div class="col-sm-9">
                                        not-yet
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Cancelled by
                                    </div>
                                    <div class="col-sm-9">
                                        not-yet
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col-sm-3 text-end font-bold">
                                        Admin Note
                                    </div>
                                    <div class="col-sm-9">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda labore quos vitae reiciendis atque voluptates veniam aperiam nesciunt? Consequuntur a voluptate ipsum doloribus quibusdam voluptatem odit. Aliquam vero atque perspiciatis?
                                    </div>
                                </div>



                            </div> -->

                    <div class="card-body">
                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Order No
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['id'] ?>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Customer Name
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['name'] ?>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Ordered Branch
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['branch_name'] ?>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Order Details
                            </div>
                            <div class="col-sm-9">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $orderDetails = json_decode($orderData['order_details'], true);
                                        $items = $orderDetails['items'];
                                        $itemTotal = 0;
                                        foreach ($items as $index => $item) :
                                            $unitPrice = $item['price'];
                                            $quantity = $item['quantity'];
                                            $totalPrice = $unitPrice * $quantity;
                                            $itemTotal += $totalPrice;
                                        ?>
                                            <tr>
                                                <th scope="row"><?= $index + 1 ?></th>
                                                <td><?= $item['name'] ?></td>
                                                <td>Rs.<?= $unitPrice ?></td>
                                                <td><?= $quantity ?></td>
                                                <td>Rs.<?= $totalPrice ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th scope="row" colspan="4">Item Total Price</th>
                                            <td>Rs.<?= $itemTotal ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="4">Delivery Charge</th>
                                            <td>Rs.<?= $orderDetails['delivery'] ?></td>
                                        </tr>
                                        <tr class="font-bold">
                                            <th scope="row" colspan="4">Sub Total</th>
                                            <td>Rs. <?= $orderDetails['sub_total'] ?></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Payment method
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['payment_method'] ?>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Current Status
                            </div>
                            <div class="col-sm-2">
                                <?php
                                $statusClass = '';
                                if ($orderData['status'] === 'Pending') {
                                    $statusClass = 'text-warning';
                                } elseif ($orderData['status'] === 'Preparing') {
                                    $statusClass = 'text-danger';
                                }
                                echo '<i class="' . $statusClass . '"><i class="far fa-clock me-1"></i> ' . $orderData['status'] . '</i>';
                                ?>
                            </div>
                            <div class="col-sm-7">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Change Status
                                    </button>
                                    <div class="dropdown-menu" style="margin: 0px;">
                                        <a class="dropdown-item" href="#">Preparing</a>
                                        <a class="dropdown-item" href="#">Delivering</a>
                                        <a class="dropdown-item" href="#">Completed</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Cancelled</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Ordered Date & Time
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['ordered_dt'] ?>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Address
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['address'] ?>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                User Note
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['user_note'] ?>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Confirmed by
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['confirmed_by'] ? $orderData['confirmed_by'] : 'not-yet' ?>
                            </div>
                        </div>



                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Cancelled by
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['canceled_by'] ? $orderData['canceled_by'] : 'not-yet' ?>
                            </div>
                        </div>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Admin Note
                            </div>
                            <div class="col-sm-9">
                                <?= $orderData['admin_note'] ?>
                            </div>
                        </div>

                        <?php $locationData = json_decode($orderData['location'], true);
                        
                        if(is_array($locationData)){
                            $latitude = $locationData['latitude'];
                            $longitude = $locationData['longitude'];
                        
                        
                        ?>

                        <div class="row mb-1">
                            <div class="col-sm-3 text-end font-bold">
                                Customer Location
                            </div>
                            <div class="col-sm-9">

                                <iframe width="350" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?= $latitude ?>,<?= $longitude ?>&language=en&z=14&amp;output=embed">
                                </iframe>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                </div>
            </div>
        </div>



        <!--              End-->

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        Designed and Developed by: Anushka Lakshan <i class="fa fa-heart"></i>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>