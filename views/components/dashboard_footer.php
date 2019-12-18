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
<script src="<?php echo __ROOT__ . '/public/js/plugins/pickers/color/spectrum.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/forms/styling/uniform.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/visualization/d3/d3.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/visualization/d3/d3_tooltip.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/forms/selects/bootstrap_multiselect.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/ui/moment/moment.min.js' ?>"></script>
<script src="<?php echo __ROOT__ . '/public/js/plugins/pickers/daterangepicker.js' ?>"></script>
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
<?php
if (isset($this->js1)) {
    echo "<script src='" . __ROOT__ . $this->js1 . "'></script>";
}
if (isset($this->js2)) {
    echo "<script src='" . __ROOT__ . $this->js2 . "'></script>";
}
?>


<!-- /theme JS files -->