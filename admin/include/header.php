<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>mp</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!-- plugin css file  -->
    <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- project css file  -->
    <link rel="stylesheet" href="assets/css/ebazar.style.min.css?v=1.0">
</head>

<body>
    <div id="ebazar-layout" class="theme-blue">
        <!-- sidebar -->
        <div class="sidebar px-4 py-4 py-md-4 me-0">
            <div class="d-flex flex-column h-100">
                <a href="index.php" class="mb-0 brand-icon">
                    <span class="logo-icon">
                        <i class="bi bi-bag-check-fill fs-4"></i>
                    </span>
                    <span class="logo-text">Admin</span>
                </a>
                <!-- Menu: main ul -->
                <ul class="menu-list flex-grow-1 mt-3">
                    <li><a class="m-link active" href="index.php"><i class="icofont-home fs-5"></i>
                            <span>Dashboard</span></a></li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#website-info" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Website Setting</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="website-info">
                            <li><a class="ms-link" href="website-info.php">Website Info</a></li>

                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#article" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Article</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="article">
                            <li><a class="ms-link" href="add-artical.php">Add Article</a></li>
                            <li><a class="ms-link" href="view-article.php">View Articles</a></li>
                            <li><a class="ms-link" href="categories.php">Categories</a></li>
                            <li><a class="ms-link" href="tags.php">Tags</a></li>

                        </ul>
                    </li>
                    <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#archive" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Archive</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="archive">
                            <li><a class="ms-link" href="#">Add Archive</a></li>
                        </ul>
                    </li>
                     <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#blog" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Blog</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="blog">
                            <li><a class="ms-link" href="#">Add Blog</a></li>
                        </ul>
                    </li>
                     <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#work" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Work</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="work">
                            <li><a class="ms-link" href="#">Add Work</a></li>
                        </ul>
                    </li>

                     <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#product" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Product</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="product">
                            <li><a class="ms-link" href="#">Add Product</a></li>
                        </ul>
                    </li>

                      <li class="collapsed">
                        <a class="m-link" data-bs-toggle="collapse" data-bs-target="#contact" href="#">
                            <i class="icofont-truck-loaded fs-5"></i> <span>Contact</span> <span
                                class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="contact">
                            <li><a class="ms-link" href="#">Add Contact</a></li>
                        </ul>
                    </li>

                   
                </ul>
                <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                    <span class="ms-2"><i class="icofont-bubble-right"></i></span>
                </button>
            </div>
        </div>

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">
            <!-- Body: Header -->
            <div class="header">
                <nav class="navbar py-4">
                    <div class="container-xxl">
                        <!-- header rightbar icon -->
                        <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                            <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                                <div class="u-info me-2">
                                    <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold"></span></p>
                                    <small>Your Profile</small>
                                </div>
                                <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button"
                                    data-bs-toggle="dropdown" data-bs-display="static">
                                    <img class="avatar lg rounded-circle img-thumbnail"
                                        src="assets/images/profile_av.svg" alt="profile">
                                </a>
                                <div
                                    class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                    <div class="card border-0 w280">
                                        <div class="card-body pb-0">
                                            <div class="d-flex py-1">
                                                <img class="avatar rounded-circle" src="assets/images/profile_av.svg"
                                                    alt="profile">
                                                <div class="flex-fill ms-3">
                                                    <p class="mb-0"><span class="font-weight-bold"></span>
                                                    </p>
                                                    <small class=""></small>
                                                </div>
                                            </div>

                                            <div>
                                                <hr class="dropdown-divider border-dark">
                                            </div>
                                        </div>
                                        <div class="list-group m-2 ">
                                            <a href="#" class="list-group-item list-group-item-action border-0 "><i
                                                    class="icofont-ui-user fs-5 me-3"></i>Edit Profile</a>

                                            <a href="logout.php"
                                                class="list-group-item list-group-item-action border-0 ">
                                                <i class="icofont-logout fs-5 me-3"></i>Signout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- menu toggler -->
                        <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#mainHeader">
                            <span class="fa fa-bars"></span>
                        </button>

                        <!-- main menu Search-->
                        <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                            <div class="input-group flex-nowrap input-group-lg">
                                <input type="search" class="form-control" placeholder="Search" aria-label="search"
                                    aria-describedby="addon-wrapping">
                                <button type="button" class="input-group-text" id="addon-wrapping"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>

                    </div>
                </nav>
            </div>