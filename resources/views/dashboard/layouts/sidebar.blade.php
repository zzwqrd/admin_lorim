<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large clearfix">
        <div class="side-content-wrap">
            <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('/dashboard/') }}">
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
                    <li class="nav-item" data-item="ads">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Flag-2"></i>
                            <span class="nav-text"> الإعلانات </span>
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

                <!-- chartjs -->
                <ul class="childNav" data-parent="charts">

                    <li class="nav-item dropdown-sidemenu">
                        <a href="#">
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">قسم الشركات</span>
                            <i class="dd-arrow i-Arrow-Down"></i>
                        </a>
                        <ul class="submenu">
                            <a href="{{ url('dashboard/providers/index') }}">
                                <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                                <span class="item-name">الشركات</span>
                            </a>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/providers/create') }}">
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


                </ul>


                <ul class="childNav" data-parent="extrakits">
                    <li class="nav-item">
                        <a href="{{ url('dashboard/user/index') }}">
                            <!-- <i class="nav-icon i-Add"></i> -->
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">قائمة المستخدمين</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('dashboard/user/create') }}">
                            <!-- <i class="nav-icon i-Add"></i> -->
                            <i class="nav-icon i-Add text-primary"></i>
                            <span class="item-name">أضافة مستخدم</span>
                        </a>
                    </li>

                </ul>
                <ul class="childNav" data-parent="uikits">
                    <li class="nav-item">
                        <a href="{{ url('dashboard/admin/index') }}">
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
                </ul>
                <ul class="childNav" data-parent="ads">
                    <li class="nav-item">
                        <a href="{{ url('dashboard/ad/index') }}">
                            <i class="nav-icon i-Split-Horizontal-2-Window text-primary"></i>
                            <span class="item-name">قائمة الإعلانات </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('dashboard/ad/create') }}">
                            <i class="nav-icon i-Add text-primary"></i>
                            <span class="item-name">اضافة إعلان </span>
                        </a>
                    </li>
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

        // دي يا عبد لرحمن علشان تحد لو الي داخل حد غير الادمن الروتات الي تظهر ليه تقدر تحددها وتخليه يدخل بس علي الي
        انتا عاوزه ويشوفه
        @if (auth('admin')->user()->role == 1)
        @endif
