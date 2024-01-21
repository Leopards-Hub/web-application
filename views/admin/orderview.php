<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YummyFood Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "components/linkbootstrap5.php"; ?>
    <link rel="stylesheet" href="../root/CSS/admin/style.css">
    <link rel="stylesheet" href="../root/CSS/admin/order.css">
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
                                <li class="nav-item"> <a class="nav-link" href="booktable">Book table</a></li>
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
                        <a class="nav-link" data-bs-toggle="collapse" href="#" aria-expanded="false"
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
                <div class="content-wrapper">
                    <div class="content-header">
                        <button id="add-new-order" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#myModal">Add new</button>
                    </div>
                    <div class="content-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name Customer</th>
                                    <th>Date order</th>
                                    <th>Status</th>
                                    <th>Discount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($data as $row): ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['order_id']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Username']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['order_date']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['status']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['discount']; ?>
                                        </td>
                                        <td>
                                            <a href="order?id=<?php echo $row['order_id']; ?>" class="btn btn-primary"
                                                data-bs-whatever="@getbootstrap" id="openModal"
                                                data-id="<?= $row['order_id']; ?>"
                                                onclick="console.log('click', this.getAttribute('data-id'))">
                                                Update

                                            </a>

                                            <a href="order?iddl=<?php echo $row['order_id']; ?>" class="btn btn-danger"
                                                id="openDeleteModal">
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <?php

                            $id = $_GET['id'];

                            $dataone = $od->fetchOne($id);
                            ?>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detail Orders</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                    <input type="hidden" name="form_type" value="update">
                                        <div class="">
                                            <label for="modalOrderId" class="col-form-label">ID:</label>
                                            <input type="text" class="form-control" id="modalOrderId"
                                                value="<?php echo $dataone[0]['order_id']; ?>" readonly name="id">
                                        </div>
                                        <div class="">
                                            <label for="modalUsername" class="col-form-label">Name:</label>
                                            <input type="text" class="form-control" id="modalUsername"
                                                value="<?php echo $dataone[0]['Username']; ?>" readonly name="username">
                                        </div>
                                        <div class="">
                                            <label for="modalOrderDate" class="col-form-label">Order
                                                Date:</label>
                                            <input type="datetime-local" class="form-control" id="modalOrderDate"
                                                value="<?php echo $dataone[0]['order_date']; ?>"  readonly
                                                name="orderdate">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalOrderDate" class="col-form-label">Order
                                                        Date:</label>
                                                    <input type="datetime-local" class="form-control"
                                                        id="modalOrderDate" value="<?= $dataone[0]['order_date']; ?>"
                                                        readonly name="orderdate">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalStatus" class="col-form-label">Status:</label>
                                                    <select class="form-select" id="modalStatus" name="status">
                                                        <option value="<?= $dataone[0]['status']; ?>">
                                                            <?= $dataone[0]['status']; ?>
                                                        </option>
                                                        <option value="pending">Pending</option>
                                                        <option value="completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalDelivery" class="col-form-label">Delivery
                                                        Date:</label>
                                                    <input type="datetime-local" class="form-control" id="modalDelivery"
                                                        value="<?= $dataone[0]['delivery_date']; ?>"
                                                        name="deliverydate">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalDiscount" class="col-form-label">Discount:</label>
                                                    <input type="text" class="form-control" id="modalDiscount"
                                                        value="<?= $dataone[0]['discount']; ?>" name="discount">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalDishName" class="col-form-label">Dish Name:</label>
                                                    <input type="text" class="form-control" id="modalDishName"
                                                        value="<?= $dataone[0]['dish_name']; ?>" name="dish_name"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalPrice" class="col-form-label">Price:</label>
                                                    <input type="text" class="form-control" id="modalPrice"
                                                        value="<?= $dataone[0]['price']; ?>" name="price" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalQuantity" class="col-form-label">Quantity:</label>
                                                    <input type="text" class="form-control" id="modalQuantity"
                                                        value="<?= $dataone[0]['quantity']; ?>" name="quantity"
                                                        readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalTotalPrice" class="col-form-label">Total
                                                        Price:</label>
                                                    <input type="text" class="form-control" id="modalTotalPrice"
                                                        value="<?= $dataone[0]['total_price']; ?>" name="total_price"
                                                        readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End of additional fields -->
                                        <!-- tạo id dish ẩn   -->
                                        <input type="hidden" value="<?= $dataone[0]['dish_id']; ?>" name="dish_id"
                                            readonly>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Create New Order</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="order" method="post">
                                        <input type="hidden" name="form_type" value="create">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="newModalUsername" class="col-form-label">Name:</label>
                                                    <select class="form-control" id="newModalUsername" name="username">
                                                        <?php $usernames = $od->getAllUser(); ?>
                                                        <?php foreach ($usernames as $username): ?>
                                                            <option value="<?php echo $username['Username']; ?>">
                                                                <?php echo $username['Username']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalDishName" class="col-form-label">Dish Name:</label>
                                                    <select class="form-control" id="newModalUsername" name="dish_name">
                                                        <?php $dishs = $od->getAllDish(); ?>
                                                        <?php foreach ($dishs as $dish): ?>
                                                            <option value="<?php echo $dish['Dish_name']; ?>">
                                                                <?php echo $dish['Dish_name']; ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="newModalStatus" class="col-form-label">Status:</label>
                                                    <select class="form-select" id="newModalStatus" name="status">
                                                        <option value="pending" >Pending</option>
                                                        <option value="completed">Completed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="newModalDeliveryDate" class="col-form-label">Delivery
                                                        Date:</label>
                                                    <input type="datetime-local" class="form-control"
                                                        id="newModalDeliveryDate" name="deliverydate"
                                                        value="<?php echo date('Y-m-d\TH:i:s', strtotime($data['delivery_date'])); ?>">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="newModalDiscount"
                                                        class="col-form-label">Discount:</label>
                                                    <input type="text" class="form-control" id="newModalDiscount"
                                                        placeholder="Enter Discount" name="discount"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="modalQuantity" class="col-form-label">Quantity:</label>
                                                    <input type="text" class="form-control" id="modalQuantity"
                                                         name="quantity"
                                                        >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" id="address" name="address" >
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog"
                    aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="deleteForm" action="order" method="post">
                                <input type="hidden" name="form_type" value="delete">
                                <input type="hidden" name="order_id" id="" value="<?= $_GET['iddl']; ?>">
                                <div class="modal-body">
                                    Are you sure you want to delete this item?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                        id="closeDeleteModal">Cancel</button>
                                    <!-- Thay thế thẻ 'a' bằng thẻ 'button' để gửi form -->
                                    <button type="submit" class="btn btn-danger"
                                        id="confirmDeleteButton">Delete</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
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
    });
    document.addEventListener('DOMContentLoaded', function () {
        // Check if the URL contains the 'id' parameter
        var urlParams = new URLSearchParams(window.location.search);
        var modalId = urlParams.get('iddl');

        // If 'id' is present, trigger the modal to open
        if (modalId) {
            // Use Bootstrap's modal method to show the modal
            $('#confirmDeleteModal').modal('show');
        }

        // Listen for the modal hidden event
        $('#confirmDeleteModal').on('hidden.bs.modal', function (e) {
            // Modify the browser's history to remove the 'id' parameter
            history.pushState({}, document.title, window.location.pathname);
        });
        $('#closeDeleteModal').on('click', function (e) {
            e.preventDefault();

            // Hide the modal
            $('#confirmDeleteModal').modal('hide');

            // Modify the browser's history to remove the 'id' parameter
            history.pushState({}, document.title, window.location.pathname);
        });
        $('#close').on('click', function (e) {
            e.preventDefault();

            // Hide the modal
            $('#confirmDeleteModal').modal('hide');
            // Modify the browser's history to remove the 'id' parameter
            history.pushState({}, document.title, window.location.pathname);
        });
    });
</script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

</html>