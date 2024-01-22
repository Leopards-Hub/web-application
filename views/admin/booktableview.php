<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YummyFood Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "components/linkbootstrap5.php"; ?>
    <link rel="stylesheet" href="../root/CSS/admin/style.css">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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
        <div class=" page-body-wrapper">
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
                                <li class="nav-item"> <a class="nav-link" 
                                        href="table">Table</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="order">Orders</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="dish">Dish</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="#">Booked table</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="user">User</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="orderdetail">Order detail</a></li>
                                 <li class="nav-item"> <a class="nav-link"
                                        href="bookings">Bookings</a></li>
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
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
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
            <a class='btn btn-danger' id="addNewButton" href="#" onclick="openAddNewModal()" data-toggle="modal" data-target="#addNewModal">Add new</a>
  <table class="table">
    <thead>
      <tr>
      <th>Book_id</th>
        <th>User_id</th>
        <th>Table_id</th>
        <th>Time</th>
        <th>Phone</th>
        <th>number people</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($posts as $post): ?>
        <tr>
        <td><?php echo $post['Book_id']; ?></td>
          <td><?php echo $post['User_id']; ?></td>
          <td><?php echo $post['Table_id']; ?></td>
          <td><?php echo $post['time']; ?></td>
          <td><?php echo $post['phone']; ?></td>
          <td><?php echo $post['num_guests']; ?></td>

          <td>
            <a class='btn btn-danger' onclick="openDeleteModal(<?php echo $post['Book_id']; ?>)">Delete</a> 
            <a class="btn btn-success" onclick="openEditModal(<?php echo $post['Book_id']; ?>, <?php echo $post['User_id']; ?>, <?php echo $post['Table_id']; ?>, '<?php echo $post['time']; ?>', '<?php echo $post['phone']; ?>', '<?php echo $post['num_guests']; ?>')">Edit</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<!-- Add New Modal -->
<div class="modal" id="addNewModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeAddNewModal()">&times;</button>
      </div>
      <div class="modal-body">
        <form id="addNewForm" method="POST" action="">
          <input type="hidden" name="action" value="create">
          <div class="form-group">
            <label for="User_id">User ID:</label>
            <select type="" class="form-control" id="User_id" name="User_id">
            <?php $arr = getAllIds('Users','user_id',$db) ?>
            <?php foreach($arr as $ar) {
              echo '<option  value="'.$ar.'">'.$ar.'</option>';
            }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label for="Table_id">Table ID:</label>
            <select type="" class="form-control" id="Table_id" name="Table_id">
            <?php $arr = getAllIds('Table','table_id',$db) ?>
            <?php foreach($arr as $ar) {
              echo '<option  value="'.$ar.'">'.$ar.'</option>';
            }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label for="time">Time:</label>
            <input type="datetime-local" class="form-control" id="time" name="time">
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number" class="form-control" id="phone" name="phone">
          </div>
          <div class="form-group">
            <label for="num_guests">Number people:</label>
            <input type="number" class="form-control" id="num_guests" name="num_guests">
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeAddNewModal()">Close</button>
          <button type="submit" form="addNewForm" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Edit Modal -->
<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeEditModal()">&times;</button>
      </div>
      <div class="modal-body" id="editModalBody">
        <form id="editForm" action="" method="POST">
          <input type="hidden" name="action" value="edit">
         
          <div class="form-group">
          <label for="editBookId">ID:</label>
          <input type="number"  class="form-control" name="Book_id" id="editBookId" readonly value="">
          </div>
          <div class="form-group">
            <label for="editUserId">User ID:</label>
            <select type="" class="form-control" id="editUserId" name="User_id">
            <?php $arr = getAllIds('Users','user_id', $db) ?>
            <?php foreach($arr as $ar) {
              echo '<option  value="'.$ar.'">'.$ar.'</option>';
            }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label for="editTableId">Table ID:</label>
            <select type="" class="form-control" id="editTableId" name="Table_id">
            <?php $arr = getAllIds('Table','table_id', $db) ?>
            <?php foreach($arr as $ar) {
              echo '<option  value="'.$ar.'">'.$ar.'</option>';
            }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label for="editTime">Time:</label>
            <input type="datetime-local" class="form-control" id="editTime" name="time">
          </div>
          <div class="form-group">
            <label for="editPhone">Phone:</label>
            <input type="number" class="form-control" id="editPhone" name="phone">
          </div>
          <div class="form-group">
            <label for="editNum_guests">Number people:</label>
            <input type="number" class="form-control" id="editNum_guests" name="num_guests">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeEditModal()">Close</button>
            <button type="button" class="btn btn-success" onclick="submitEditForm()">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeDeleteModal()">&times;</button>
      </div>
      <div class="modal-body" id="deleteModalBody">
        <p>Are you sure you want to delete this item?</p>
        <form id="deleteForm" method="POST" action="">
          <input type="hidden" name="action" value="delete">
          <input type="hidden" name="Book_id" id="deleteBookId" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeDeleteModal()">No</button>
        <button type="button" class="btn btn-danger" onclick="deleteItem()">Yes, Delete</button>
      </div>
    </div>
  </div>
</div>

<script>
  function openEditModal(Book_id,userId, tableId, time, phone, num_guests ) {
    $('#editBookId').val(Book_id);
    $('#editUserId').val(userId);
    $('#editTableId').val(tableId);
    $('#editTime').val(time);
    $('#editPhone').val(phone);
    $('#editNum_guests').val(num_guests);
    $('#editModal').modal('show');
  }

  function closeEditModal() {
    $('#editModal').modal('hide');
  }

  

  function submitEditForm() {
    $('#editForm').submit();
  }

  function openDeleteModal(Book_id) {
    $('#deleteBookId').val(Book_id);
    $('#deleteModal').modal('show');
  }

  function closeDeleteModal() {
    $('#deleteModal').modal('hide');
  }

  function deleteItem() {
    $('#deleteForm').submit();
  }

  function openAddNewModal() {
    $('#addNewModal').modal('show');
  }

  function closeAddNewModal() {
    $('#addNewModal').modal('hide');
  }
</script>


                <footer class="footer">
                    <div class=" d-flex justify-content-center">
                        <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright ©
                            bootstrapdash.com 2021</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  
</html>

