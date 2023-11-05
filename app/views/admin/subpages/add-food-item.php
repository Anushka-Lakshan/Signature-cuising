
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-dark text-white">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Food-items</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">
                                Add New Item
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center mb-3">
                        <h4 class="page-title">Add New Food Item</h4>

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
                                    <label for="Iname" class="col-sm-3 text-end control-label col-form-label">Item
                                        Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="Iname" id="Iname"
                                            placeholder="Item name Here" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Price" class="col-sm-3 text-end control-label col-form-label">Item
                                        Price</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Rs.</span>
                                            </div>
                                            <input type="number" class="form-control" placeholder="Price" id="Price"
                                                name="Price" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="Cat"
                                        class="col-sm-3 text-end control-label col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="cat" name="cat">
                                            <option value=""> Select </option>
                                            <option value="1">Offer</option>
                                            <option value="1">Rice</option>
                                            <option value="1">Pasta</option>
                                            <option value="1">Noodels</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="email1"
                                        class="col-sm-3 text-end control-label col-form-label">Visibility</label>
                                    <div class="col-sm-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Visibility"
                                                id="exampleRadios1" value="true" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                                Visible
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Visibility"
                                                id="exampleRadios2" value="false">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Hidden
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="custom-file-input"
                                        class="col-sm-3 text-end control-label col-form-label">Item Image</label>
                                    <div class="col-sm-9">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile"
                                                accept="image/png, image/jpeg, image/jpg" name="Iimage" required>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1"
                                        class="col-sm-3 text-end control-label col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="Desc" style="height: 65px;" required></textarea>
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