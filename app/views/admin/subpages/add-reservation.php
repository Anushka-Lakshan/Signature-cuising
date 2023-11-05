

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-dark text-white">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Reservations.html">Reservations</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                Add New reservation
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center mb-3">
                        <h4 class="page-title">Add New reservation</h4>

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

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">


                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="Iname" class="col-sm-3 text-end control-label col-form-label">Customer 
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="name" id="Iname"
                                            placeholder="Enter Name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Email" class="col-sm-3 text-end control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="Email" id="Email" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Phone" class="col-sm-3 text-end control-label col-form-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="tel" name="tel" id="Phone" class="form-control" required>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="Branch"
                                        class="col-sm-3 text-end control-label col-form-label">Branch</label>
                                    <div class="col-sm-9">


                                        <select class="form-control" id="Branch">
                                            <option value=""> Select </option>
                                            <option value="1">Colombo</option>
                                            <option value="1">Maharagama</option>
                                            <option value="1">Galle</option>
                                            <option value="1">Kandy</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Date"
                                        class="col-sm-3 text-end control-label col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="date" id="res-date" name="res-date" min="2023-10-02" max="2023-12-02" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="time"
                                        class="col-sm-3 text-end control-label col-form-label">Time</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="time" id="res-time" name="res-time" min="14:00" max="22:00" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="Persons"
                                        class="col-sm-3 text-end control-label col-form-label">Persons</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="number" id="Persons" name="Persons" min="1" required>
                                    </div>
                                </div>

                                


                                <div class="form-group row">
                                    <label for="cono1"
                                        class="col-sm-3 text-end control-label col-form-label">Special Comments (Optional)</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="Desc" style="height: 65px;"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- full width booststrap button -->
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-info btn-lg w-100">Submit</button>
                                    </div>

                                </div>
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