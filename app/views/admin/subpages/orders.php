<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin-dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Orders
                    </li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Orders</h4>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">All Orders</h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Branch</th>
                                <th>Details</th>
                                <th>Total Price</th>
                                <th>Ordered Time</th>
                                <th>status</th>
                                <th>method</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Anushka Lakshan</td>
                                <td>Colombo</td>
                                <td>
                                    <div class="d-flex no-block">
                                        <span>Chicken Biriyani</span>
                                        <span class="ms-auto text-end">X 3</span>
                                    </div>
                                    <div class="d-flex no-block">
                                        <span>Chicken Noodles</span>
                                        <span class="ms-auto text-end">X 1</span>
                                    </div>
                                </td>
                                <td>Rs.3200</td>
                                <td> 10/31/2023 17:50 </td>
                                <td class="text-warning"> <i class="far fa-clock me-1"></i> Pending </td>
                                <td> <i class="far fa-money-bill-alt me-1"></i> Cash on Delivery</td>
                                <td>
                                    <a href="/admin-dashboard?page=view-order" class="btn btn-success">View</a>
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


                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Dasun Dhana</td>
                                <td>Maharagama</td>
                                <td>
                                    <div class="d-flex no-block">
                                        <span>Chicken Biriyani</span>
                                        <span class="ms-auto text-end">X 1</span>
                                    </div>
                                    <div class="d-flex no-block">
                                        <span>Chicken Noodles</span>
                                        <span class="ms-auto text-end">X 1</span>
                                    </div>
                                </td>
                                <td>Rs.1200</td>
                                <td> 10/31/2023 17:50 </td>
                                <td class="text-danger"> <i class="fas fa-fire  me-1"></i> Preparing </td>
                                <td> <i class="far fa-credit-card me-1"></i> Card Payment</td>
                                <td>
                                    <a href="#" class="btn btn-success">View</a>
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


                                </td>
                            </tr>





                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Branch</th>
                                <th>Details</th>
                                <th>Total Price</th>
                                <th>Ordered Time</th>
                                <th>status</th>
                                <th>method</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
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