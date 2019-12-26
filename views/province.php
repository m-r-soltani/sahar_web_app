        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">


                <div class="card-body">

                    <form action="#" method="POST">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">استان</legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">نام استان</label>
                                <div class="col-lg-10">
                                    <input type="hidden" id="id" class="form-control" name="id" value="empty">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="مثال: تهران">
                                </div>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_province" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
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