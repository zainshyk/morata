<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_32x.png?v=1699849016">
    <link rel="apple-touch-icon-precomposed" type="image/png" sizes="152x152" href="//demo-morata.myshopify.com/cdn/shop/files/favicon_152x.png?v=1699849016">
    <title>ALL ORDERS</title>

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

      <!-- ========== section start ========== -->
      <section>
        <div class="container-fluid">
          <!-- ========== title-wrapper start ========== -->
          <div class="title-wrapper pt-30">
            <div class="row align-items-center">
              <div class="col-md-6">
                <div class="title d-flex align-items-center flex-wrap">
                  <h2 class="mr-40">Invoice</h2>
                  <a href="#0" class="main-btn primary-btn btn-hover btn-sm">
                    <i class="lni lni-plus mr-5"></i> New Invoice</a>
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
                        Invoice
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

          <!-- Invoice Wrapper Start -->
          <div class="invoice-wrapper">
            <div class="row">
              <div class="col-12">
                <div class="invoice-card card-style mb-30">
                  <div class="invoice-header">
                    <div class="invoice-for">
                      <h2 class="mb-10">Invoice</h2>
                      <p class="text-sm">
                        Admin Dashboard Design & Development
                      </p>
                    </div>
                    <div class="invoice-logo">
                      <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                    </div>
                    <div class="invoice-date">
                      <p><span>Date Issued:</span> 20/02/2024</p>
                      <p><span>Date Due:</span> 20/02/2028</p>
                      <p><span>Order ID:</span> #5467</p>
                    </div>
                  </div>
                  <div class="invoice-address">
                    <div class="address-item">
                      <h5 class="text-bold">From</h5>
                      <h1>John Doe</h1>
                      <p class="text-sm">
                        3891 Ranchview Dr. Richardson, California 62639
                      </p>
                      <p class="text-sm">
                        <span class="text-medium">Email:</span>
                        admin@example.com
                      </p>
                    </div>
                    <div class="address-item">
                      <h5 class="text-bold">To</h5>
                      <h1>Santa Gosh</h1>
                      <p class="text-sm">
                        2972 Westheimer Rd. Santa Ana, Illinois 85486
                      </p>
                      <p class="text-sm">
                        <span class="text-medium">Email:</span>
                        admin@example.com
                      </p>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="invoice-table table">
                      <thead>
                        <tr>
                          <th class="service">
                            <h6 class="text-sm text-medium">Service</h6>
                          </th>
                          <th class="desc">
                            <h6 class="text-sm text-medium">Descriptions</h6>
                          </th>
                          <th class="qty">
                            <h6 class="text-sm text-medium">Qty</h6>
                          </th>
                          <th class="amount">
                            <h6 class="text-sm text-medium">Amounts</h6>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p class="text-sm">Admin Dashboard</p>
                          </td>
                          <td>
                            <p class="text-sm">
                              Design and Development Service
                            </p>
                          </td>
                          <td>
                            <p class="text-sm">3</p>
                          </td>
                          <td>
                            <p class="text-sm">$700</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p class="text-sm">Landing Page</p>
                          </td>
                          <td>
                            <p class="text-sm">
                              Landing Page Ui kit design and Development
                            </p>
                          </td>
                          <td>
                            <p class="text-sm">1</p>
                          </td>
                          <td>
                            <p class="text-sm">$1000</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p class="text-sm">Web design</p>
                          </td>
                          <td>
                            <p class="text-sm">
                              Web Design and Development and Seo
                            </p>
                          </td>
                          <td>
                            <p class="text-sm">2</p>
                          </td>
                          <td>
                            <p class="text-sm">$4000</p>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h6 class="text-sm text-medium">Subtotal</h6>
                          </td>
                          <td>
                            <h6 class="text-sm text-bold">$5700</h6>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h6 class="text-sm text-medium">Discount</h6>
                          </td>
                          <td>
                            <h6 class="text-sm text-bold">45%</h6>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h6 class="text-sm text-medium">Shipping Charge</h6>
                          </td>
                          <td>
                            <h6 class="text-sm text-bold">Free</h6>
                          </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>
                            <h4>Total</h4>
                          </td>
                          <td>
                            <h4>$3135</h4>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                    <div class="alert">
                      <h5 class="text-bold mb-15">Notes:</h5>
                      <p class="text-sm text-gray">
                        All accounts are to be paid within 7 days from receipt
                        of invoice. To be paid by cheque or credit card or
                        direct payment online. If account is not paid within 7
                        days the credits details supplied as confirmation of
                        work undertaken will be charged the agreed quoted fee
                        noted above.
                      </p>
                    </div>
                  </div>
                  <div class="invoice-action">
                    <ul class="d-flex flex-wrap align-items-center justify-content-center">
                      <li class="m-2">
                        <a href="#0" class="main-btn primary-btn-outline btn-hover">
                          Download Invoice
                        </a>
                      </li>
                      <li class="m-2">
                        <a href="#0" class="main-btn primary-btn btn-hover">
                          Send Invoice
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- ENd Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- Invoice Wrapper End -->
        </div>
        <!-- end container -->
      </section>
      <!-- ========== section end ========== -->

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
