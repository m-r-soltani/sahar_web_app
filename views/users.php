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
                        <legend class="text-uppercase font-size-sm font-weight-bold">کاربران</legend>
                        <input type="hidden" id="id" class="form-control" name="id" value="empty">

                        <div class="form-group row">
                            <label class="col-form-label col-lg-2">نام کاربری</label>
                            <div class="col-lg-4">
                                <input type="text" id="username" class="form-control" name="username" placeholder="">
                            </div>
                            <br><br>
                            <label class="col-form-label col-lg-2">رمز عبور</label>
                            <div class="col-lg-4">
                                <input type="text" id="password" class="form-control" name="password" placeholder="">
                            </div>
                            <br><br>
                        </div>
                    </fieldset>
                    <div class="text-right">
                        <button type="submit" name="send_users" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form inputs -->
        <!--datatable-->
        <div class="card">
            <div class="col-md-12">
                <button name="delete" class="btn btn-warning col-md-auto float-md-right"  id="delete">حذف<i class="icon-folder-remove ml-2"></i></button>
                <button name="edit" class="btn btn-primary col-md-auto float-md-right" id="edit">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                <table id="view_table" class="table table-striped datatable-responsive table-hover">
                </table>
            </div>
        </div>
        <!--/datatable-->

    </div>
    <!-- /content area -->




    <!-- /main content -->