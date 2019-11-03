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

    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="<?php echo __ROOT__ . '/public/js/main/jquery.min.js' ?>"></script>
    <script src="<?php echo __ROOT__ . '/public/js/main/bootstrap.bundle.min.js' ?>"></script>
    <script src="<?php echo __ROOT__ . '/public/js/plugins/loaders/blockui.min.js' ?>"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="<?php echo __ROOT__ . '/public/js/plugins/forms/styling/uniform.min.js' ?>"></script>
    <script src="<?php echo __ROOT__ . '/public/js/app.js' ?>"></script>
    <script src="<?php echo __ROOT__ . '/public/js/demo_pages/form_inputs.js' ?>"></script>
    <!-- /theme JS files -->
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
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Basic form inputs</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-4">Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input></code>, <code>&lt;textarea></code>, and <code>&lt;select></code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.col-form-label</code> class.</p>

                    <form action="#">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Basic inputs</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Default text input</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Password</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Input with placeholder</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Enter your username...">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Read only field</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" readonly value="read only">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Disabled field</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" disabled value="disabled">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Predefined value</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="http://">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Disabled autocomplete</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="Autocomplete is off" autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Maximum value</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" maxlength="4" placeholder="Maximum 4 characters">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2 cursor-pointer" for="clickable-label">Focus on label click</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="clickable-label" placeholder="Field focus on label click">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Static text</label>
                                <div class="col-lg-10">
                                    <div class="form-control-plaintext">This is a static text</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Textarea</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Basic selects</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Single select</label>
                                <div class="col-lg-10">
                                    <select class="form-control">
                                        <option value="opt1">Default select box</option>
                                        <option value="opt2">Option 2</option>
                                        <option value="opt3">Option 3</option>
                                        <option value="opt4">Option 4</option>
                                        <option value="opt5">Option 5</option>
                                        <option value="opt6">Option 6</option>
                                        <option value="opt7">Option 7</option>
                                        <option value="opt8">Option 8</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Styled select</label>
                                <div class="col-lg-10">
                                    <select class="form-control form-control-uniform" data-fouc>
                                        <option value="opt1">Styled select box</option>
                                        <option value="opt2">Option 2</option>
                                        <option value="opt3">Option 3</option>
                                        <option value="opt4">Option 4</option>
                                        <option value="opt5">Option 5</option>
                                        <option value="opt6">Option 6</option>
                                        <option value="opt7">Option 7</option>
                                        <option value="opt8">Option 8</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Custom BS select</label>
                                <div class="col-lg-10">
                                    <select class="custom-select">
                                        <option value="opt1">Styled select box</option>
                                        <option value="opt2">Option 2</option>
                                        <option value="opt3">Option 3</option>
                                        <option value="opt4">Option 4</option>
                                        <option value="opt5">Option 5</option>
                                        <option value="opt6">Option 6</option>
                                        <option value="opt7">Option 7</option>
                                        <option value="opt8">Option 8</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Multiple select</label>
                                <div class="col-lg-10">
                                    <select multiple="multiple" class="form-control">
                                        <option selected>Amsterdam</option>
                                        <option selected>Atlanta</option>
                                        <option>Baltimore</option>
                                        <option>Boston</option>
                                        <option>Buenos Aires</option>
                                        <option>Calgary</option>
                                        <option selected>Chicago</option>
                                        <option>Denver</option>
                                        <option>Dubai</option>
                                        <option>Frankfurt</option>
                                        <option>Hong Kong</option>
                                        <option>Honolulu</option>
                                        <option>Houston</option>
                                        <option>Kuala Lumpur</option>
                                        <option>London</option>
                                        <option>Los Angeles</option>
                                        <option>Melbourne</option>
                                        <option>Mexico City</option>
                                        <option>Miami</option>
                                        <option>Minneapolis</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Basic file inputs</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Default file input</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Styled file input</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control-uniform" data-fouc>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Custom BS file input</label>
                                <div class="col-lg-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Form helpers</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Text form helpers</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted">Left aligned helper</span>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted text-center">Centered helper</span>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <span class="form-text text-muted text-right">Right aligned helper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Full width badge helpers</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <span class="badge d-block badge-primary form-text text-left">Left aligned badge</span>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <span class="badge d-block badge-danger form-text">Centered badge</span>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <span class="badge d-block badge-info form-text text-right">Right aligned badge</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Block badge helpers</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <div class="d-block form-text">
                                                <span class="badge badge-primary">Left aligned badge</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <div class="d-block form-text text-center">
                                                <span class="badge badge-danger">Centered badge</span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <input type="text" class="form-control">
                                            <div class="d-block form-text text-right">
                                                <span class="badge badge-info text-right">Right aligned badge</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Inline text helper</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-lg-6 mt-1 mt-lg-0 align-self-center">
                                            <span class="text-muted">Inline text helper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Inline badge helper</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-lg-6 mt-1 mt-lg-0 align-self-center">
                                            <span class="badge bg-teal">Inline badge helper</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Input icons</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Input with icons</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="text" class="form-control form-control-lg" placeholder="Left icon, input large">
                                                <div class="form-control-feedback form-control-feedback-lg">
                                                    <i class="icon-make-group"></i>
                                                </div>
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="text" class="form-control" placeholder="Left icon, input default">
                                                <div class="form-control-feedback">
                                                    <i class="icon-droplets"></i>
                                                </div>
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="text" class="form-control form-control-sm" placeholder="Left icon, input small">
                                                <div class="form-control-feedback form-control-feedback-sm">
                                                    <i class="icon-pin-alt"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control form-control-lg" placeholder="Right icon, input large">
                                                <div class="form-control-feedback form-control-feedback-lg">
                                                    <i class="icon-make-group"></i>
                                                </div>
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control" placeholder="Right icon, input default">
                                                <div class="form-control-feedback">
                                                    <i class="icon-droplets"></i>
                                                </div>
                                            </div>

                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control form-control-sm" placeholder="Right icon, input small">
                                                <div class="form-control-feedback form-control-feedback-sm">
                                                    <i class="icon-pin-alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Input with spinners</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-left">
                                                <input type="text" class="form-control" placeholder="Left spinner">
                                                <div class="form-control-feedback">
                                                    <i class="icon-spinner2 spinner"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group form-group-feedback form-group-feedback-right">
                                                <input type="text" class="form-control" placeholder="Right spinner">
                                                <div class="form-control-feedback">
                                                    <i class="icon-spinner2 spinner"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Validation states</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control border-success" placeholder="Valid state">
                                    <span class="form-text text-success">Valid state helper</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2 font-weight-semibold text-success">Valid state with icon</label>
                                <div class="col-lg-10">
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input type="text" class="form-control border-success" placeholder="Valid state">
                                        <div class="form-control-feedback text-success">
                                            <i class="icon-checkmark-circle"></i>
                                        </div>
                                    </div>
                                    <span class="form-text text-success">Valid state helper</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control border-danger" placeholder="Invalid state">
                                    <span class="form-text text-danger">Invalid state helper</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2 font-weight-semibold text-danger">Invalid state with icon</label>
                                <div class="col-lg-10">
                                    <div class="form-group-feedback form-group-feedback-right">
                                        <input type="text" class="form-control border-danger" placeholder="Invalid state">
                                        <div class="form-control-feedback text-danger">
                                            <i class="icon-cancel-circle2"></i>
                                        </div>
                                    </div>
                                    <span class="form-text text-danger">Invalid state helper</span>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Text options</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Light text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control font-weight-light" placeholder="Input with light text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Semibold text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control font-weight-semibold" placeholder="Input with semibold text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Bold text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control font-weight-bold" placeholder="Input with bold text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Capitalized text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control text-capitalize" placeholder="Input with capitalized text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Centered text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control text-center" placeholder="Input with centered text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Right aligned text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control text-right" placeholder="Input with right aligned text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Uppercase text</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control text-uppercase" placeholder="Input with uppercase text">
                                    <span class="form-text text-muted">Other text options work as well</span>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Field options</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Tooltip on focus</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" data-popup="tooltip" data-trigger="focus" title="Tooltip on focus" placeholder="Click on input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Tooltip on hover</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" data-popup="tooltip" title="Tooltip on hover" placeholder="Hover on input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Rounded input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-round" placeholder="Rounded input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Roundless input</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control rounded-0" placeholder="Roundless input">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Fixed input sizing</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-3">
                                            <input type="text" class="form-control" placeholder=".col-3">
                                        </div>

                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder=".col-4">
                                        </div>

                                        <div class="col-5">
                                            <input type="text" class="form-control" placeholder=".col-5">
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Available in 12 columns sizes since it's based on 12 columns grid</span>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Sizing options</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-form-label-lg col-lg-2">Large size</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control form-control-lg" placeholder=".col-form-label-lg .form-control-lg">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Default size</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder=".col-form-label .form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-form-label-sm col-lg-2">Small size</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control form-control-sm" placeholder=".col-form-label-sm .form-control-sm">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Inputs only</label>
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control form-control-lg" type="text" placeholder="Large input height">
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Default input height">
                                            </div>

                                            <div class="form-group">
                                                <input class="form-control form-control-sm" type="text" placeholder="Small input height">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="form-control form-control-lg">
                                                    <option value="opt1">Large select height</option>
                                                    <option value="opt2">Option 2</option>
                                                    <option value="opt3">Option 3</option>
                                                    <option value="opt4">Option 4</option>
                                                    <option value="opt5">Option 5</option>
                                                    <option value="opt6">Option 6</option>
                                                    <option value="opt7">Option 7</option>
                                                    <option value="opt8">Option 8</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option value="opt1">Default select height</option>
                                                    <option value="opt2">Option 2</option>
                                                    <option value="opt3">Option 3</option>
                                                    <option value="opt4">Option 4</option>
                                                    <option value="opt5">Option 5</option>
                                                    <option value="opt6">Option 6</option>
                                                    <option value="opt7">Option 7</option>
                                                    <option value="opt8">Option 8</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <select class="form-control form-control-sm">
                                                    <option value="opt1">Small select height</option>
                                                    <option value="opt2">Option 2</option>
                                                    <option value="opt3">Option 3</option>
                                                    <option value="opt4">Option 4</option>
                                                    <option value="opt5">Option 5</option>
                                                    <option value="opt6">Option 6</option>
                                                    <option value="opt7">Option 7</option>
                                                    <option value="opt8">Option 8</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Color options</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Text color</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control text-violet" value="Custom text color">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Border color</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control border-teal border-1" placeholder="Custom border color">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Background color</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control bg-slate-600 border-slate-600 border-1" placeholder="Custom background color">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Select color</label>
                                <div class="col-lg-10">
                                    <select class="form-control bg-indigo-400 border-indigo-400">
                                        <option value="opt1">Custom select color</option>
                                        <option value="opt2">Option 2</option>
                                        <option value="opt3">Option 3</option>
                                        <option value="opt4">Option 4</option>
                                        <option value="opt5">Option 5</option>
                                        <option value="opt6">Option 6</option>
                                        <option value="opt7">Option 7</option>
                                        <option value="opt8">Option 8</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Styled select</label>
                                <div class="col-lg-10">
                                    <select class="form-control form-control-uniform-custom">
                                        <option value="opt1">Custom styled select color</option>
                                        <option value="opt2">Option 2</option>
                                        <option value="opt3">Option 3</option>
                                        <option value="opt4">Option 4</option>
                                        <option value="opt5">Option 5</option>
                                        <option value="opt6">Option 6</option>
                                        <option value="opt7">Option 7</option>
                                        <option value="opt8">Option 8</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">File input color</label>
                                <div class="col-lg-10">
                                    <input type="file" class="form-control-uniform-custom">
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Type options</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Datetime</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="datetime" name="datetime">
                                    <span class="form-text text-muted">Using <code>input type="datetime"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Date</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="date">
                                    <span class="form-text text-muted">Using <code>input type="date"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Month</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="month" name="month">
                                    <span class="form-text text-muted">Using <code>input type="month"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Time</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="time" name="time">
                                    <span class="form-text text-muted">Using <code>input type="time"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Week</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="week" name="week">
                                    <span class="form-text text-muted">Using <code>input type="week"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Number</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="number" name="number">
                                    <span class="form-text text-muted">Using <code>input type="number"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="email" name="email">
                                    <span class="form-text text-muted">Using <code>input type="email"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">URL</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="url" name="url">
                                    <span class="form-text text-muted">Using <code>input type="url"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Search</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="search" name="search">
                                    <span class="form-text text-muted">Using <code>input type="search"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Tel</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="tel" name="tel">
                                    <span class="form-text text-muted">Using <code>input type="tel"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Color</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="color" name="color">
                                    <span class="form-text text-muted">Using <code>input type="color"</code></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-2">Range</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="range" name="range" min="0" max="10">
                                    <span class="form-text text-muted">Using <code>input type="range"</code></span>
                                </div>
                            </div>
                        </fieldset>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form inputs -->

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
