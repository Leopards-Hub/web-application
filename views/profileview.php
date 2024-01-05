<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>User Profile</title>
    <?php include '../root/CSS/profile.css.php'; ?>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="profile-container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="profile-header">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                    alt="avatar" class="profile-image">
                                <h5 class="my-3">John Smith</h5>
                                <p class="mb-1" style="color: white;">Full Stack Developer</p>
                                <p class="mb-4" style="color: white;">Bay Area, San Francisco, CA</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <button type="button" class="btn btn-follow">Follow</button>
                                    <button type="button" class="btn btn-outline-light ms-1 btn-edit"
                                        data-toggle="modal" data-target="#editProfileModal">Edit</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="profile-info">
                                <div class="row">
                                    <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" id="fullName">Johnatan Smith</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" id="email">example@example.com</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" id="phone">(097) 234-5678</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Mobile</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" id="mobile">(098) 765-4321</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Address</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0" id="address">Bay Area, San Francisco, CA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add your form elements for editing here -->
                    <form>
                        <div class="form-group">
                            <label for="editFullName">Full Name</label>
                            <input type="text" class="form-control" id="editFullName">
                        </div>
                        <div class="form-group">
                            <label for="editEmail">Email</label>
                            <input type="email" class="form-control" id="editEmail">
                        </div>
                        <div class="form-group">
                            <label for="editPhone">Phone</label>
                            <input type="tel" class="form-control" id="editPhone">
                        </div>
                        <div class="form-group">
                            <label for="editMobile">Mobile</label>
                            <input type="tel" class="form-control" id="editMobile">
                        </div>
                        <div class="form-group">
                            <label for="editAddress">Address</label>
                            <input type="text" class="form-control" id="editAddress">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        // JavaScript code for handling the "Edit" button click event
        $(document).ready(function () {
            $('.btn-edit').on('click', function () {
                // Retrieve current profile information and set it in the modal
                var fullName = $('#fullName').text();
                var email = $('#email').text();
                var phone = $('#phone').text();
                var mobile = $('#mobile').text();
                var address = $('#address').text();

                $('#editFullName').val(fullName);
                $('#editEmail').val(email);
                $('#editPhone').val(phone);
                $('#editMobile').val(mobile);
                $('#editAddress').val(address);
            });
        });
    </script>

</body>

</html>