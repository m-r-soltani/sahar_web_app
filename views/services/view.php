<?php defined('__ROOT__') OR exit('No direct script access allowed'); ?>
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
                                    <a href="#"
                                       class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
                                                class="icon-git-pull-request"></i></a>
                                </div>

                                <div class="media-body">
                                    Drop the IE <a href="#">specific hacks</a> for temporal inputs
                                    <div class="text-muted font-size-sm">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                       class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i
                                                class="icon-git-commit"></i></a>
                                </div>

                                <div class="media-body">
                                    Add full font overrides for popovers and tooltips
                                    <div class="text-muted font-size-sm">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                       class="btn bg-transparent border-info text-info rounded-round border-2 btn-icon"><i
                                                class="icon-git-branch"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span
                                            class="font-weight-semibold">Design</span> branch
                                    <div class="text-muted font-size-sm">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                       class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i
                                                class="icon-git-merge"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Eugene Kopyov</a> merged <span
                                            class="font-weight-semibold">Master</span> and <span
                                            class="font-weight-semibold">Dev</span> branches
                                    <div class="text-muted font-size-sm">Dec 18, 18:36</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#"
                                       class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i
                                                class="icon-git-pull-request"></i></a>
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
                            <a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i
                                        class="icon-radio-unchecked"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Bug tracker"><i
                                        class="icon-bug2"></i></a>
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
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Jordana Ansley</a>
                                    <span class="d-block text-muted font-size-sm">Lead web developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Will Brason</a>
                                    <span class="d-block text-muted font-size-sm">Marketing manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span class="badge badge-mark border-danger"></span>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Hanna Walden</a>
                                    <span class="d-block text-muted font-size-sm">Project manager</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-success"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Dori Laperriere</a>
                                    <span class="d-block text-muted font-size-sm">Business developer</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-warning-300"></span></div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
                                </div>
                                <div class="media-body">
                                    <a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
                                    <span class="d-block text-muted font-size-sm">UX expert</span>
                                </div>
                                <div class="ml-3 align-self-center"><span
                                            class="badge badge-mark border-grey-400"></span></div>
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
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
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
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
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
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
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
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
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
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36"
                                         class="rounded-circle" alt="">
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
                        <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i
                                    class="icon-menu7 d-block top-0"></i></a>
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
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span
                                class="badge badge-pill bg-blue ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <?php require_once('dashboard_sidemenu.php'); ?>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Basic
                        Inputs</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="../../index.php" class="breadcrumb-item">Forms</a>
                        <span class="breadcrumb-item active">Basic inputs</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-body">
                    <legend class="text-uppercase font-size-sm font-weight-bold">سرویس ها</legend>
                    <ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 nav-justified">
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab1" class="nav-link active"
                                                              data-toggle="tab">ADSL</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab2" class="nav-link"
                                                              data-toggle="tab">Wireless</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab3" class="nav-link"
                                                              data-toggle="tab">TD-LTE/4G</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab4" class="nav-link"
                                                              data-toggle="tab">Voip</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab5" class="nav-link"
                                                              data-toggle="tab">Domain</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab6" class="nav-link"
                                                              data-toggle="tab">Host</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab7" class="nav-link"
                                                              data-toggle="tab">NGN</a></li>
                    </ul>
                    <div class="tab-content">
                        <!------------ADSL------------->
                        <div class="adsl_tab tab-pane fade show active" id="bottom-justified-divided-tab1">
                            <form action="#" method="POST">
                                <input type="hidden" id="id"  name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="adsl" class="form-control">

                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع خدمات</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="noe_khadamat" id="noe_khadamat">
                                                <option value="ADSL(Share)">ADSL(Share)</option>
                                                <option value="ADSL(Transport)">ADSL(Transport)</option>
                                                <option value="VDSL(Share)">VDSL(Share)</option>
                                                <option value="VDSL(Transport)">VDSL(Transport)</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش سرویس</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_service" id="namayeshe_service">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش در پروفایل</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_dar_profile" id="namayeshe_dar_profile">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">عنوان سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="onvane_service"
                                                   placeholder="مثال: " id="onvane_service">
                                        </div>
                                        <label class="col-form-label col-lg-2">قيمت</label>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" name="gheymat"
                                                   placeholder="به ریال" id="gheymat" required>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="zaname_estefade" id="zaname_estefade" placeholder="زمان به ماه مثال:6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفيف</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="takhfif" id="takhfif"
                                                   placeholder="به درصد مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_service_dahande" id="name_service_dahande">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">پورسانت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="porsant" id="porsant"
                                                   placeholder="مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_shoroe_namayesh" id="tarikhe_shoroe_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_payane_namayesh" id="tarikhe_payane_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">امتیاز جایزه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="emtiaze_jayeze" id="emtiaze_jayeze"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداقل امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaghale_emtiaz" id="hadeaghale_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaksare_emtiaz" id="hadeaksare_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ هر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="mablaghe_har_emtiaz" id="mablaghe_har_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه مشتری</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_grohe_moshtari" id="name_grohe_moshtari">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" id="name_groh" name="name_groh">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2">رنگ نمایش پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_namayeshe_profile" id="range_namayeshe_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">رنگ ویژه سازی پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_vizhesazie_profile" id="range_vizhesazie_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">وصل موقت
                                        </legend>
                                        <label class="col-form-label col-lg-2">ساعت وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="saat_vasle_movaghat" id="saat_vasle_movaghat"
                                                   placeholder="مثال : 2">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">روز وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="roze_vasle_movaghat" id="roze_vasle_movaghat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک وصل موقت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="terafike_vasle_movaghat" id="terafike_vasle_movaghat"
                                                   placeholder="(مگابایت) مثال: 1024">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">ترافیک
                                        </legend>
                                        <label class="col-form-label col-lg-2">دوره به ماه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به روز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به ساعت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_saat" id="dore_be_saat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="terafik" id="terafik"
                                                   placeholder="(مگابایت)">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">هزینه راه اندازی
                                        </legend>
                                        <label class="col-form-label col-lg-2">هزینه رانژه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_ranzhe" id="hazine_ranzhe"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه نصب</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_nasb" id="hazine_nasb"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه درانژه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_dranzhe" id="hazine_dranzhe"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه خرابی</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_kharabi" id="hazine_kharabi"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">توضیحات
                                        </legend>
                                        <label class="col-form-label col-lg-2">توضیحات فاکتور</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_faktor" id="tozihate_faktor"
                                                   placeholder="توضیحات فاکتور">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">توضیحات وب سایت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_website" id="tozihate_website"
                                                   placeholder="توضیحات وب سایت">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">سرعت اتصال
                                        </legend>
                                        <label class="col-form-label col-lg-2">سرعت پایه دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorate_paye_daryaft" id="sorate_paye_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر سرعت دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaxar_sorat_daryaft" id="hadeaxar_sorat_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">سرعت پایه ارسال</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorat_paye_ersal" id="sorat_paye_ersal"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">آبونمان
                                        </legend>
                                        <label class="col-form-label col-lg-2">پورت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="port" id="port" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tajhizat" id="tajhizat" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">فضا</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="faza" id="faza" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_adsl" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <div class="card" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button name="delete_adsl" class="btn btn-warning col-md-auto float-md-right"  id="delete_adsl">حذف<i class="icon-folder-remove ml-2"></i></button>
                                    <button name="edit_adsl" class="btn btn-primary col-md-auto float-md-right" id="edit_adsl">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                                    <table id="view_table_adsl" class="table table-striped datatable-responsive table-hover">
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!------------Wireless------------->
                        <div class="wireless_tab tab-pane fade" id="bottom-justified-divided-tab2">
                            <form action="#" method="POST">
                                <input type="hidden" id="id"  name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="wireless" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع خدمات</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="noe_khadamat" id="noe_khadamat">
                                                <option value="Wireless(Share)">Wireless(Share)</option>
                                                <option value="Wireless(Transport)">Wireless(Transport)</option>
                                                <option value="Wireless(Hotspot)">Wireless(Hotspot)</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش سرویس</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_service" id="namayeshe_service">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش در پروفایل</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_dar_profile" id="namayeshe_dar_profile">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">عنوان سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="onvane_service"
                                                   placeholder="مثال: " id="onvane_service">
                                        </div>
                                        <label class="col-form-label col-lg-2">قيمت</label>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" name="gheymat"
                                                   placeholder="به ریال" id="gheymat" required>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="zaname_estefade" id="zaname_estefade" placeholder="زمان به ماه مثال:6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفيف</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="takhfif" id="takhfif"
                                                   placeholder="به درصد مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_service_dahande" id="name_service_dahande">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">پورسانت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="porsant" id="porsant"
                                                   placeholder="مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_shoroe_namayesh" id="tarikhe_shoroe_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_payane_namayesh" id="tarikhe_payane_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">امتیاز جایزه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="emtiaze_jayeze" id="emtiaze_jayeze"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداقل امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaghale_emtiaz" id="hadeaghale_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaksare_emtiaz" id="hadeaksare_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ هر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="mablaghe_har_emtiaz" id="mablaghe_har_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه مشتری</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_grohe_moshtari" id="name_grohe_moshtari">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" id="name_groh" name="name_groh">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2">رنگ نمایش پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_namayeshe_profile" id="range_namayeshe_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">رنگ ویژه سازی پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_vizhesazie_profile" id="range_vizhesazie_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">وصل موقت
                                        </legend>
                                        <label class="col-form-label col-lg-2">ساعت وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="saat_vasle_movaghat" id="saat_vasle_movaghat"
                                                   placeholder="مثال : 2">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">روز وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="roze_vasle_movaghat" id="roze_vasle_movaghat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک وصل موقت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="terafike_vasle_movaghat" id="terafike_vasle_movaghat"
                                                   placeholder="(مگابایت) مثال: 1024">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">ترافیک
                                        </legend>
                                        <label class="col-form-label col-lg-2">دوره به ماه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به روز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به ساعت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_saat" id="dore_be_saat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="terafik" id="terafik"
                                                   placeholder="(مگابایت)">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">هزینه راه اندازی
                                        </legend>

                                        <label class="col-form-label col-lg-2">هزینه نصب</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_nasb" id="hazine_nasb"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه خرابی</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_kharabi" id="hazine_kharabi"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">توضیحات
                                        </legend>
                                        <label class="col-form-label col-lg-2">توضیحات فاکتور</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_faktor" id="tozihate_faktor"
                                                   placeholder="توضیحات فاکتور">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">توضیحات وب سایت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_website" id="tozihate_website"
                                                   placeholder="توضیحات وب سایت">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">سرعت اتصال
                                        </legend>
                                        <label class="col-form-label col-lg-2">سرعت پایه دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorate_paye_daryaft" id="sorate_paye_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر سرعت دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaxar_sorat_daryaft" id="hadeaxar_sorat_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">سرعت پایه ارسال</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorat_paye_ersal" id="sorat_paye_ersal"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">آبونمان
                                        </legend>
                                        <label class="col-form-label col-lg-2">پورت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="port" id="port" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tajhizat" id="tajhizat" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">فضا</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="faza" id="faza" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_wireless" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <div class="card" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button name="delete_wireless" class="btn btn-warning col-md-auto float-md-right"  id="delete_wireless">حذف<i class="icon-folder-remove ml-2"></i></button>
                                    <button name="edit_wireless" class="btn btn-primary col-md-auto float-md-right" id="edit_wireless">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                                    <table id="view_table_wireless" class="table table-striped datatable-responsive table-hover">
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!------------TD-LTE/4G------------->
                        <div class="tdlte_tab tab-pane fade" id="bottom-justified-divided-tab3">
                            <form action="#" method="POST">
                                <input type="hidden" id="id"  name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="tdlte" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع خدمات</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="noe_khadamat" id="noe_khadamat">
                                                <<option value="TD-LTE(Share)">TD-LTE(Share)</option>
                                                <option value="TD-LTE(Transport)">TD-LTE(Transport)</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش سرویس</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_service" id="namayeshe_service">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش در پروفایل</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_dar_profile" id="namayeshe_dar_profile">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">عنوان سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="onvane_service"
                                                   placeholder="مثال: " id="onvane_service">
                                        </div>
                                        <label class="col-form-label col-lg-2">قيمت</label>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" name="gheymat"
                                                   placeholder="به ریال" id="gheymat" required>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="zaname_estefade" id="zaname_estefade" placeholder="زمان به ماه مثال:6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفيف</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="takhfif" id="takhfif"
                                                   placeholder="به درصد مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_service_dahande" id="name_service_dahande">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">پورسانت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="porsant" id="porsant"
                                                   placeholder="مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_shoroe_namayesh" id="tarikhe_shoroe_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_payane_namayesh" id="tarikhe_payane_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">امتیاز جایزه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="emtiaze_jayeze" id="emtiaze_jayeze"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداقل امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaghale_emtiaz" id="hadeaghale_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaksare_emtiaz" id="hadeaksare_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ هر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="mablaghe_har_emtiaz" id="mablaghe_har_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه مشتری</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_grohe_moshtari" id="name_grohe_moshtari">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" id="name_groh" name="name_groh">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2">رنگ نمایش پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_namayeshe_profile" id="range_namayeshe_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">رنگ ویژه سازی پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_vizhesazie_profile" id="range_vizhesazie_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">وصل موقت
                                        </legend>
                                        <label class="col-form-label col-lg-2">ساعت وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="saat_vasle_movaghat" id="saat_vasle_movaghat"
                                                   placeholder="مثال : 2">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">روز وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="roze_vasle_movaghat" id="roze_vasle_movaghat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک وصل موقت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="terafike_vasle_movaghat" id="terafike_vasle_movaghat"
                                                   placeholder="(مگابایت) مثال: 1024">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">ترافیک
                                        </legend>
                                        <label class="col-form-label col-lg-2">دوره به ماه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به روز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به ساعت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_saat" id="dore_be_saat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="terafik" id="terafik"
                                                   placeholder="(مگابایت)">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">هزینه راه اندازی
                                        </legend>

                                        <label class="col-form-label col-lg-2">هزینه نصب</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_nasb" id="hazine_nasb"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه خرابی</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_kharabi" id="hazine_kharabi"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">توضیحات
                                        </legend>
                                        <label class="col-form-label col-lg-2">توضیحات فاکتور</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_faktor" id="tozihate_faktor"
                                                   placeholder="توضیحات فاکتور">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">توضیحات وب سایت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_website" id="tozihate_website"
                                                   placeholder="توضیحات وب سایت">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">سرعت اتصال
                                        </legend>
                                        <label class="col-form-label col-lg-2">سرعت پایه دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorate_paye_daryaft" id="sorate_paye_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر سرعت دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaxar_sorat_daryaft" id="hadeaxar_sorat_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">سرعت پایه ارسال</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorat_paye_ersal" id="sorat_paye_ersal"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">آبونمان
                                        </legend>
                                        <label class="col-form-label col-lg-2">پورت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="port" id="port" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tajhizat" id="tajhizat" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">فضا</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="faza" id="faza" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_tdlte" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <div class="card" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button name="delete_tdlte" class="btn btn-warning col-md-auto float-md-right"  id="delete_tdlte">حذف<i class="icon-folder-remove ml-2"></i></button>
                                    <button name="edit_tdlte" class="btn btn-primary col-md-auto float-md-right" id="edit_tdlte">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                                    <table id="view_table_tdlte" class="table table-striped datatable-responsive table-hover">
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!------------Voip------------->
                        <div class="voip_tab tab-pane fade" id="bottom-justified-divided-tab4">
                            <form action="#" method="POST">
                                <input type="hidden" id="id"  name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="voip" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع پرداخت</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="noe_pardakht" id=""noe_pardakht"">
                                            <option value="carti">کارتی</option>
                                            <option value="etebari">اعتباری</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش سرویس</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_service" id="namayeshe_service">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش در پروفایل</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_dar_profile" id="namayeshe_dar_profile">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">عنوان سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="onvane_service"
                                                   placeholder="مثال: " id="onvane_service">
                                        </div>
                                        <label class="col-form-label col-lg-2">قيمت</label>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" name="gheymat"
                                                   placeholder="به ریال" id="gheymat" required>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="zaname_estefade" id="zaname_estefade" placeholder="زمان به ماه مثال:6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفيف</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="takhfif" id="takhfif"
                                                   placeholder="به درصد مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_service_dahande" id="name_service_dahande">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">پورسانت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="porsant" id="porsant"
                                                   placeholder="مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_shoroe_namayesh" id="tarikhe_shoroe_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_payane_namayesh" id="tarikhe_payane_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">امتیاز جایزه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="emtiaze_jayeze" id="emtiaze_jayeze"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداقل امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaghale_emtiaz" id="hadeaghale_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaksare_emtiaz" id="hadeaksare_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ هر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="mablaghe_har_emtiaz" id="mablaghe_har_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه مشتری</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_grohe_moshtari" id="name_grohe_moshtari">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" id="name_groh" name="name_groh">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2">رنگ نمایش پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_namayeshe_profile" id="range_namayeshe_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">رنگ ویژه سازی پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_vizhesazie_profile" id="range_vizhesazie_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">توضیحات
                                        </legend>
                                        <label class="col-form-label col-lg-2">توضیحات فاکتور</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_faktor" id="tozihate_faktor"
                                                   placeholder="توضیحات فاکتور">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">توضیحات وب سایت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_website" id="tozihate_website"
                                                   placeholder="توضیحات وب سایت">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_voip" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <div class="card" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button name="delete_voip" class="btn btn-warning col-md-auto float-md-right"  id="delete_voip">حذف<i class="icon-folder-remove ml-2"></i></button>
                                    <button name="edit_voip" class="btn btn-primary col-md-auto float-md-right" id="edit_voip">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                                    <table id="view_table_voip" class="table table-striped datatable-responsive table-hover">
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /form inputs -->

        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a
                                href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i
                                    class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link"
                                            target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a
                                href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                                class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i
                                        class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
<!-- Core JS files -->
<script src="<?php echo __ROOT__ . '/public/js/main/jquery.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/main/bootstrap.bundle.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/loaders/blockui.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/datatables.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/extensions/responsive.min.js' ?>"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="<?php echo __ROOT__ . '/public/js/plugins/forms/styling/uniform.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/pickers/color/spectrum.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/forms/styling/uniform.min.js' ?>"></script>

<!--<script src="<?php /*echo __ROOT__ . '/public/js/plugins/forms/styling/switchery.min.js'*/ ?>"></script>-->
<!--<script src="<?php /*echo __ROOT__ . '/public/js/js/plugins/forms/styling/switch.min.js' */ ?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/plugins/forms/selects/select2.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/extensions/select.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/extensions/buttons.min.js' ?>"></script>
<!--<script src="<?php /*echo __ROOT__ . '/public/js/plugins/editors/datatable/dataTables.altEditor.js' */ ?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/app.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/demo_pages/picker_color.js' ?>"></script>

<!--<script src="<?php /*echo __ROOT__ . '/public/js/demo_pages/form_checkboxes_radios.js' */ ?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/demo_pages/form_inputs.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/persian-date.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/persian-datepicker.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/functions.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/services.js' ?>"></script>
<!-- /theme JS files -->