<?php //defined('__ROOT__') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/main.css' ?>"/>
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/icons/icomoon/styles.css' ?>"/>
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/bootstrap.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/bootstrap_limitless.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/layout.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/components.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/colors.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/persian-datepicker.min.css' ?>"/>
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/dataTables.bootstrap4.min.css' ?>"/>
    <!-- /global stylesheets -->
</head>
<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="global_assets/images/logo_light.png" alt="">
            <img src="<?php echo __ROOT__ . '/public/images/logo_light.png' ?>" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-git-compare"></i>
                    <span class="d-md-none ml-2">Git updates</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">9</span>
                </a>

                <div class="dropdown-menu dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Git updates</span>
                        <a href="#" class="text-default"><i class="icon-sync"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-git-commit"></i></a>
                                </div>

                                <div class="media-body">
                                    Add full font overrides for popovers and tooltips
                                    <div class="text-muted font-size-sm">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i class="icon-git-branch"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch
                                    <div class="text-muted font-size-sm">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-git-merge"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Eugene Kopyov</a> merged <span class="font-weight-semibold">Master</span> and <span class="font-weight-semibold">Dev</span> branches
                                    <div class="text-muted font-size-sm">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Have Carousel ignore keyboard events
                                    <div class="text-muted font-size-sm">Dec 12, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All updates</a>
                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i class="icon-bug2"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <span class="navbar-text ml-md-3 mr-md-auto">
				<span class="badge bg-success">Online</span>
			</span>

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-people"></i>
                    <span class="d-md-none ml-2">Users</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-300">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Users online</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <img src="<?php echo __ROOT__ . '/public/images/placeholders/placeholder.jpg' ?>" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Will Brason</a>
                                    <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
                                    <span class="d-block text-muted font-size-sm">Project manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
                                    <span class="d-block text-muted font-size-sm">Business developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-warning-300"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                    <span class="d-block text-muted font-size-sm">UX expert</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="text-grey mr-auto">All users</a>
                        <a href="#" class="text-grey"><i class="icon-gear"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
                    <i class="icon-bubbles4"></i>
                    <span class="d-md-none ml-2">Messages</span>
                    <span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-weight-semibold">Messages</span>
                        <a href="#" class="text-default"><i class="icon-compose"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">James Alexander</span>
                                            <span class="text-muted float-right font-size-sm">04:58</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">who knows, maybe that would be the best thing for me...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3 position-relative">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">Margo Baker</span>
                                            <span class="text-muted float-right font-size-sm">12:16</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">That was something he was unable to do because...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">Jeremy Victorino</span>
                                            <span class="text-muted float-right font-size-sm">22:48</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">But that would be extremely strained and suspicious...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">Beatrix Diaz</span>
                                            <span class="text-muted float-right font-size-sm">Tue</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">What a strenuous career it is that I've chosen...</span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="media-title">
                                        <a href="#">
                                            <span class="font-weight-semibold">Richard Vango</span>
                                            <span class="text-muted float-right font-size-sm">Mon</span>
                                        </a>
                                    </div>

                                    <span class="text-muted">Other travelling salesmen live a life of luxury...</span>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer justify-content-center p-0">
                        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i class="icon-menu7 d-block top-0"></i></a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" alt="">
                    <span>Victoria</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <?php echo "<a class='dropdown-item' href='".__ROOT__."login/?logout=yes'><i class='icon-exit2'></i>Logout</a>"; ?>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">
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
                            <li class="nav-item"><a href="<?php echo __ROOT__.'users';?>" class="nav-link">کاربران</a></li>
                            <li class="nav-item"><a href="<?php echo __ROOT__.'menus';?>" class="nav-link">منوها</a></li>
                            <li class="nav-item"><a href="<?php echo __ROOT__.'restriction';?>" class="nav-link">محدودیت ها</a></li>
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