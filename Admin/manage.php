<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
    <title>MANAGE PRODUCTS</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
      <div class="spinner"></div>
    </div>
    <!-- ======== Preloader =========== -->

    <?php
include 'bar.php';
?>

      <!-- ========== table components start ========== -->
      <section class="table-components">
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title">
                  <h2>Tables</h2>
                </div>
              </div>
              <!-- end col -->
              <div class="col-md-6">
                <div class="breadcrumb-wrapper">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#0">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Tables
                      </li>
                    </ol>
                  </nav>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== title-wrapper end ========== -->

          <!-- ========== tables-wrapper start ========== -->
          <div class="tables-wrapper">
            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Table</h6>
                  <p class="text-sm mb-20">
                    For basic styling—light padding and only horizontal
                    dividers—use the class table.
                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="lead-info">
                            <h6>Lead</h6>
                          </th>
                          <th class="lead-email">
                            <h6>Email</h6>
                          </th>
                          <th class="lead-phone">
                            <h6>Phone No</h6>
                          </th>
                          <th class="lead-company">
                            <h6>Company</h6>
                          </th>
                          <th>
                            <h6>Action</h6>
                          </th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <tr>
                          <td class="min-width">
                            <div class="lead">
                              <div class="lead-image">
                                <img src="assets/images/lead/lead-1.png" alt="" />
                              </div>
                              <div class="lead-text">
                                <p>Courtney Henry</p>
                              </div>
                            </div>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td class="min-width">
                            <p>(303)555 3343523</p>
                          </td>
                          <td class="min-width">
                            <p>UIdeck digital agency</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td class="min-width">
                            <div class="lead">
                              <div class="lead-image">
                                <img src="assets/images/lead/lead-2.png" alt="" />
                              </div>
                              <div class="lead-text">
                                <p>John Doe</p>
                              </div>
                            </div>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td class="min-width">
                            <p>(303)555 3343523</p>
                          </td>
                          <td class="min-width">
                            <p>Graygrids digital agency</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td class="min-width">
                            <div class="lead">
                              <div class="lead-image">
                                <img src="assets/images/lead/lead-3.png" alt="" />
                              </div>
                              <div class="lead-text">
                                <p>David Smith</p>
                              </div>
                            </div>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td class="min-width">
                            <p>(303)555 3343523</p>
                          </td>
                          <td class="min-width">
                            <p>Abc agency</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td class="min-width">
                            <div class="lead">
                              <div class="lead-image">
                                <img src="assets/images/lead/lead-4.png" alt="" />
                              </div>
                              <div class="lead-text">
                                <p>Jonathon</p>
                              </div>
                            </div>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td class="min-width">
                            <p>(303)555 3343523</p>
                          </td>
                          <td class="min-width">
                            <p>Creative IT Agency</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="lead">
                              <div class="lead-image">
                                <img src="assets/images/lead/lead-5.png" alt="" />
                              </div>
                              <div class="lead-text">
                                <p>Anna Lee</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td>
                            <p>(303)555 3343523</p>
                          </td>
                          <td>
                            <p>Halal It agency</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="lead">
                              <div class="lead-image">
                                <img src="assets/images/lead/lead-6.png" alt="" />
                              </div>
                              <div class="lead-text">
                                <p>Gray Simon</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td>
                            <p>(303)555 3343523</p>
                          </td>
                          <td>
                            <p>DesignCourse</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
              <div class="col-lg-6">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Striped Table</h6>
                  <p class="text-sm mb-20">
                    For Striped Table—light padding and only horizontal
                    dividers.
                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                      <thead>
                        <tr>
                          <th></th>
                          <th>
                            <h6>Account No</h6>
                          </th>
                          <th>
                            <h6>Balance</h6>
                          </th>
                          <th>
                            <h6>Action</h6>
                          </th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="check-input-primary">
                              <input class="form-check-input" type="checkbox" id="checkbox-1" />
                            </div>
                          </td>
                          <td>
                            <p>AC336 508 2157</p>
                          </td>
                          <td>
                            <p>$523</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="check-input-primary">
                              <input class="form-check-input" type="checkbox" id="checkbox-2" />
                            </div>
                          </td>
                          <td>
                            <p>AC336 756 0987</p>
                          </td>
                          <td>
                            <p>$123</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="check-input-primary">
                              <input class="form-check-input" type="checkbox" id="checkbox-3" />
                            </div>
                          </td>
                          <td>
                            <p>AC336 098 8765</p>
                          </td>
                          <td>
                            <p>$223</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="check-input-primary">
                              <input class="form-check-input" type="checkbox" id="checkbox-4" />
                            </div>
                          </td>
                          <td>
                            <p>AC336 897 3242</p>
                          </td>
                          <td>
                            <p>$323</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="check-input-primary">
                              <input class="form-check-input" type="checkbox" id="checkbox-5" />
                            </div>
                          </td>
                          <td>
                            <p>AC336 654 0987</p>
                          </td>
                          <td>
                            <p>$423</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="check-input-primary">
                              <input class="form-check-input" type="checkbox" id="checkbox-6" />
                            </div>
                          </td>
                          <td>
                            <p>AC336 234 9804</p>
                          </td>
                          <td>
                            <p>$523</p>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
              <div class="col-lg-6">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Table head options</h6>
                  <p class="text-sm mb-20">
                    Use one of two modifier classes to make thead appear light
                    or dark gray.
                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table striped-table">
                      <thead>
                        <tr>
                          <th></th>
                          <th>
                            <h6>First Name</h6>
                          </th>
                          <th>
                            <h6>Last Name</h6>
                          </th>
                          <th>
                            <h6>Username</h6>
                          </th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <h6 class="text-sm">#1</h6>
                          </td>
                          <td>
                            <p>Albert</p>
                          </td>
                          <td>
                            <p>Miles</p>
                          </td>
                          <td>
                            <p>@albert_miles</p>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <h6 class="text-sm">#2</h6>
                          </td>
                          <td>
                            <p>John</p>
                          </td>
                          <td>
                            <p>Doe</p>
                          </td>
                          <td>
                            <p>@john_doe</p>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <h6 class="text-sm">#3</h6>
                          </td>
                          <td>
                            <p>David</p>
                          </td>
                          <td>
                            <p>Smith</p>
                          </td>
                          <td>
                            <p>@davidsmith</p>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <h6 class="text-sm">#4</h6>
                          </td>
                          <td>
                            <p>Jameel</p>
                          </td>
                          <td>
                            <p>Kareem</p>
                          </td>
                          <td>
                            <p>@jkreem</p>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <h6 class="text-sm">#5</h6>
                          </td>
                          <td>
                            <p>Anna</p>
                          </td>
                          <td>
                            <p>Miles</p>
                          </td>
                          <td>
                            <p>@anna_miles</p>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <h6 class="text-sm">#6</h6>
                          </td>
                          <td>
                            <p>Hafiz</p>
                          </td>
                          <td>
                            <p>Miles</p>
                          </td>
                          <td>
                            <p>@hafiz_miles</p>
                          </td>
                        </tr>
                        <!-- end table row -->
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
              <div class="col-lg-12">
                <div class="card-style mb-30">
                  <h6 class="mb-10">Data Table</h6>
                  <p class="text-sm mb-20">
                    For basic styling—light padding and only horizontal
                    dividers—use the class table.
                  </p>
                  <div class="table-wrapper table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            <h6>#</h6>
                          </th>
                          <th>
                            <h6>Name</h6>
                          </th>
                          <th>
                            <h6>Email</h6>
                          </th>
                          <th>
                            <h6>Project</h6>
                          </th>
                          <th>
                            <h6>Status</h6>
                          </th>
                          <th>
                            <h6>Action</h6>
                          </th>
                        </tr>
                        <!-- end table row-->
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="employee-image">
                              <img src="assets/images/lead/lead-1.png" alt="" />
                            </div>
                          </td>
                          <td class="min-width">
                            <p>Esther Howard</p>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td class="min-width">
                            <p>Admin Dashboard Design</p>
                          </td>
                          <td class="min-width">
                            <span class="status-btn active-btn">Active</span>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="employee-image">
                              <img src="assets/images/lead/lead-2.png" alt="" />
                            </div>
                          </td>
                          <td class="min-width">
                            <p>D. Jonathon</p>
                          </td>
                          <td class="min-width">
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td class="min-width">
                            <p>React Dashboard</p>
                          </td>
                          <td class="min-width">
                            <span class="status-btn active-btn">Active</span>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="employee-image">
                              <img src="assets/images/lead/lead-3.png" alt="" />
                            </div>
                          </td>
                          <td>
                            <p>John Doe</p>
                          </td>
                          <td>
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td>
                            <p>Bootstrap Template</p>
                          </td>
                          <td>
                            <span class="status-btn success-btn">Done</span>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="employee-image">
                              <img src="assets/images/lead/lead-4.png" alt="" />
                            </div>
                          </td>
                          <td>
                            <p>Rayhan Jamil</p>
                          </td>
                          <td>
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td>
                            <p>Css Grid Template</p>
                          </td>
                          <td>
                            <span class="status-btn info-btn">Pending</span>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="employee-image">
                              <img src="assets/images/lead/lead-5.png" alt="" />
                            </div>
                          </td>
                          <td>
                            <p>Esther Howard</p>
                          </td>
                          <td>
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td>
                            <p>Admin Dashboard Design</p>
                          </td>
                          <td>
                            <span class="status-btn close-btn">Close</span>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                        <tr>
                          <td>
                            <div class="employee-image">
                              <img src="assets/images/lead/lead-6.png" alt="" />
                            </div>
                          </td>
                          <td>
                            <p>Anee Doe</p>
                          </td>
                          <td>
                            <p><a href="#0">yourmail@gmail.com</a></p>
                          </td>
                          <td>
                            <p>Space Template Update</p>
                          </td>
                          <td>
                            <span class="status-btn active-btn">Active</span>
                          </td>
                          <td>
                            <div class="action">
                              <button class="text-danger">
                                <i class="lni lni-trash-can"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <!-- end table row -->
                      </tbody>
                    </table>
                    <!-- end table -->
                  </div>
                </div>
                <!-- end card -->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== table components end ========== -->

      <!-- ========== footer start =========== -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 order-last order-md-first">
              <div class="copyright text-center text-md-start">
                <p class="text-sm">
                  Designed and Developed by
                  <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                    PlainAdmin
                  </a>
                </p>
              </div>
            </div>
            <!-- end col-->
            <div class="col-md-6">
              <div class="terms d-flex justify-content-center justify-content-md-end">
                <a href="#0" class="text-sm">Term & Conditions</a>
                <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
              </div>
            </div>
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </footer>
      <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/dynamic-pie-chart.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/jvectormap.min.js"></script>
    <script src="assets/js/world-merc.js"></script>
    <script src="assets/js/polyfill.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
