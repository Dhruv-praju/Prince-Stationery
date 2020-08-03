<html>
  <head>
    <title>DASHBOARD</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

<link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/toggle.css" />
  </head>

  <body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f00f8dca49.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Wrapper -->
    <div class="wrapper">
      <!-- Sidebar -->
      <nav class="sidebar">
        <!-- close sidebar menu -->
        <div class="dismiss">
          <i class="fas fa-arrow-left"></i>
        </div>

        <div class="logo">
          <img src="C:\Users\91992\Desktop\bootstrap\logo.png" />
        </div>

        <ul class="list-unstyled menu-elements">
          <li class="active">
            <a class="scroll-link" href="#top-content"
              ><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a
            >
          </li>
          <li>
            <a class="scroll-link" href="#section-1"
              ><i class="fa fa-bar-chart" aria-hidden="true"></i> Analysis</a
            >
          </li>
          <li>
            <a
              href="#otherSections"
              data-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle"
              role="button"
              aria-controls="otherSections"
            >
              <i class="fas fa-store"></i> Store
            </a>
            <ul class="collapse list-unstyled" id="otherSections">
              <li>
                <a class="scroll-link" href="#section-3">Orders</a>
              </li>
              <li>
                <a class="scroll-link" href="#section-4">Products</a>
              </li>
              <li>
                <a class="scroll-link" href="#section-4">Coupons</a>
              </li>
              <li>
                <a class="scroll-link" href="#section-4">Costomers</a>
              </li>
              <li>
                <a class="scroll-link" href="#section-4">Reports</a>
              </li>
              <li>
                <a class="scroll-link" href="#section-4">Settings</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="scroll-link" href="#section-1"
              ><i class="fas fa-photo-video"></i> Media</a
            >
          </li>
          <li>
            <a class="scroll-link" href="#section-1"
              ><i class="fas fa-info-circle"></i> Inquiries</a
            >
          </li>
          <li>
            <a class="scroll-link" href="#section-1"
              ><i class="fas fa-user-friends"></i> Users</a
            >
          </li>
          <li>
            <a class="scroll-link" href="#section-1"
              ><i class="fas fa-user-shield"></i> My Profile</a
            >
          </li>
          <li>
            <div class="last">
              <a class="scroll-link" href="#section-1"
                ><i class="far fa-question-circle"></i> Support</a
              >
            </div>
          </li>
        </ul>
      </nav>
      <!-- End sidebar -->

      <!-- Content -->
      <div class="content">
        <!-- open sidebar menu -->
        <a
          class="btn btn-primary btn-customized open-menu"
          href="#"
          role="button"
        >
          <i class="fas fa-align-left"></i>
        </a>

        <div class="container">
          <h4>Dashboard</h4>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="box-one"><h5>Total Visitors</h5></div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="box-two"><h5>Total Sales</h5></div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="box-three"><h5>Sign Ups</h5></div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="box-four">
                <h5>Store Report</h5>

                <table class="table">
                  <thead>
                    <tr>
                      <td colspan="3">
                        <i class="fas fa-rupee-sign"></i> ₹ 35,000 <br />
                        <font size="1"> Net Sales this month </font>
                      </td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td colspan="4">
                        <font size="3"
                          ><b
                            >Camlin Kokuyo Premium Poster Colours 15ml</b
                          ></font
                        ><br />
                        <font size="1"> Top Seller this month </font>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <i class="fas fa-play-circle"></i> 2 Orders<br />
                        <font size="1">Awaiting processing</font>
                      </td>
                      <td colspan="2">
                        <i class="fas fa-pause-circle"></i> 0 Orders<br />
                        <font size="1"> On Hold</font>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <i class="fas fa-exclamation-circle"></i> 0 Products<br />
                        <font size="1"> Low in stock </font>
                      </td>
                      <td colspan="2">
                        <i class="fas fa-times-circle"></i> 0 Products<br />
                        <font size="1"> Out of Stock</font>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End content -->
    </div>
    <!-- End wrapper -->

    <script>
      jQuery(document).ready(function () {
        $(".dismiss").on("click", function () {
          $(".sidebar").removeClass("active");
        });

        $(".open-menu").on("click", function (e) {
          e.preventDefault();
          $(".sidebar").addClass("active");
          $(".overlay").addClass("active");
          // close opened sub-menus
          $(".collapse.show").toggleClass("show");
          $("a[aria-expanded=true]").attr("aria-expanded", "false");
        });

        /* other code */
      });
    </script>
  </body>
</html>