<style>
    body {
        background-color: #f8f9fa;
    }

    .profile-container {
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
        height: 600px;
        width: 900px;
        margin: 50px auto;
    }

    .profile-header {
        background-color:darkcyan;
        color: white;
        padding: 120px;
        text-align: center;
    }

    .profile-image {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid #fff;
    }

    .profile-info {
        padding: 40px;
    }

    .btn-follow,
    .btn-edit {
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-follow:hover,
    .btn-edit:hover {
        background-color: #0056b3;
    }

    /* Custom styling for the modal */
    .modal-content {
        border-radius: 15px;
    }

    .modal-header {
        background-color: darkred;
        color: white;
        border-radius: 15px 15px 0 0;
    }

    .modal-footer {
        border-radius: 0 0 15px 15px;
    }
</style>