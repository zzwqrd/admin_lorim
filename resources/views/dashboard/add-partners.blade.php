<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>app_lorim</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link id="gull-theme" rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
    <link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/styles/css/select2.min.css">


    <link id="gull-theme" rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
    <link rel="stylesheet" href="assets/styles/vendor/perfect-scrollbar.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/vendor/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/styles/vendor/datatables.min.css">
    <link rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/vendor/quill.bubble.css">
    <link rel="stylesheet" href="assets/styles/vendor/quill.snow.css">

    <style>
        div.dataTables_wrapper div.dataTables_filter {
            text-align: left !important;
        }
    </style>
</head>

<body class="text-left">
    <!-- Pre Loader Strat  -->
    <div class='loadscreen' id="preloader">

        <div class="loader spinner-bubble spinner-bubble-primary">



        </div>
    </div>
    <!-- Pre Loader end  -->
    <div class="app-admin-wrap layout-sidebar-large clearfix">
        <div class="main-header">
            <div class="logo">
                <img src="./assets/images/logo.png" alt="">
            </div>

            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="d-flex align-items-center">

                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>

            <div style="margin: auto"></div>

            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Grid menu Dropdown -->
                <div class="dropdown">
                    <i class="i-Safe-Box text-muted header-icon" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" role="button" aria-expanded="false"></i>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <div class="menu-icon-grid">
                            <a href="#"><i class="i-Shop-4"></i> Home</a>
                            <a href="#"><i class="i-Library"></i> UI Kits</a>
                            <a href="#"><i class="i-Drop"></i> Apps</a>
                            <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                            <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                            <a href="#"><i class="i-Ambulance"></i> Support</a>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton -->
                <div class="dropdown">
                    <div class="badge-top-container" id="dropdownNotification" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div>
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu rtl-ps-none dropdown-menu-right notification-dropdown"
                        aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New message</span>
                                    <span class="badge badge-pill badge-primary ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 sec ago</span>
                                </p>
                                <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Receipt-3 text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New order received</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">2 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Empty-Box text-danger mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Product out of stock</span>
                                    <span class="badge badge-pill badge-danger ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                            </div>
                        </div>
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                <i class="i-Data-Power text-success mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>Server Up!</span>
                                    <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">14 hours ago</span>
                                </p>
                                <p class="text-small text-muted m-0">Server rebooted successfully</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->

                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="./assets/images/faces/1.jpg" id="userDropdown" alt=""
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                Timothy Carlson
                                <i class="i-Lock-User mr-1"></i>
                            </div>
                            <a class="dropdown-item">
                                <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                تعديل كلمة المرور
                            </a>
                            <a class="dropdown-item" href="login.html">
                                <i class="nav-icon i-Lock-User font-weight-bold"></i>
                                تسجيل خروج
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- header top menu end -->

        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item">
                        <a class="nav-item-hold" href="home.html">
                            <i class="nav-icon i-Bar-Chart"></i>
                            <span class="nav-text">الرئيسية</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="uikits">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Library"></i>
                            <span class="nav-text">الادارة</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="extrakits">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Add-User"></i>
                            <span class="nav-text">المستخدمين</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="apps">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Computer-Secure"></i>
                            <span class="nav-text">الاقسام</span>
                        </a>
                        <div class="triangle"></div>
                    </li>

                    <!-- <li class="nav-item" data-item="widgets">
                                    <a class="nav-item-hold" href="#">
                                          <i class="nav-icon i-Computer-Secure"></i>
                                          <span class="nav-text">الاقسام الفرعية</span>
                                    </a>
                                    <div class="triangle"></div>
                              </li> -->

                    <li class="nav-item " data-item="charts">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-File-Clipboard-File--Text"></i>
                            <span class="nav-text">الشركات</span>
                        </a>
                        <div class="triangle"></div>
                    </li>


                    <!-- <li class="nav-item" data-item="forms">
                                    <a class="nav-item-hold" href="#">
                                          <i class="nav-icon i-File-Clipboard-File--Text"></i>
                                          <span class="nav-text">الخدمات</span>
                                    </a>
                                    <div class="triangle"></div>
                              </li> -->
                    <li class="nav-item">
                        <a class="nav-item-hold" href="datatables.html">
                            <i class="nav-icon i-File-Horizontal-Text"></i>
                            <span class="nav-text">الطلبات</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="sessions">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Administrator"></i>
                            <span class="nav-text">العروض</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item active" data-item="others">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Double-Tap"></i>
                            <span class="nav-text">تواصل معنا</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="#" target="_blank">
                            <i class="nav-icon i-Safe-Box1"></i>
                            <span class="nav-text">عن تطبيق</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="#" target="_blank">
                            <i class="nav-icon i-Gear"></i>
                            <span class="nav-text">أعدادات عامة</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>

            <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">

                <!-- <ul class="childNav" data-parent="forms">
                              <li class="nav-item">
                                    <a href="form.basic.html">
                                          <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                                          <span class="item-name">Basic Elements</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="form.layouts.html">
                                          <i class="nav-icon i-Split-Vertical"></i>
                                          <span class="item-name">Form Layouts</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="form.input.group.html">
                                          <i class="nav-icon i-Receipt-4"></i>
                                          <span class="item-name">Input Groups</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="form.validation.html">
                                          <i class="nav-icon i-Close-Window"></i>
                                          <span class="item-name">Form Validation</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="smart.wizard.html">
                                          <i class="nav-icon i-Width-Window"></i>
                                          <span class="item-name">Smart Wizard</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="tag.input.html">
                                          <i class="nav-icon i-Tag-2"></i>
                                          <span class="item-name">Tag Input</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="editor.html">
                                          <i class="nav-icon i-Pen-2"></i>
                                          <span class="item-name">Rich Editor</span>
                                    </a>
                              </li>
                        </ul> -->
                <!-- start -->
                <ul class="childNav" data-parent="apps">
                    <li class="nav-item dropdown-sidemenu">
                        <a href="#">
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">قائمة الاقسام</span>
                            <i class="dd-arrow i-Arrow-Down"></i>
                        </a>
                        <ul class="submenu">
                            <a href="#">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">الاقسام الرئيسية</span>
                            </a>
                            <li class="nav-item">
                                <a href="#">
                                    <i class="nav-icon i-Add"></i>
                                    <span class="item-name">اضافة قسم رئيسي</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown-sidemenu">
                        <a href="#">
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">الاقسام الفرعية</span>
                            <i class="dd-arrow i-Arrow-Down"></i>
                        </a>
                        <ul class="submenu">
                            <a href="#">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">الاقسام الفرعية</span>
                            </a>
                            <li class="nav-item">
                                <a href="#">
                                    <i class="nav-icon i-Add"></i>
                                    <span class="item-name">اضافة قسم فرعي</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- end -->
                <!-- <ul class="childNav" data-parent="widgets">
                              <li class="nav-item">
                                    <a class="" href="widget-card.html">
                                          <i class="nav-icon i-Receipt-4"></i>
                                          <span class="item-name">widget card</span>
                                    </a>
                              </li>
                              <li class="nav-item">


                                    <a class="" href="widgets-statistics.html">
                                          <i class="nav-icon i-Receipt-4"></i>
                                          <span class="item-name">widget statistics</span>
                                    </a>
                              </li>

                              <li class="nav-item">


                                    <a class="" href="widget-list.html">
                                          <i class="nav-icon i-Receipt-4"></i>
                                          <span class="item-name">Widget List <span
                                                      class="ml-2 badge badge-pill badge-danger">
                                                      New</span></span>
                                    </a>
                              </li>

                              <li class="nav-item">


                                    <a class="" href="widget-app.html">
                                          <i class="nav-icon i-Receipt-4"></i>
                                          <span class="item-name">Widget App <span
                                                      class="ml-2 badge badge-pill badge-danger">
                                                      New</span>
                                          </span>
                                    </a>
                              </li>
                              <li class="nav-item">


                                    <a class="" href="weather-card.html">
                                          <i class="nav-icon i-Receipt-4"></i>
                                          <span class="item-name"> Weather App <span
                                                      class="ml-2 badge badge-pill badge-danger">
                                                      New</span>
                                          </span>
                                    </a>
                              </li>

                        </ul> -->


                <!-- chartjs -->
                <ul class="childNav" data-parent="charts">

                    <li class="nav-item dropdown-sidemenu">
                        <a href="#">
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">قسم الشركات</span>
                            <i class="dd-arrow i-Arrow-Down"></i>
                        </a>
                        <ul class="submenu">
                            <a href="#">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">الشركات</span>
                            </a>
                            <li class="nav-item">
                                <a href="#">
                                    <i class="nav-icon i-Add"></i>
                                    <span class="item-name">اضافة شركة</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown-sidemenu">
                        <a href="#">
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">عن الشركات</span>
                            <i class="dd-arrow i-Arrow-Down"></i>
                        </a>
                        <ul class="submenu">
                            <a href="#">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">عن الشركات</span>
                            </a>
                            <li class="nav-item">
                                <a href="#">
                                    <i class="nav-icon i-Add"></i>
                                    <span class="item-name">اضافة مقال</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown-sidemenu">
                        <a href="#">
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">خدمات الشركات</span>
                            <i class="dd-arrow i-Arrow-Down"></i>
                        </a>
                        <ul class="submenu">
                            <a href="#">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">خدمات الشركات</span>
                            </a>
                            <li class="nav-item">
                                <a href="#">
                                    <i class="nav-icon i-Add"></i>
                                    <span class="item-name">اضافة خدمة</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown-sidemenu">
                        <a href="#">
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">خدمات الشركات الفرعية</span>
                            <i class="dd-arrow i-Arrow-Down"></i>
                        </a>
                        <ul class="submenu">
                            <a href="#">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">خدمات الشركات الفرعية</span>
                            </a>
                            <li class="nav-item">
                                <a href="#">
                                    <i class="nav-icon i-Add"></i>
                                    <span class="item-name">اضافة خدمة فرعية</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">


                        <a class="" href="#">
                            <i class="nav-icon i-Flag-2"></i>
                            <span class="item-name">التعليقات</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown-sidemenu">
                                    <a class="" href="">
                                          <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                                          <span class="item-name">Apex Charts</span>
                                          <i class="dd-arrow i-Arrow-Down"></i>
                                    </a>
                                    <ul class="submenu">
                                          <li><a class="" href="charts.apexAreaCharts.html">Area Charts</a></li>
                                          <li><a class="" href="charts.apexBarCharts.html">Bar Charts</a></li>
                                          <li><a class="" href="charts.apexBubbleCharts.html">Bubble Charts</a></li>
                                          <li><a class="" href="charts.apexColumnCharts.html">Column Charts</a></li>
                                          <li><a class="" href="charts.apexCandleStickCharts.html">CandleStick
                                                      Charts</a></li>
                                          <li><a class="" href="charts.apexLineCharts.html">Line Charts</a></li>
                                          <li><a class="" href="charts.apexMixCharts.html">Mix Charts</a></li>
                                          <li><a class="" href="charts.apexPieDonutCharts.html">PieDonut Charts</a></li>
                                          <li><a class="" href="charts.apexRadarCharts.html">Radar Charts</a></li>
                                          <li><a class="" href="charts.apexRadialBarCharts.html">RadialBar Charts</a>
                                          </li>
                                          <li><a class="" href="charts.apexScatterCharts.html">Scatter Charts</a></li>
                                          <li><a class="" href="charts.apexSparklineCharts.html">Sparkline Charts</a>
                                          </li>

                                    </ul>
                              </li> -->





                </ul>


                <ul class="childNav" data-parent="extrakits">
                    <li class="nav-item">
                        <a href="show-users-list.html">
                            <!-- <i class="nav-icon i-Add"></i> -->
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">قائمة المستخدمين</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="add-user.html">
                            <!-- <i class="nav-icon i-Add"></i> -->
                            <i class="nav-icon i-Add text-primary"></i>
                            <span class="item-name">أضافة مستخدم</span>
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                                    <a href="ladda.button.html">
                                          <i class="nav-icon i-Loading-2"></i>
                                          <span class="item-name">Ladda Buttons</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="toastr.html">
                                          <i class="nav-icon i-Bell"></i>
                                          <span class="item-name">Toastr</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="sweet.alerts.html">
                                          <i class="nav-icon i-Approved-Window"></i>
                                          <span class="item-name">Sweet Alerts</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="tour.html">
                                          <i class="nav-icon i-Plane"></i>
                                          <span class="item-name">User Tour</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="upload.html">
                                          <i class="nav-icon i-Data-Upload"></i>
                                          <span class="item-name">Upload</span>
                                    </a>
                              </li> -->
                </ul>
                <ul class="childNav" data-parent="uikits">
                    <li class="nav-item">
                        <a href="show-admin-list.html">
                            <!-- <i class="nav-icon i-Add"></i> -->
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">قائمة المديرين</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#">
                            <!-- <i class="nav-icon i-Add"></i> -->
                            <i class="nav-icon i-Add text-primary"></i>
                            <span class="item-name">أضافة مدير</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown-sidemenu">
                        <a href="#">
                            <i class="nav-icon i-Add-User"></i>
                            <span class="item-name">الشركاء</span>
                            <i class="dd-arrow i-Arrow-Down"></i>
                        </a>
                        <ul class="submenu">
                            <li class="nav-item">
                                <a href="show-partners-list.html">
                                    <!-- <i class="nav-icon i-Add"></i> -->
                                    <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                    <span class="item-name">قائمة الشركاء</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="add-partners.html">
                                    <!-- <i class="nav-icon i-Add"></i> -->
                                    <i class="nav-icon i-Add text-primary"></i>
                                    <span class="item-name">أضافة شريك</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <!-- <li class="nav-item dropdown-sidemenu">
                                    <a href="badges.html">
                                          <i class="nav-icon i-Medal-2"></i>
                                          <span class="item-name">Badges</span>
                                          <i class="dd-arrow i-Arrow-Down"></i>
                                    </a>
                                    <ul class="submenu">
                                          <li><a href="">Sub menu item 1</a></li>
                                          <li><a href="">Sub menu item 1</a></li>
                                    </ul>
                              </li>
                              <li class="nav-item">
                                    <a href="buttons.html">
                                          <i class="nav-icon i-Cursor-Click"></i>
                                          <span class="item-name">Buttons</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="cards.html">
                                          <i class="nav-icon i-Line-Chart-2"></i>
                                          <span class="item-name">Cards</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="card.metrics.html">
                                          <i class="nav-icon i-ID-Card"></i>
                                          <span class="item-name">Card Metrics</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="carousel.html">
                                          <i class="nav-icon i-Video-Photographer"></i>
                                          <span class="item-name">Carousels</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="lists.html">
                                          <i class="nav-icon i-Belt-3"></i>
                                          <span class="item-name">Lists</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="pagination.html">
                                          <i class="nav-icon i-Arrow-Next"></i>
                                          <span class="item-name">Paginations</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="popover.html">
                                          <i class="nav-icon i-Speach-Bubble-2"></i>
                                          <span class="item-name">Popover</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="progressbar.html">
                                          <i class="nav-icon i-Loading"></i>
                                          <span class="item-name">Progressbar</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="tables.html">
                                          <i class="nav-icon i-File-Horizontal-Text"></i>
                                          <span class="item-name">Tables</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="tabs.html">
                                          <i class="nav-icon i-New-Tab"></i>
                                          <span class="item-name">Tabs</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="tooltip.html">
                                          <i class="nav-icon i-Speach-Bubble-8"></i>
                                          <span class="item-name">Tooltip</span>
                                    </a>
                              </li>

                              <li class="nav-item">
                                    <a href="modals.html">
                                          <i class="nav-icon i-Duplicate-Window"></i>
                                          <span class="item-name">Modals</span>
                                    </a>
                              </li>
                              <li class="nav-item">
                                    <a href="nouislider.html">
                                          <i class="nav-icon i-Width-Window"></i>
                                          <span class="item-name">Sliders</span>
                                    </a>
                              </li> -->
                </ul>
                <ul class="childNav" data-parent="sessions">
                    <li class="nav-item">
                        <a href="signin.html">
                            <i class="nav-icon i-Checked-User"></i>
                            <span class="item-name">Sign in</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.html">
                            <i class="nav-icon i-Add-User"></i>
                            <span class="item-name">Sign up</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="forgot.html">
                            <i class="nav-icon i-Find-User"></i>
                            <span class="item-name">Forgot</span>
                        </a>
                    </li>
                </ul>
                <ul class="childNav" data-parent="others">
                    <li class="nav-item">
                        <a href="not.found.html">
                            <i class="nav-icon i-Error-404-Window"></i>
                            <span class="item-name">Not Found</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="user.profile.html">
                            <i class="nav-icon i-Male"></i>
                            <span class="item-name">User Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="blank.html" class="open">
                            <i class="nav-icon i-File-Horizontal"></i>
                            <span class="item-name">Blank Page</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!--=============== Left side End ================-->


        <div class="main-content-wrap sidenav-open d-flex flex-column pt-5">


            <div class="breadcrumb">
                <a href="#">
                    <h1>الرئيسية</h1>
                </a>
                <ul>
                    <li>أضافة الشركاء</li>
                </ul>
            </div>
            <div class="separator-breadcrumb border-top"></div>

            <!-- end of row -->

            <div class="row mb-4">
                <div class="col-md-12 mb-4">
                    <div class="card text-left">
                        <div class="card-header">
                            <div class="card-title mb-3"> <strong class="text-primary">الاضافة</strong>
                            </div>
                        </div>

                        <div class="card-body">
                            <form id="change-pwd" action="show-partners-list.html" method="post">

                                <div class="row">
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="name">اسم الشركة</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="الإسم" autocomplete="off">

                                        <!-- <span class="text-danger" role="alert">
                                                                  <strong>الإسم مطلوب</strong>
                                                            </span> -->

                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="image">رقم وصورة السجل التجاري</label>
                                        <!-- <input type="file" class="form-control" name="image"
                                                                  id="image" placeholder="رقم وصورة السجل التجاري"
                                                                  autocomplete="off"> -->
                                        <input type="file" name="image" class="form-control" accept="image/*">

                                        <!-- <span class="text-danger" role="alert">
                                                                  <strong>البريد الإلكتروني مطلوب</strong>
                                                            </span> -->

                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="phone">رقم الجوال</label>
                                        <input type="phone" class="form-control" name="phone" id="phone"
                                            placeholder="رقم الجوال" autocomplete="off">

                                        <!-- <span class="text-danger" role="alert">
                                                                  <strong>الإسم مطلوب</strong>
                                                            </span> -->

                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="email">البريد الإلكتروني</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="البريد الإلكتروني" autocomplete="off">

                                        <!-- <span class="text-danger" role="alert">
                                                                  <strong>الإسم مطلوب</strong>
                                                            </span> -->

                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="role"> الصلاحيات</label>
                                        <select class="form-control attribute" name="role" id="role">
                                            <option selected disabled>اختر الدولة </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>

                                        <!-- <span class="text-danger" role="alert">
                                                                  <strong>{{ $errors->first('role') }} </strong>
                                                            </span> -->
                                    </div>
                                    <div class="col-md-6 form-group mb-3">

                                        <label for="role"> الخدمات</label>

                                        <select class="form-control  select2-select" name="roles[]" multiple required>
                                            <option value="1"> 1</option>
                                            <option value="2"> 2</option>
                                            <option value="3"> 3</option>
                                            <option value="4"> 4</option>

                                        </select>

                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="city">المدينة</label>
                                        <input type="text" class="form-control" name="city" id="city"
                                            placeholder="المدينة" autocomplete="off">

                                        <!-- <span class="text-danger" role="alert">
                                                                  <strong>الإسم مطلوب</strong>
                                                            </span> -->

                                    </div>

                                    <div class="col-md-6 form-group mb-3">
                                        <label for="adr">العنوان</label>
                                        <input type="number" class="form-control" name="adr" id="adr"
                                            placeholder="العنوان" autocomplete="off">



                                        <!-- <span class="text-danger" role="alert">
                                                                  <strong>الإسم مطلوب</strong>
                                                            </span> -->

                                    </div>


                                    <div class="col-md-6 form-group mb-3">
                                        <label for="date">تاريخ اليوم</label>
                                        <input type="date" class="form-control" name="date" id="date"
                                            placeholder="تاريخ اليوم" autocomplete="off">

                                        <!-- <span class="text-danger" role="alert">
                                                                  <strong>الإسم مطلوب</strong>
                                                            </span> -->

                                    </div>


                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-primary">حفظ</button>
                                </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
            <!-- end of col -->

        </div>
        <!-- end of row -->


    </div>

    </div>
    <!--=============== End app-admin-wrap ================-->

    <!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header o-hidden">
            <img src="./assets/images/logo.png" alt="" class="logo float-left">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>

        <input type="text" placeholder="Type here" class="search-input" autofocus>

        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>

        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="./assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div
                            class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="./assets/images/products/headphone-2.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div
                            class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="./assets/images/products/headphone-3.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div
                            class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="./assets/images/products/headphone-4.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div
                            class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-primary">New</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->

    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/perfect-scrollbar.min.js"></script>
    <script src="assets/js/vendor/echarts.min.js"></script>
    <script src="assets/js/select2-4.1.0.min.js"></script>

    <script src="assets/js/es5/echart.options.min.js"></script>
    <script src="assets/js/es5/dashboard.v1.script.min.js"></script>

    <script src="assets/js/es5/script.min.js"></script>
    <script src="assets/js/es5/sidebar.large.script.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        $("#form").validate({
            // Specify the validation rules
            rules: {
                name: {
                    required: true,
                    alpha: true
                },
                url: {
                    required: true,
                    url: true,
                },

            },
            // Specify the validation error messages
            messages: {
                name: {
                    required: 'يرجى إدخال اسم الموقع ',
                    alpha: 'يجب ان يتكون اسم الموقع من حروف فقط ',
                },
                url: {
                    required: 'يرجى إدخال رابط الموقع  ',
                    url: 'برجاء ادخال رابط صحيح',
                },
            },
            submitHandler: function(form) {
                form.submit();
            },
            highlight: function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass(
                    'glyphicon-remove');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass(
                    'glyphicon-ok');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else if (element.closest('.form-group').find('.cke').length) {
                    error.appendTo(element.closest('.form-group'));
                } else {
                    error.insertAfter(element);
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.select2-select').select2();
        });
    </script>
</body>

</html>
