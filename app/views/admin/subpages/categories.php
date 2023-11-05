

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Categories
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Categories</h4>
                        <div class="ms-auto text-end">
                            <a type="button" href="javascript:void(0)" onclick="Add_category()" class="btn btn-success btn-lg text-white">
                                <i class="fas fa-plus" style="margin-right: 5px;"></i>
                                Add Category
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                function Add_category() {
                    Swal.fire({
                        title: 'Submit Form',
                        html: `
                            <form id="myForm">
                                <input type="text" id="inputField" placeholder="Enter something" required>
                            </form>`,
                        showCancelButton: true,
                        confirmButtonText: 'Submit',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Handle form submission
                            const inputFieldValue = document.getElementById('inputField').value;
                            // Perform actions with the form data, e.g., make an AJAX request
                            console.log('Submitted: ' + inputFieldValue);
                        }
                    });
                }            
            
            </script>

            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Categories</h5>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Offers</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>Rice</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Noodels</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>


                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>





                <!--              End-->

            </div>
            
            <footer class="footer text-center">
                Designed and Developed by: Anushka Lakshan <i class="fa fa-heart"></i>
            </footer>
            
        </div>
