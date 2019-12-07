<?php defined('__ROOT__') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/main.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/icons/icomoon/styles.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/bootstrap.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/bootstrap_limitless.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/layout.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/components.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/colors.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/persian-datepicker.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo __ROOT__ . '/public/css/dataTables.bootstrap4.min.css' ?>" />
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
                                    <img src="global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
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
    <?php require_once('dashboard_sidemenu.php');?>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Forms</span> - Basic Inputs</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
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

                    <form action="#" method="POST">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">نماینده</legend>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">نام شرکت/موسسه</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="name_sherkat" id="name_sherkat" placeholder="مثال: سحر ارتباط">
                                    <input type="hidden" id="id" class="form-control" name="id" value="empty">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شماره ثبت/پروانه</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shomare_sabt" id="shomare_sabt" placeholder="مثال: 12345">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شناسه ملی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shenase_meli" id="shenase_meli" placeholder="مثال: 0013302033">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">کد اقتصادی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="code_eghtesadi" id="code_eghtesadi" placeholder="مثال: 123">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نوع شرکت/موسسه</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="noe_sherkat" id="noe_sherkat" placeholder="مثال: سحر ارتباط">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">وب سایت</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="website" id="website" placeholder="مثال: www.abc.com">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">پست الکترونیک</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="email" id="email" placeholder="مثال: سحر ارتباط">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تلفن1</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="telephone1" id="telephone1" placeholder="مثال: 123456789">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تلفن2</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="telephone2" id="telephone2" placeholder="مثال: 123456789">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">دورنگار</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="dornegar" id="dornegar" placeholder="مثال: 123456789">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">استان</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="ostan" id="ostan" placeholder="مثال: تهران">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شهر</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shahr" id="shahr" placeholder="مثال: تهران">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">کد پستی</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="code_posti" id="code_posti" placeholder="مثال: 123456789">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">آدرس</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="مثال: تهران خیابان شریعتی کوچه ...">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">لوگو شرکت/موسسه</label>
                                    <div class="col-lg-4">
                                        <input type="file" name="t_logo" id="t_logo" class="form-control-uniform">
                                    </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصاویر محیطی شرکت</label>
                                <div class="col-lg-4">
                                    <input type="file" name="t_mohiti" id="t_mohiti" class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصاوریر تابلو</label>
                                <div class="col-lg-4">
                                    <input type="file" name="t_tablo" id="t_tablo" class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر کد اقتصادی</label>
                                <div class="col-lg-4">
                                    <input type="file" name="t_code_eghtesadi" id="t_code_eghtesadi" class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر روزنامه تاسیس</label>
                                <div class="col-lg-4">
                                    <input type="file" name="t_rozname_tasis" id="t_rozname_tasis" class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر شناسه ملی</label>
                                <div class="col-lg-4">
                                    <input type="file" name="t_shenase_meli" id="t_shenase_meli" class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر آخرین تغغیرات</label>
                                <div class="col-lg-4">
                                    <input type="file" name="t_akharin_taghirat" id="t_akharin_taghirat" class="form-control-uniform">
                                </div>
                                <br><br>


                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_branch" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form inputs -->
            <div class="card">
                <div class="col-md-12">
                    <button name="delete" class="btn btn-warning col-md-auto float-md-right"  id="delete">حذف<i class="icon-folder-remove ml-2"></i></button>
                    <button name="edit" class="btn btn-primary col-md-auto float-md-right" id="edit">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                    <table id="view_table" class="table table-striped datatable-responsive table-hover">
                    </table>
                </div>
            </div>
        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2015 - 2018. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
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
<!--<script src="<?php /*echo __ROOT__ . '/public/js/plugins/forms/styling/switchery.min.js' */?>"></script>
<script src="<?php /*echo __ROOT__ . '/public/js/js/plugins/forms/styling/switch.min.js' */?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/plugins/forms/selects/select2.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/extensions/select.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/tables/datatables/extensions/buttons.min.js' ?>"></script>
<!--<script src="<?php /*echo __ROOT__ . '/public/js/plugins/editors/datatable/dataTables.altEditor.js' */?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/app.js' ?>"></script>


<!--<script src="<?php /*echo __ROOT__ . '/public/js/demo_pages/form_checkboxes_radios.js' */?>"></script>-->
<script src="<?php echo __ROOT__ . '/public/js/demo_pages/form_inputs.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/persian-date.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/persian-datepicker.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/functions.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/branch.js' ?>"></script>