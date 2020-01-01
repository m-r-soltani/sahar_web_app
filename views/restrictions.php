<?php
//$hash=Helper::passwordhash('amin');
//$verified=Helper::passwordverify('amin',$hash);
//var_dump(passwordverify('amin',$hash));


?>
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> داشبورد</a>
                    <a href="#" class="breadcrumb-item">فاکتورها</a>
                    <!--<span class="breadcrumb-item active">Basic inputs</span>-->
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <!--<div class="header-elements d-none">
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
            </div>-->
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!--datatable-->
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">محدودیت ها</legend>
                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">کاربر</label>
                            <div class="col-lg-4">
                                <select class="form-control form-control-lg custom_select" name="user" id="user">

                                </select>
                            </div>
                            <div class="col-lg-6">

                            </div>
                            <br><br>
                            <label class="col-form-label col-lg-2">دسترسی منو ها</label>
                            <div class="col-lg-4">
                                <select class="form-control form-control-lg" multiple="multiple" name="menu_access[]" id="menu_access" data-placeholder="انتخاب کنید">

                            </select>
                            </div>
                            <label class="col-form-label col-lg-2">اجازه ویرایش</label>
                            <div class="col-lg-4">
                                <select class="form-control form-control-lg" multiple="multiple" name="edit_access[]" id="edit_access" data-placeholder="انتخاب کنید">

                                </select>
                            </div>
                            <br><br>
                            <label class="col-form-label col-lg-2">اجازه ثبت</label>
                            <div class="col-lg-4">
                                <select class="form-control form-control-lg" multiple="multiple" name="add_access[]" id="add_access" data-placeholder="انتخاب کنید">

                                </select>
                            </div>
                            <br><br>
                            <label class="col-form-label col-lg-2">اجازه حذف</label>
                            <div class="col-lg-4">
                                <select class="form-control" multiple="multiple" name="delete_access[]" id="delete_access" data-placeholder="انتخاب کنید">

                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="text-right">
                        <button type="submit" name="send_restrictions" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!--/datatable-->
    </div>
    <!-- /content area -->


    <!-- /main content -->