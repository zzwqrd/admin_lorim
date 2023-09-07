<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large clearfix">
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
                            <a href="{{ url('dashboard/section/index') }}">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">الاقسام الرئيسية</span>
                            </a>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/section/create') }}">
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
                            <a href="{{ url('dashboard/sub_section/index') }}">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">الاقسام الفرعية</span>
                            </a>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/sub_section/create') }}">
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
