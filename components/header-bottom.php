<?php
include 'components/button.php';
include 'components/header-navbar.php';
include 'root/CSS/component/header-navbar.css.php'; // Include external CSS file if needed
include 'components/logo.php';

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Add your additional CSS styles here -->
    <style>
        .container-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
        }

        #avata {
            margin-left: 20px; /* Adjust as needed */
        }

        #nav-avatar {
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 45px;
            width: 45px;
        }

        .dropdown-menu {
            background-color: #ffffff;
            border: 1px solid #ddd;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            color: #0052FE;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>

<div class="header-navbarcontainer">
    <div class="container-head">
        <?php
        // #AD343E #474747 #ffffff
        createLogo("#AD343E", "#474747");

        generateNavbar($array_navbar_1, "");

        if ($isLoggedIn) {
            // If the user is logged in, display the user profile dropdown
            echo '<div class="nav_log nav_text nav-item dropdown" id="avata">';
            echo '<a class="nav-link dropdown-toggle" href="#" role="button" onclick="toggleDropdown()">';
            echo '<img id="nav-avatar" src="https://media.istockphoto.com/id/1311497219/vi/vec-to/avatar-phong-c%C3%A1ch-m%C3%A0u-%C4%91en-trong-m%E1%BB%99t-v%C3%B2ng-tr%C3%B2n-m%C3%A0u-v%C3%A0ng-m%E1%BA%ABu-h%E1%BB%93-s%C6%A1-cho-c%C3%A1c-trang-web-%E1%BB%A9ng-d%E1%BB%A5ng.jpg?s=612x612&w=0&k=20&c=NssOkuK56TEoY2a8DYCfXUnthKqy50u46Eb9BhOPQ0I=" alt="avatar">';
            echo '</a>';
            echo '<ul class="dropdown-menu" id="dropdown-menu">';
            echo '<li><a class="dropdown-item" href="logout" id="logout">Log out</a></li>';
            echo '</ul>';
            echo '</div>';
        } else {
            // If the user is not logged in, display the Login button
            createButton("Login", "login", "btn-login");
        }
        ?>
    </div>
</div>

<script>
    const dropdownMenu = document.getElementById("dropdown-menu");
    const btn_login = document.getElementById("btn-login");
    const btn_logout = document.getElementById("logout");

    <?php
    // Use PHP to set a JavaScript variable indicating the login status
    echo 'const isLoggedIn = ' . ($isLoggedIn ? 'true' : 'false') . ';';
    ?>

    function toggleDropdown() {
        if (isLoggedIn) {
            dropdownMenu.classList.toggle("show");
        } else {
            window.location.href = "login";
        }
    }

    if (isLoggedIn) {
        btn_logout.addEventListener('click', () => {
            // Perform AJAX call to logout
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);
                    if (response.status === 'success') {
                        // Redirect or perform any other action after successful logout
                        window.location.href = "login";
                    }
                }
            };

            xhr.open("GET", "/logout", true);
            xhr.send();
        });
    } else {
        btn_login.addEventListener('click', () => {
            window.location.href = "login";
        });
    }
</script>

</body>
</html>
