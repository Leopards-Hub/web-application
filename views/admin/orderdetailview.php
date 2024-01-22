<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YummyFood Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "components/linkbootstrap5.php"; ?>
    <link rel="stylesheet" href="../root/CSS/admin/style.css">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <?php include 'components/logo.php';
                        createLogo("#AD343E", "#474747");
                    ?>
                    <style>
                        .logo-container .logo-title{
                            font-size: 32px !important;
                        }
                    </style>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group d-flex align-items-center ">
                            <div class="input-group-prepend bg-transparent">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            </div>
                            <input type="text" class="form-control bg-transparent border-0"
                                placeholder="Search projects">
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="/admin" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="../root/assets/images-food/food1.png" alt="image">
                                <span class="availability-status online"></span>
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">Yummy Food Restaurant</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item d-none d-lg-block full-screen-link">
                        <a class="nav-link" href="/home">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <a href="/admin" class="nav-link">
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">Admin</span>
                                <span class="text-secondary text-small">PHP Project Manage</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">
                            <span class="menu-title">Dashboard</span>
                            <i class="mdi mdi-home menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-title">Manage</span>
                            <i class="menu-arrow"></i>
                            <i class="fa fa-list-alt" aria-hidden="true"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="table">Table</a></li>
                                <li class="nav-item"> <a class="nav-link" href="order" id="taget_self">Orders</a></li>
                                <li class="nav-item"> <a class="nav-link" href="dish">Dish</a></li>
                                <li class="nav-item"> <a class="nav-link" href="booktable">Booked table</a></li>
                                <li class="nav-item"> <a class="nav-link" href="user">User</a></li>
                                <li class="nav-item"> <a class="nav-link" href="orderdetail">Order detail</a></li>
                                <li class="nav-item"> <a class="nav-link" href="bookings">Bookings</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span class="menu-title">Forms</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span class="menu-title">Charts</span>
                            <i class="mdi mdi-chart-bar menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <span class="menu-title">Tables</span>
                            <i class="mdi mdi-table-large menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="" aria-expanded="false"
                            aria-controls="general-pages">
                            <span class="menu-title">Sample Pages</span>
                            <i class="menu-arrow"></i>
                            <i class="mdi mdi-medical-bag menu-icon"></i>
                        </a>
                        <div class="collapse" id="general-pages">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href=""> Blank
                                        Page </a></li>
                                <li class="nav-item"> <a class="nav-link" href=""> Login </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href=""> Register
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href=""> 404 </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href=""> 500 </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">

                <div class="container mt-5">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th>STT</th>
                                <th>Dish Name</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Username</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $id = 1; // Biến để lưu trữ giá trị ID tăng dần
                            
                            foreach ($data as $row): ?>
                                <tr>
                                    <td>
                                        <?= $id ?>
                                    </td>
                                    <td>
                                        <?= $row['dish_name'] ?>
                                    </td>
                                    <td>
                                        <?= $row['Quantity'] ?>
                                    </td>
                                    <td>
                                        <?= $row['total_price'] ?>
                                    </td>
                                    <td>
                                        <?= $row['Username'] ?>
                                    </td>
                                    <td>
                                        <a href="orderdetail?id=<?= $row['Order_id']; ?>" class="btn btn-primary"
                                            onclick="showDetail(<?= $id ?>)">Detail</a>
                                    </td>
                                </tr>

                                <?php $id++; // Tăng giá trị ID sau mỗi hàng
                            endforeach; ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                        <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li><strong>Username:</strong>
                                <?php echo $array['Username']; ?>
                            </li>
                            <li><strong>Dish Name:</strong>
                                <?php echo $array['dish_name']; ?>
                            </li>
                            <li><strong>Order Date:</strong>
                                <?php echo $array['order_date']; ?>
                            </li>
                            <li><strong>Quantity:</strong>
                                <?php echo $array['quantity']; ?>
                            </li>
                            <li><strong>Status:</strong>
                                <?php echo $array['status']; ?>
                            </li>
                            <li><strong>Delivery Date:</strong>
                                <?php echo $array['delivery_date']; ?>
                            </li>
                            <li><strong>Price:</strong>
                                <?php echo $array['price']; ?>
                            </li>
                            <li><strong>Discount:</strong>
                                <?php echo $array['discount']; ?>
                            </li>
                            <li><strong>Total Price:</strong>
                                <?php echo $array['total_price']; ?>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btn-close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript to handle the confirmation -->
        <footer class="footer">
            <div class="container-fluid d-flex justify-content-center">
                <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                    bootstrapdash.com 2021</span>
            </div>
        </footer>
    </div>
    </div>
    </div>
</body>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Check if the URL contains the 'id' parameter
        var urlParams = new URLSearchParams(window.location.search);
        var modalId = urlParams.get('id');

        // If 'id' is present, trigger the modal to open
        if (modalId) {
            // Use Bootstrap's modal method to show the modal
            $('#exampleModal').modal('show');
        }

        // Listen for the modal hidden event
        $('#exampleModal').on('hidden.bs.modal', function (e) {
            // Modify the browser's history to remove the 'id' parameter
            history.pushState({}, document.title, window.location.pathname);
        });
        $('#close').on('click', function (e) {
            e.preventDefault();

            // Hide the modal
            $('#exampleModal').modal('hide');

            // Modify the browser's history to remove the 'id' parameter
            history.pushState({}, document.title, window.location.pathname);
        });
        $('#btn-close').on('click', function (e) {
            e.preventDefault();

            // Hide the modal
            $('#exampleModal').modal('hide');

            // Modify the browser's history to remove the 'id' parameter
            history.pushState({}, document.title, window.location.pathname);
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

</html>