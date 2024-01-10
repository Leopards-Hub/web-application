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
        ?>
        <div class="header-left d-flex flex-row gap-3">

        
        <?php
        if ($isLoggedIn) {
            // If the user is logged in, display the user profile dropdown
            echo '<div class="nav_log nav_text nav-item dropdown" id="avata">';
            echo '<a class="nav-link dropdown-toggle" href="#" role="button" onclick="toggleDropdown()">';
            echo '<img id="nav-avatar" class="mt-2" src="https://media.istockphoto.com/id/1311497219/vi/vec-to/avatar-phong-c%C3%A1ch-m%C3%A0u-%C4%91en-trong-m%E1%BB%99t-v%C3%B2ng-tr%C3%B2n-m%C3%A0u-v%C3%A0ng-m%E1%BA%ABu-h%E1%BB%93-s%C6%A1-cho-c%C3%A1c-trang-web-%E1%BB%A9ng-d%E1%BB%A5ng.jpg?s=612x612&w=0&k=20&c=NssOkuK56TEoY2a8DYCfXUnthKqy50u46Eb9BhOPQ0I=" alt="avatar">';
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
        <a href="shopping"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="54" viewBox="0 0 60 54" fill="none">
  <path d="M9.18335 22.4807H6.73438V12.6117C6.73438 10.7157 8.01397 7.12891 12.8568 7.12891H47.1425C49.2597 7.12891 53.265 8.50399 53.265 13.7083V22.4807H50.816V13.7083C50.816 9.37246 47.2932 9.32202 47.1425 9.32202H12.8568C9.40009 9.32202 9.1907 12.0678 9.18335 12.6183V22.4807Z" fill="#546E7A"/>
  <path d="M41.6751 22.4805C40.1138 26.9281 35.4804 30.1564 29.9996 30.1564C24.5187 30.1564 19.8853 26.9281 18.3241 22.4805H5.50977L11.413 46.6047H48.5849L54.4894 22.4805H41.6751ZM31.2241 43.3151H28.7751V38.9288H31.2241V43.3151ZM31.2241 36.7357H28.7751V32.3495H31.2241V36.7357ZM37.3465 43.3151H34.8975V38.9288H37.3465V43.3151ZM37.3465 36.7357H34.8975V32.3495H37.3465V36.7357ZM43.469 43.3151H41.02V38.9288H43.469V43.3151ZM43.469 36.7357H41.02V32.3495H43.469V36.7357ZM25.1016 43.3151H22.6526V38.9288H25.1016V43.3151ZM25.1016 36.7357H22.6526V32.3495H25.1016V36.7357ZM18.9792 43.3151H16.5302V38.9288H18.9792V43.3151ZM18.9792 36.7357H16.5302V32.3495H18.9792V36.7357Z" fill="#E91E63"/>
  <path d="M53.2657 21.3828H36.92C35.9098 23.9367 33.1976 25.769 30.0004 25.769C26.8033 25.769 24.0898 23.9367 23.0808 21.3828H6.73511C5.38328 21.3828 4.28613 22.3653 4.28613 23.5759V24.6725C4.28613 25.8831 5.38328 26.8656 6.73511 26.8656H19.5114C21.898 29.4261 25.5041 31.2518 30.0004 31.2518C34.4967 31.2518 38.1029 29.4261 40.4894 26.8656H53.2657C54.6176 26.8656 55.7147 25.8831 55.7147 24.6725V23.5759C55.7147 22.3653 54.6176 21.3828 53.2657 21.3828Z" fill="#AD1457"/>
</svg></a>
        
        </div>
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
