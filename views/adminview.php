<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YummyFood Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include "../components/linkbootstrap5.php"; ?>
    <link rel="stylesheet" href="../root/CSS/admin/style.css">

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.html">
                    <svg xmlns='http://www.w3.org/2000/svg' width='30' height='29' viewBox='0 0 57 55' fill='none'>
                        <g clip-path='url(#clip0_23_1637)'>
                            <path
                                d='M48.1694 0.80383C47.8608 0.625798 47.493 0.575068 47.1464 0.662739C46.7999 0.750411 46.5028 0.969345 46.3202 1.27163L36.6488 17.3631C36.5992 17.4465 36.5592 17.5351 36.5294 17.6272C35.4473 18.0212 34.4373 18.5848 33.5386 19.2959C30.6082 14.4064 25.2389 11.3276 19.3731 11.3276C10.322 11.3276 2.95955 18.5483 2.93432 27.4317H0.800781L0.99155 28.9239C2.1017 37.597 7.54786 45.1725 15.3786 49.1615V54.2826H35.5842C38.1454 54.2826 40.2291 52.2343 40.2291 49.7182V49.1621C48.0623 45.1713 53.506 37.5958 54.6186 28.9239L54.8094 27.4305H50.9565C50.9386 22.8963 47.978 19.0415 43.8599 17.5861L55.9263 6.18174C56.4629 5.67465 56.4802 4.83454 55.962 4.30751C55.8392 4.18203 55.6925 4.08154 55.5302 4.01178C55.3678 3.94202 55.1931 3.90435 55.0159 3.90092C54.8388 3.8975 54.6627 3.92839 54.4977 3.99183C54.3327 4.05526 54.182 4.15001 54.0543 4.27064L40.6131 16.9762C40.4925 16.9714 40.3725 16.9581 40.25 16.9581C40.1725 16.9581 40.098 16.969 40.0217 16.9702L48.6457 2.62004C48.7359 2.47007 48.7951 2.30413 48.8199 2.13169C48.8448 1.95925 48.8348 1.78369 48.7906 1.61504C48.7464 1.44638 48.6687 1.28794 48.5621 1.14875C48.4556 1.00956 48.3221 0.892356 48.1694 0.80383ZM19.3725 13.9803C24.5399 13.9803 29.25 16.8372 31.5928 21.3134C30.7387 22.4671 30.1331 23.7798 29.8131 25.1712C28.7392 20.4763 24.4697 16.9569 19.3725 16.9569C13.4851 16.9569 8.69555 21.6519 8.67032 27.4311H5.63524C5.65986 20.0109 11.8112 13.9803 19.3725 13.9803ZM19.3725 22.5935C16.6463 22.5935 14.4279 24.7603 14.4026 27.4311H11.3719C11.3971 23.1145 14.9743 19.6102 19.3725 19.6102C23.7719 19.6102 27.3528 23.1145 27.3756 27.4311H24.3411C24.3171 24.7603 22.0986 22.5935 19.3725 22.5935ZM21.6383 27.4317H17.1066C17.1187 26.8487 17.3627 26.2934 17.7865 25.885C18.2102 25.4765 18.78 25.2472 19.3737 25.2462C19.9672 25.2473 20.5366 25.4768 20.9599 25.8853C21.3832 26.2938 21.6267 26.8489 21.6383 27.4317ZM51.6974 30.0844C50.1965 37.7928 44.874 44.3644 37.4974 47.5121H33.1743V50.1654H37.4685C37.3674 50.5817 37.1266 50.9525 36.7849 51.2182C36.4433 51.4838 36.0205 51.6288 35.5848 51.6299H18.0802V50.1654H23.1442V47.5121H18.1128C10.7362 44.3663 5.41309 37.7928 3.91094 30.0844H51.6974ZM37.9848 27.4317C37.9967 26.8489 38.2404 26.2939 38.6638 25.8854C39.0872 25.4769 39.6565 25.2475 40.25 25.2462C40.844 25.2467 41.4142 25.4758 41.8382 25.8844C42.2623 26.2929 42.5064 26.8484 42.5183 27.4317H37.9848ZM40.25 19.6108C44.6512 19.6108 48.2334 23.1151 48.2568 27.4317H45.2205C45.1959 24.7609 42.9768 22.5941 40.25 22.5941C37.5239 22.5941 35.3072 24.7609 35.2826 27.4317H32.2494C32.274 23.1151 35.8512 19.6108 40.25 19.6108Z'
                                fill='#AD343E' />
                            <path
                                d='M39.6741 42.9139C39.8901 42.9139 40.1086 42.8637 40.3098 42.7568C41.9591 41.8897 43.4065 40.6947 44.5598 39.248C45.7131 37.8012 46.5469 36.1345 47.0082 34.3539C47.0524 34.1848 47.0622 34.0088 47.037 33.8361C47.0118 33.6633 46.9522 33.4971 46.8614 33.347C46.7707 33.1969 46.6507 33.0659 46.5083 32.9615C46.3659 32.8571 46.2039 32.7813 46.0316 32.7385C45.8593 32.6957 45.6801 32.6867 45.5043 32.7121C45.3285 32.7374 45.1595 32.7967 45.007 32.8863C44.8545 32.976 44.7215 33.0943 44.6157 33.2346C44.5099 33.3748 44.4334 33.5342 44.3904 33.7035C44.0221 35.1266 43.356 36.4588 42.4345 37.6151C41.5131 38.7714 40.3565 39.7265 39.0384 40.4196C38.7726 40.5585 38.5618 40.7808 38.4395 41.051C38.3172 41.3213 38.2905 41.6239 38.3636 41.9108C38.4367 42.1976 38.6054 42.4522 38.8429 42.634C39.0804 42.8158 39.373 42.9143 39.6741 42.9139Z'
                                fill='#AD343E' />
                            <path
                                d='M36.4059 45.0064C37.2903 45.0064 38.0072 44.3023 38.0072 43.4337C38.0072 42.5652 37.2903 41.8611 36.4059 41.8611C35.5216 41.8611 34.8047 42.5652 34.8047 43.4337C34.8047 44.3023 35.5216 45.0064 36.4059 45.0064Z'
                                fill='#AD343E' />
                        </g>
                        <defs>
                            <clipPath id='clip0_23_1637'>
                                <rect width='56' height='55' fill='white' transform='translate(0.5)' />
                            </clipPath>
                        </defs>
                    </svg>

                    YUMMY FOOD</a>

            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-md-block">
                    <form class="d-flex align-items-center h-100" action="#">
                        <div class="input-group">
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
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
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
                        <a class="nav-link" href="">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-bs-toggle="dropdown">
                            <i class="fa fa-bell-o" aria-hidden="true"></i>
                            <span class="count-symbol bg-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <h6 class="p-3 mb-0">Notifications</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="mdi mdi-calendar"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                                    <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today
                                    </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="mdi mdi-settings"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                                    <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="mdi mdi-link-variant"></i>
                                    </div>
                                </div>
                                <div
                                    class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                                    <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                                    <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <h6 class="p-3 mb-0 text-center">See all notifications</h6>
                        </div>
                    </li>
                    <li class="nav-item nav-logout d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-power"></i>
                        </a>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-block">
                        <a class="nav-link" href="#">
                            <i class="mdi mdi-format-line-spacing"></i>
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
                        <a href="#" class="nav-link">
                           
                            <div class="nav-profile-text d-flex flex-column">
                                <span class="font-weight-bold mb-2">Admin</span>
                                <span class="text-secondary text-small">PHP Project Manage</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
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
                                        href="">Table</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="">Orders</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="">Dish</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="">Book table</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="">User</a></li>
                                <li class="nav-item"> <a class="nav-link"
                                        href="">Order detail</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">
                            <span class="menu-title">Forms</span>
                            <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/charts/chartjs.html">
                            <span class="menu-title">Charts</span>
                            <i class="mdi mdi-chart-bar menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/tables/basic-table.html">
                            <span class="menu-title">Tables</span>
                            <i class="mdi mdi-table-large menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false"
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
                    <div class="page-header">
                        <h3 class="page-title">
                            <span class="page-title-icon bg-gradient-primary text-white me-2">
                            </span> Dashboard
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span></span>Overview <i
                                        class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="row">
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-danger card-img-holder text-white">
                                <div class="card-body">
                                    
                                    <h4 class="font-weight-normal mb-3">Weekly Sales <i
                                            class="mdi mdi-chart-line mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">$ 15,0000</h2>
                                    <h6 class="card-text">Increased by 60%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-info card-img-holder text-white">
                                <div class="card-body">
                                    
                                    <h4 class="font-weight-normal mb-3">Weekly Orders <i
                                            class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">45,6334</h2>
                                    <h6 class="card-text">Decreased by 10%</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 stretch-card grid-margin">
                            <div class="card bg-gradient-success card-img-holder text-white">
                                <div class="card-body">
                                    
                                    <h4 class="font-weight-normal mb-3">Visitors Online <i
                                            class="mdi mdi-diamond mdi-24px float-right"></i>
                                    </h4>
                                    <h2 class="mb-5">95,5741</h2>
                                    <h6 class="card-text">Increased by 5%</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="clearfix">
                                        <h4 class="card-title float-left">Google Analytics</h4>
                                        <div id="visit-sale-chart-legend"
                                            class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                                    </div>
                                    <canvas id="visit-sale-chart" class="mt-4"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Traffic Sources</h4>
                                    <canvas id="traffic-chart"></canvas>
                                    <div id="traffic-chart-legend"
                                        class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
                                </div>
                            </div>
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

</html>