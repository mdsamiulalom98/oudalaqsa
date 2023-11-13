<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<!-- Mirrored from html.digiboard.codebasket.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Sep 2023 07:39:26 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCommerce Dashboard | Digiboard</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="{{ asset('public/backEnd/assets/vendor/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backEnd/assets/vendor/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backEnd/assets/vendor/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backEnd/assets/vendor/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backEnd/assets/vendor/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backEnd/assets/css/style.css') }}">
    <link rel="stylesheet" id="primaryColor" href="{{ asset('public/backEnd/assets/css/blue-color.css') }}">
    <link rel="stylesheet" id="rtlStyle" href="#">
</head>

<body class="body-padding body-p-top">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <div class="header">
        <div class="row g-0 align-items-center">
            <div class="col-xxl-6 col-xl-5 col-4 d-flex align-items-center gap-20">
                <div class="main-logo d-lg-block d-none">
                    <div class="logo-big">
                        <a href="index.html">
                            <img src="assets/images/logo-big.png" alt="Logo">
                        </a>
                    </div>
                    <div class="logo-small">
                        <a href="index.html">
                            <img src="assets/images/logo-small.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="nav-close-btn">
                    <button id="navClose"><i class="fa-light fa-bars-sort"></i></button>
                </div>
                <a href="#" target="_blank" class="btn btn-sm btn-primary site-view-btn"><i
                        class="fa-light fa-globe me-1"></i> <span>View Website</span></a>
            </div>
            <div class="col-4 d-lg-none">
                <div class="mobile-logo">
                    <a href="index.html">
                        <img src="assets/images/logo-big.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-4">
                <div class="header-right-btns d-flex justify-content-end align-items-center">
                    <div class="header-collapse-group">
                        <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                            <form class="header-form">
                                <input type="search" name="search" placeholder="Search..." required>
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                                <div class="lang-select">
                                    <span>Language:</span>
                                    <select>
                                        <option value="">EN</option>
                                        <option value="">BN</option>
                                        <option value="">FR</option>
                                    </select>
                                </div>
                                <div class="header-btn-box">
                                    <button class="header-btn" id="messageDropdown" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-light fa-comment-dots"></i>
                                        <span class="badge bg-danger">3</span>
                                    </button>
                                    <ul class="message-dropdown dropdown-menu" aria-labelledby="messageDropdown">
                                        <li>
                                            <a href="#" class="d-flex">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar.png" alt="image">
                                                </div>
                                                <div class="msg-txt">
                                                    <span class="name">Archer Cowie</span>
                                                    <span class="msg-short">There are many variations of passages of
                                                        Lorem Ipsum.</span>
                                                    <span class="time">2 Hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar-2.png" alt="image">
                                                </div>
                                                <div class="msg-txt">
                                                    <span class="name">Cody Rodway</span>
                                                    <span class="msg-short">There are many variations of passages of
                                                        Lorem Ipsum.</span>
                                                    <span class="time">2 Hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar-3.png" alt="image">
                                                </div>
                                                <div class="msg-txt">
                                                    <span class="name">Zane Bain</span>
                                                    <span class="msg-short">There are many variations of passages of
                                                        Lorem Ipsum.</span>
                                                    <span class="time">2 Hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="show-all-btn">Show all message</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-btn-box">
                                    <button class="header-btn" id="notificationDropdown" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-light fa-bell"></i>
                                        <span class="badge bg-danger">9+</span>
                                    </button>
                                    <ul class="notification-dropdown dropdown-menu"
                                        aria-labelledby="notificationDropdown">
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon text-primary"><i
                                                            class="fa-solid fa-thumbs-up"></i></span> <span
                                                        class="fw-bold">Archer</span> Likes your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar-2.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon text-success"><i
                                                            class="fa-solid fa-comment-dots"></i></span> <span
                                                        class="fw-bold">Cody</span> Commented on your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar-3.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon"><i
                                                            class="fa-solid fa-share"></i></span> <span
                                                        class="fw-bold">Zane</span> Shared your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar-4.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon text-primary"><i
                                                            class="fa-solid fa-thumbs-up"></i></span> <span
                                                        class="fw-bold">Christopher</span> Likes your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar-5.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon text-success"><i
                                                            class="fa-solid fa-comment-dots"></i></span> <span
                                                        class="fw-bold">Charlie</span> Commented on your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="d-flex align-items-center">
                                                <div class="avatar">
                                                    <img src="assets/images/avatar-6.png" alt="image">
                                                </div>
                                                <div class="notification-txt">
                                                    <span class="notification-icon"><i
                                                            class="fa-solid fa-share"></i></span> <span
                                                        class="fw-bold">Jayden</span> Shared your post
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="show-all-btn">Show all message</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-btn-box">
                                    <div class="dropdown">
                                        <button class="header-btn" data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside" aria-expanded="false">
                                            <i class="fa-light fa-calculator"></i>
                                        </button>
                                        <ul class="dropdown-menu calculator-dropdown">
                                            <div class="dgb-calc-box">
                                                <div>
                                                    <input type="text" id="dgbCalcResult" placeholder="0"
                                                        autocomplete="off" readonly>
                                                </div>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="bg-danger">C</td>
                                                            <td class="bg-secondary">CE</td>
                                                            <td class="dgb-calc-oprator bg-primary">/</td>
                                                            <td class="dgb-calc-oprator bg-primary">*</td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>8</td>
                                                            <td>9</td>
                                                            <td class="dgb-calc-oprator bg-primary">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>5</td>
                                                            <td>6</td>
                                                            <td class="dgb-calc-oprator bg-primary">+</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>2</td>
                                                            <td>3</td>
                                                            <td rowspan="2" class="dgb-calc-sum bg-primary">=</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">0</td>
                                                            <td>.</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <button class="header-btn fullscreen-btn" id="btnFullscreen"><i
                                        class="fa-light fa-expand"></i></button>
                                <button class="header-btn theme-color-btn"><i
                                        class="fa-light fa-sun-bright"></i></button>
                            </div>
                        </div>
                    </div>
                    <button class="header-btn header-collapse-group-btn d-lg-none"><i
                            class="fa-light fa-ellipsis-vertical"></i></button>
                    <button class="header-btn theme-settings-btn d-lg-none"><i class="fa-light fa-gear"></i></button>
                    <div class="header-btn-box profile-btn-box">
                        <button class="profile-btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/admin.png" alt="image">
                        </button>
                        <ul class="dropdown-menu profile-dropdown-menu">
                            <li>
                                <div class="dropdown-txt text-center">
                                    <p class="mb-0">Shaikh Abu Dardah</p>
                                    <span class="d-block">Web Developer</span>
                                    <div class="d-flex justify-content-center">
                                        <div class="form-check pt-3">
                                            <input class="form-check-input" type="checkbox" id="seeProfileAsSidebar">
                                            <label class="form-check-label" for="seeProfileAsSidebar">See as
                                                sidebar</label>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a class="dropdown-item" href="view-profile.html"><span class="dropdown-icon"><i
                                            class="fa-regular fa-circle-user"></i></span> Profile</a></li>
                            <li><a class="dropdown-item" href="chat.html"><span class="dropdown-icon"><i
                                            class="fa-regular fa-message-lines"></i></span> Message</a></li>
                            <li><a class="dropdown-item" href="#"><span class="dropdown-icon"><i
                                            class="fa-regular fa-circle-question"></i></span> Help</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="edit-profile.html"><span class="dropdown-icon"><i
                                            class="fa-regular fa-gear"></i></span> Settings</a></li>
                            <li><a class="dropdown-item" href="login.html"><span class="dropdown-icon"><i
                                            class="fa-regular fa-arrow-right-from-bracket"></i></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->

    <!-- profile right sidebar start -->
    <div class="profile-right-sidebar">
        <button class="right-bar-close"><i class="fa-light fa-angle-right"></i></button>
        <div class="top-panel">
            <div class="profile-content scrollable">
                <ul>
                    <li>
                        <div class="dropdown-txt text-center">
                            <p class="mb-0">Shaikh Abu Dardah</p>
                            <span class="d-block">Web Developer</span>
                            <div class="d-flex justify-content-center">
                                <div class="form-check pt-3">
                                    <input class="form-check-input" type="checkbox" id="seeProfileAsDropdown">
                                    <label class="form-check-label" for="seeProfileAsDropdown">See as dropdown</label>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="view-profile.html"><span class="dropdown-icon"><i
                                    class="fa-regular fa-circle-user"></i></span> Profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="chat.html"><span class="dropdown-icon"><i
                                    class="fa-regular fa-message-lines"></i></span> Message</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="task.html"><span class="dropdown-icon"><i
                                    class="fa-regular fa-calendar-check"></i></span> Taskboard</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#"><span class="dropdown-icon"><i
                                    class="fa-regular fa-circle-question"></i></span> Help</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bottom-panel">
            <div class="button-group">
                <a href="edit-profile.html"><i class="fa-light fa-gear"></i><span>Settings</span></a>
                <a href="login.html"><i class="fa-light fa-power-off"></i><span>Logout</span></a>
            </div>
        </div>
    </div>
    <!-- profile right sidebar end -->

    <div class="right-sidebar-btn d-lg-block d-none">
        <button class="header-btn theme-settings-btn"><i class="fa-light fa-gear"></i></button>
    </div>

    <!-- right sidebar start -->
    <div class="right-sidebar">
        <button class="right-bar-close"><i class="fa-light fa-angle-right"></i></button>
        <div class="sidebar-title">
            <h3>Layout Settings</h3>
        </div>
        <div class="sidebar-body scrollable">
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Nav Position <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row">
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="verticalMenu">
                            <div class="pb-2 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="border border-primary mb-1">
                                    <div class="px-2 pt-1 bg-nav mb-1"></div>
                                    <div class="px-2 pt-1 bg-nav mb-1"></div>
                                </div>
                                <div class="border border-primary">
                                    <div class="px-2 pt-1 bg-nav mb-1"></div>
                                    <div class="px-2 pt-1 bg-nav mb-1"></div>
                                </div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Vertical</span>
                        </div>
                    </div>
                    <div class="settings-col d-lg-block d-none">
                        <div class="dashboard-icon d-flex h-100 gap-1 border rounded" id="horizontalMenu">
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="p-1 bg-menu border-bottom">
                                        <div class="rounded-circle p-1 bg-nav w-max-content"></div>
                                    </div>
                                    <div class="p-1 bg-menu d-flex gap-1 mb-1">
                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>
                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>
                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>
                                        <div class="w-max-content px-2 pt-1 rounded bg-nav"></div>
                                    </div>
                                </div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Horizontal</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="twoColumnMenu">
                            <div class="p-1 bg-menu"></div>
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Two column</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="flushMenu">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Flush</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Theme Direction <span><i
                            class="fa-light fa-angle-up"></i></span></span>
                <div>
                    <div class="btn-group d-flex">
                        <button class="btn btn-primary active w-50" id="dirLtr">LTR</button>
                        <button class="btn btn-primary w-50" id="dirRtl">RTL</button>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Primary Color <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row-2">
                    <button class="color-palette color-palette-1 active" data-color="blue-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-2" data-color="orange-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-3" data-color="pink-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-4" data-color="eagle_green-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-5" data-color="purple-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-6" data-color="gold-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-7" data-color="green-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-8" data-color="deep_pink-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-9" data-color="tea_green-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="color-palette color-palette-10" data-color="yellow_green-color">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Theme Color <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row">
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex bg-blue-theme gap-1 border rounded active" id="blueTheme">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Blue Theme</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded bg-body-secondary light-theme-btn"
                            id="lightTheme">
                            <div class="pb-4 px-1 pt-1 bg-dark-subtle">
                                <div class="px-2 py-1 rounded-pill bg-primary mb-2"></div>
                                <div class="px-2 pt-1 bg-primary mb-1"></div>
                                <div class="px-2 pt-1 bg-primary mb-1"></div>
                                <div class="px-2 pt-1 bg-primary mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-dark-subtle"></div>
                                <div class="px-2 py-1 bg-dark-subtle"></div>
                            </div>
                            <span class="part-txt">Light Theme</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded bg-dark" id="darkTheme">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Dark Theme</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group" id="navBarSizeGroup">
                <span class="sidebar-subtitle">Navbar Size <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row">
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="sidebarDefault">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Default</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="sidebarSmall">
                            <div class="pb-4 pt-1 bg-menu">
                                <div class="p-1 rounded-pill bg-nav mb-2"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Small icon</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="sidebarHover">
                            <div class="pb-4 pt-1 bg-menu">
                                <div class="p-1 rounded-pill bg-nav mb-2"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                                <div class="ps-1 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Expand on hover</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Sidebar Background <span><i
                            class="fa-light fa-angle-up"></i></span></span>
                <div>
                    <div class="sidebar-bg-btn-box">
                        <button id="noBackground">
                            <span><i class="fa-light fa-xmark"></i></span>
                        </button>
                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-1.jpg"></button>
                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-2.jpg"></button>
                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-3.jpg"></button>
                        <button class="sidebar-bg-btn" data-img="assets/images/nav-bg-4.jpg"></button>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Main Background <span><i
                            class="fa-light fa-angle-up"></i></span></span>
                <div>
                    <div class="main-content-bg-btn-box">
                        <button id="noBackground2">
                            <span><i class="fa-light fa-xmark"></i></span>
                        </button>
                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-1.jpg"></button>
                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-2.jpg"></button>
                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-3.jpg"></button>
                        <button class="main-content-bg-btn" data-img="assets/images/main-bg-4.jpg"></button>
                    </div>
                </div>
            </div>
            <div class="right-sidebar-group">
                <span class="sidebar-subtitle">Main preloader <span><i class="fa-light fa-angle-up"></i></span></span>
                <div class="settings-row">
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded" id="enableLoader">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <div class="preloader-small">
                                <div class="loader">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <span class="part-txt">Enable</span>
                        </div>
                    </div>
                    <div class="settings-col">
                        <div class="dashboard-icon d-flex gap-1 border rounded active" id="disableLoader">
                            <div class="pb-4 px-1 pt-1 bg-menu">
                                <div class="px-2 py-1 rounded-pill bg-nav mb-2"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                                <div class="px-2 pt-1 bg-nav mb-1"></div>
                            </div>
                            <div class="w-100 d-flex flex-column justify-content-between">
                                <div class="px-2 py-1 bg-menu"></div>
                                <div class="px-2 py-1 bg-menu"></div>
                            </div>
                            <span class="part-txt">Disable</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- right sidebar end -->

    <!-- main sidebar start -->
    <div class="main-sidebar">
        <div class="main-menu">
            <ul class="sidebar-menu scrollable">
                <li class="sidebar-item open">
                    <a href="index.html" role="button" class="sidebar-link-group-title remove-icon">
                        <span class="nav-icon">
                            <i class="fa-light fa-house"></i>
                        </span>
                        <span class="sidebar-txt">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="charts.html" class="sidebar-link-group-title remove-icon">
                        <span class="nav-icon">
                            <i class="fa-light fa-chart-simple"></i>
                        </span>
                        <span class="sidebar-txt">Chart</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="all-customer.html" role="button" class="sidebar-link-group-title remove-icon">
                        <span class="nav-icon">
                            <i class="fa-light fa-user"></i>
                        </span>
                        <span class="sidebar-txt">Customer</span>
                    </a>
                </li>


                <li class="sidebar-item">
                    <a role="button" class="sidebar-link-group-title has-sub">
                        <span class="nav-icon">
                            <i class="fa-light fa-memo-pad"></i>
                        </span>
                        <span class="sidebar-txt">Pages</span>
                    </a>
                    <ul class="sidebar-link-group">

                        <li class="sidebar-dropdown-item">
                            <a href="login-2.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span>
                                <span class="sidebar-txt">Login</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="registration-2.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span>
                                <span class="sidebar-txt">Registration</span>
                            </a>
                        </li>

                        <li class="sidebar-dropdown-item">
                            <a href="reset-password.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span>
                                <span class="sidebar-txt">Reset Password</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="update-password.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span>
                                <span class="sidebar-txt">Update Password</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="login-status.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-memo-pad"></i></span>
                                <span class="sidebar-txt">Login Status</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a role="button" class="sidebar-link-group-title has-sub">
                        <span class="nav-icon">
                            <i class="fa-light fa-cart-shopping-fast"></i>
                        </span>
                        <span class="sidebar-txt">Products</span>
                    </a>
                    <ul class="sidebar-link-group">

                        <li class="sidebar-dropdown-item">
                            <a href="all-product.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-cart-shopping-fast"></i></span>
                                <span class="sidebar-txt">All Products</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="add-product.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-square-plus"></i></span>
                                <span class="sidebar-txt">Add Product</span>
                            </a>
                        </li>

                        <li class="sidebar-dropdown-item">
                            <a href="category.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-cart-shopping-fast"></i></span>
                                <span class="sidebar-txt">Category</span>
                            </a>
                        </li>
                        <li class="sidebar-dropdown-item">
                            <a href="order.html" class="sidebar-link">
                                <span class="nav-icon"><i class="fa-light fa-cart-shopping-fast"></i></span>
                                <span class="sidebar-txt">Order</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="chat.html" class="sidebar-link-group-title remove-icon">
                        <span class="nav-icon"><i class="fa-light fa-messages"></i></span>
                        <span class="sidebar-txt">Chat</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="email.html" class="sidebar-link-group-title remove-icon">
                        <span class="nav-icon"><i class="fa-light fa-envelope"></i></span>
                        <span class="sidebar-txt">Email</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="invoices.html" class="sidebar-link-group-title remove-icon">
                        <span class="nav-icon"><i class="fa-light fa-file-invoice"></i></span>
                        <span class="sidebar-txt">Invoice</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="calendar.html" class="sidebar-link-group-title remove-icon">
                        <span class="nav-icon"><i class="fa-light fa-calendar"></i></span>
                        <span class="sidebar-txt">Calender</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a role="button" class="sidebar-link-group-title has-sub">
                        <span class="nav-icon"><i class="fa-light fa-user"></i></span>
                        <span class="sidebar-txt">Users</span>
                    </a>
                    <ul class="sidebar-link-group">

                        <li class="sidebar-dropdown-item">
                            <a href="view-profile.html" class="sidebar-link">
                                <span class="nav-icon">
                                    <i class="fa-light fa-file-invoice"></i>
                                </span>
                                <span class="sidebar-txt">View Profile</span>
                            </a>
                        </li>

                        <li class="sidebar-dropdown-item">
                            <a href="edit-profile.html" class="sidebar-link">
                                <span class="nav-icon">
                                    <i class="fa-light fa-file-invoice"></i>
                                </span>
                                <span class="sidebar-txt">Edit Profile</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- main sidebar end -->

    <!-- main content start -->
    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>eCommerce Dashboard</h2>
            <div class="input-group dashboard-filter">
                <input type="text" class="form-control" name="basic" id="dashboardFilter" readonly>
                <label for="dashboardFilter" class="input-group-text"><i
                        class="fa-light fa-calendar-days"></i></label>
            </div>
        </div>
        <div class="row mb-25">
            <div class="col-lg-3 col-6 col-xs-12">
                <div class="dashboard-top-box rounded-bottom panel-bg">
                    <div class="left">
                        <h3>$34,152</h3>
                        <p>Shipping fees are not</p>
                        <a href="#">View net earnings</a>
                    </div>
                    <div class="right">
                        <span class="text-primary">+16.24%</span>
                        <div class="part-icon rounded">
                            <span><i class="fa-light fa-dollar-sign"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-xs-12">
                <div class="dashboard-top-box rounded-bottom panel-bg">
                    <div class="left">
                        <h3>36,894</h3>
                        <p>Orders</p>
                        <a href="#">Excluding orders in transit</a>
                    </div>
                    <div class="right">
                        <span class="text-primary">+16.24%</span>
                        <div class="part-icon rounded">
                            <span><i class="fa-light fa-bag-shopping"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-xs-12">
                <div class="dashboard-top-box rounded-bottom panel-bg">
                    <div class="left">
                        <h3>$34,152</h3>
                        <p>Customers</p>
                        <a href="#">See details</a>
                    </div>
                    <div class="right">
                        <span class="text-primary">+16.24%</span>
                        <div class="part-icon rounded">
                            <span><i class="fa-light fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-6 col-xs-12">
                <div class="dashboard-top-box rounded-bottom panel-bg">
                    <div class="left">
                        <h3>$724,152</h3>
                        <p>My Balance</p>
                        <a href="#">Withdraw</a>
                    </div>
                    <div class="right">
                        <span class="text-primary">+16.24%</span>
                        <div class="part-icon rounded">
                            <span><i class="fa-light fa-credit-card"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-8">
                <div class="panel chart-panel-1">
                    <div class="panel-header">
                        <h5>Sales Analytics</h5>
                        <div class="btn-box">
                            <button class="btn btn-sm btn-outline-primary">Week</button>
                            <button class="btn btn-sm btn-outline-primary">Month</button>
                            <button class="btn btn-sm btn-outline-primary">Year</button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="saleAnalytics" class="chart-dark"></div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Social Media Visitor</h5>
                        <div class="btn-box d-sm-block d-none">
                            <button class="btn btn-sm btn-outline-primary">Week</button>
                            <button class="btn btn-sm btn-outline-primary">Month</button>
                            <button class="btn btn-sm btn-outline-primary">Year</button>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-borderless visitor-table">
                            <thead>
                                <tr>
                                    <th>Sources</th>
                                    <th>Visitor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="text-fb"><i class="fa-brands fa-facebook-f"></i></span> Facebook
                                    </td>
                                    <td>153,100</td>
                                </tr>
                                <tr>
                                    <td><span class="text-behance"><i class="fa-brands fa-behance"></i></span> Behance
                                    </td>
                                    <td>234,200</td>
                                </tr>
                                <tr>
                                    <td><span class="text-comb"><i class="fa-brands fa-y-combinator"></i></span>
                                        Combinator</td>
                                    <td>326,012</td>
                                </tr>
                                <tr>
                                    <td><span class="text-insta"><i class="fa-brands fa-instagram"></i></span>
                                        Instagram
                                    </td>
                                    <td>124,420</td>
                                </tr>
                                <tr>
                                    <td><span class="text-dribble"><i class="fa-brands fa-dribbble"></i></span>
                                        Dribble
                                    </td>
                                    <td>554,220</td>
                                </tr>
                                <tr>
                                    <td><span class="text-pinterest"><i class="fa-brands fa-pinterest-p"></i></span>
                                        Pinterest</td>
                                    <td>134,800</td>
                                </tr>
                                <tr>
                                    <td><span class="text-linkedin"><i class="fa-brands fa-linkedin-in"></i></span>
                                        Linkedin</td>
                                    <td>254,812</td>
                                </tr>
                                <tr>
                                    <td><span class="text-twitter"><i class="fa-brands fa-twitter"></i></span> Twitter
                                    </td>
                                    <td>124,250</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-md-6">
                <div class="panel">
                    <div class="panel-header">
                        <h5>New Customers</h5>
                        <button class="btn btn-sm btn-icon btn-outline-primary"><i
                                class="fa-regular fa-ellipsis-vertical"></i></button>
                    </div>
                    <div class="panel-body">
                        <table class="table table-borderless new-customer-table">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="new-customer">
                                            <div class="part-img">
                                                <img src="assets/images/avatar.png" alt="Image">
                                            </div>
                                            <div class="part-txt">
                                                <p class="customer-name">Iftikar Ammed</p>
                                                <span>@iftikarahmed</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2 Orders</td>
                                    <td>$179</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="new-customer">
                                            <div class="part-img">
                                                <img src="assets/images/avatar-2.png" alt="Image">
                                            </div>
                                            <div class="part-txt">
                                                <p class="customer-name">Sadab Khan</p>
                                                <span>@sadabkhan</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2 Orders</td>
                                    <td>$179</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="new-customer">
                                            <div class="part-img">
                                                <img src="assets/images/avatar-3.png" alt="Image">
                                            </div>
                                            <div class="part-txt">
                                                <p class="customer-name">Hoyder Ali</p>
                                                <span>@hoyderali</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2 Orders</td>
                                    <td>$179</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="new-customer">
                                            <div class="part-img">
                                                <img src="assets/images/avatar-4.png" alt="Image">
                                            </div>
                                            <div class="part-txt">
                                                <p class="customer-name">Hardik Ali</p>
                                                <span>@hardikali</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2 Orders</td>
                                    <td>$179</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="new-customer">
                                            <div class="part-img">
                                                <img src="assets/images/avatar-5.png" alt="Image">
                                            </div>
                                            <div class="part-txt">
                                                <p class="customer-name">Alaysa Haly</p>
                                                <span>@alaysahaly</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2 Orders</td>
                                    <td>$179</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="new-customer">
                                            <div class="part-img">
                                                <img src="assets/images/avatar-6.png" alt="Image">
                                            </div>
                                            <div class="part-txt">
                                                <p class="customer-name">Natalush Khan</p>
                                                <span>@natalushkhan</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>2 Orders</td>
                                    <td>$179</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Recent Orders</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Order Date</th>
                                    <th>Payment Method</th>
                                    <th>Delivery Date</th>
                                    <th>Total Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>855212</td>
                                    <td>Soward</td>
                                    <td>28/10/22</td>
                                    <td>Cash</td>
                                    <td>02/11/22</td>
                                    <td>$05.22</td>
                                    <td><span class="badge bg-success">Paid</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855213</td>
                                    <td>Kian</td>
                                    <td>29/10/22</td>
                                    <td>Card</td>
                                    <td>03/11/22</td>
                                    <td>$17.00</td>
                                    <td><span class="badge bg-primary">Delivered</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855214</td>
                                    <td>Jennifer</td>
                                    <td>29/10/22</td>
                                    <td>Card</td>
                                    <td>03/11/22</td>
                                    <td>$15.22</td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855215</td>
                                    <td>Benjamin</td>
                                    <td>30/10/22</td>
                                    <td>Cash</td>
                                    <td>03/11/22</td>
                                    <td>$12.15</td>
                                    <td><span class="badge bg-secondary">Unpaid</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855216</td>
                                    <td>Anna</td>
                                    <td>31/10/22</td>
                                    <td>Cheque</td>
                                    <td>04/11/22</td>
                                    <td>$05.35</td>
                                    <td><span class="badge bg-danger">Canceled</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855217</td>
                                    <td>Bradley</td>
                                    <td>01/11/22</td>
                                    <td>Cash</td>
                                    <td>05/11/22</td>
                                    <td>$25.28</td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>855218</td>
                                    <td>Parkinson</td>
                                    <td>03/11/22</td>
                                    <td>Cheque</td>
                                    <td>06/11/22</td>
                                    <td>$32.32</td>
                                    <td><span class="badge bg-info">Pending</span></td>
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright©
                <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved By <span class="text-primary">Digiboard</span>
            </p>
        </div>
        <!-- footer end -->
    </div>
    <!-- main content end -->

    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/apexcharts.js"></script>
    <script src="assets/vendor/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/js/moment.min.js"></script>
    <script src="assets/vendor/js/daterangepicker.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- for demo purpose -->
    <script>
        var rtlReady = $('html').attr('dir', 'ltr');
        if (rtlReady !== undefined) {
            localStorage.setItem('layoutDirection', 'ltr');
        }
    </script>
    <!-- for demo purpose -->
</body>

</html>
