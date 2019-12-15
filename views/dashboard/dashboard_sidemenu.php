<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-right8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item">
                    <a href="<?php echo __ROOT__.'dashboard';?>" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
									داشبورد
								</span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>عنوان ها</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="عنوان ها">
                        <!--<li class="nav-item"><a href="index.html" class="nav-link active">Default layout</a></li>-->
                        <li class="nav-item"><a href="<?php echo __ROOT__.'province';?>" class="nav-link">استان</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'organization_level';?>" class="nav-link">سمت</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'city';?>" class="nav-link">شهر</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'tax';?>" class="nav-link">مالیات</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'type_subscribers';?>" class="nav-link">نوع مشتری</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-stack"></i> <span>تعاریف</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="تعاریف">
                        <li class="nav-item"><a href="<?php echo __ROOT__.'popsite';?>" class="nav-link">پاپ سایت</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'telecommunications_center';?>" class="nav-link">مرکز مخابراتی</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'terminal';?>" class="nav-link">ترمینال</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'pre_number';?>" class="nav-link">پیش شماره</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'host';?>" class="nav-link">میزبان</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'wireless_ap';?>" class="nav-link">Wireless-AP</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'wireless_station';?>" class="nav-link">Wireless-Staion</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'services';?>" class="nav-link">سرویس ها</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-people"></i> <span>نمایندگی ها</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="نمایندگی ها">
                        <li class="nav-item"><a href="<?php echo __ROOT__.'branch';?>" class="nav-link">نمایندگی</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'operator';?>" class="nav-link">پرسنل</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-users4"></i> <span>مشترکین</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="مشترکین">
                        <li class="nav-item"><a href="<?php echo __ROOT__.'real_subscribers';?>" class="nav-link">مشترکین حقیقی</a></li>
                        <li class="nav-item"><a href="<?php echo __ROOT__.'legal_subscribers';?>" class="nav-link">مشترکین حقوقی</a></li>
                    </ul>
                </li>
                <!-- /main -->
            </ul>
        </div>
        <!-- /main navigation -->
    </div>
    <!-- /sidebar content -->
</div>