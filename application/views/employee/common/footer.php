
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">          
            <div class="modal-body">
                <div class='row'>
                    <div class='col-lg-12'>
                        <div class='form-group'>
                            <div class='form-control-wrap'>
                                <textarea class='form-control' id="admin_note_textarea" placeholder='Enter Note' required=''></textarea>                                
                            </div>
                        </div>
                    </div>
                    <div class='col-lg-12'>
                        <div class='form-group mt-2'>                                                                            
                            <button class='btn btn-xs btn-primary admin_note_button'>Update Note</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="closemodal" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">          
            <div class="modal-body">
                <div class='row' id="view_inquiry">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="closemodal" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="nk-footer">
    <div class="container-fluid">
        <div class="nk-footer-wrap">
            <div class="nk-footer-copyright"> <p class="text-soft">&copy; <?php echo date("Y"); ?> <?php echo APPNAME; ?> All Rights Reserved. Design By <a href="https://codexives.com">Codexives.com</a></p>
            </div>
        </div>
    </div>
</div>
<!-- footer @e -->
</div>
<!-- wrap @e -->
</div>
<!-- main @e -->
</div>
<input type='hidden' class="ajax_csrfname" name='<?= $this->security->get_csrf_token_name(); ?>' value='<?= $this->security->get_csrf_hash(); ?>' />
<!-- app-root @e -->
<!-- JavaScript -->


<script src="<?php echo EMPLOYEE_ASSETS_FOLDER; ?>js/bundle.js"></script>
<script src="<?php echo EMPLOYEE_ASSETS_FOLDER; ?>js/scripts.js"></script>
<script src="<?php echo EMPLOYEE_ASSETS_FOLDER; ?>js/toastr.min.js" type="text/javascript"></script>
<script src="<?php echo EMPLOYEE_ASSETS_FOLDER; ?>js/charts/chart-ecommerce.js"></script>
<script nonce='S51U26wMQz' src="<?php echo FRONT_ASSETS_FOLDER ?>/js/bootstrapValidator.min.js" type="text/javascript"></script>


<!-- datatable start js  -->

<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>jquery/dist/jquery.min.js" type="text/javascript" nonce='S51U26wMQz'></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net/js/jquery.dataTables.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-bs/js/dataTables.bootstrap.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-buttons/js/dataTables.buttons.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-buttons-bs/js/buttons.bootstrap.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-buttons/js/buttons.flash.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-buttons/js/buttons.html5.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-buttons/js/buttons.print.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-fixedheader/js/dataTables.fixedHeader.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-keytable/js/dataTables.keyTable.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-responsive/js/dataTables.responsive.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-responsive-bs/js/responsive.bootstrap.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>datatables.net-scroller/js/dataTables.scroller.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<script src="<?php echo ADMIN_ASSETS_FOLDER; ?>bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" nonce='S51U26wMQz'></script>
<link href="<?php echo ADMIN_ASSETS_FOLDER; ?>bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css"/>
<script nonce='S51U26wMQz' src="<?php echo BASE_URL; ?>/assets/front/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL ?>/assets/front/js/dataTables.responsive.min.js" type="text/javascript" nonce='S51U26wMQz'></script>
<!-- datatable end js  -->

<?php include(VIEWPATH . "employee/common/notify.php"); ?>
<?php if ($title == EMPLOYEE_UPDATE_PROFILE_TITLE) {
    ?>
    <script nonce='S51U26wMQz' type="text/javascript">
        $(document).ready(function () {
            $('#frm_change_password').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    user_new_password: {
                        validators: {
                            stringLength: {
                                min: 8
                            },
                            identical: {
                                field: 'user_confirm_password',
                                message: 'The password and its confirm are not the same'
                            },
                            notEmpty: {
                                message: 'Please supply your new password'
                            }
                        }
                    },
                    user_confirm_password: {
                        validators: {
                            stringLength: {
                                min: 8
                            },
                            identical: {
                                field: 'user_new_password',
                                message: 'The password and its confirm are not the same'
                            },
                            notEmpty: {
                                message: 'Please supply your confirm password'
                            }
                        }
                    }
                }
            }).on('success.form.bv', function (e) {
                $('#success_message').slideDown({opacity: "show"}, "slow"); // Do something ...
                $('#frm_change_password').data('bootstrapValidator').resetForm();

                // Prevent form submission
                e.preventDefault();

                // Get the form instance
                var $form = $(e.target);

                // Get the BootstrapValidator instance
                var bv = $form.data('bootstrapValidator');

                // Use Ajax to submit form data
                $.post($form.attr('action'), $form.serialize(), function (result) {
                    if (result['success'] == "success") {
                        location.href = "<?php echo EMPLOYEE_UPDATE_PROFILE_LINK; ?>";
                    }
                    if (result['success'] == "fail") {
                        toastr.error('Old Password not matched!');
                    }
                    $('.txt_csrfname').val(result['token']);
                }, 'json');
            });
        });
    </script>
<?php } ?>
    
    <?php if ($title == EMPLOYEE_INQUIRY_FAV_LIST_TITLE) {
    ?> 

    <script nonce='S51U26wMQz' type="text/javascript">
        $(document).ready(function () {
            fill_datatable1();
            function fill_datatable1()
            {
                $('#example').DataTable({
                    responsive: true,
                    "order": [[1, "desc"]],
                    columnDefs: [{
                            className: 'control',
                            orderable: false,
                            targets: 0
                        }],
                    "processing": true,
                    "serverSide": true,
                    "pageLength": 10,
                    "paginationType": "full_numbers",
                    "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
                    "ajax": {
                        'type': 'POST',
                        'url': "<?php echo BASE_URL . '/assets/front/DataTablesSrc-master/fav_inquiry_list.php' ?>",
                        'data': {
                            employee_user_id: <?php
                            if (isset($_SESSION['user_id'])) {
                                echo $_SESSION['user_id'];
                            }
                            ?>,
                            status: 1
                        }
                    },
                    "columns": [
                        {"data": "index"},
                        {"data": "action1"},
                        {"data": "property_name"},
                        {"data": "viewer_name"},
                        {"data": "viewer_contact"},
                        {"data": "admin_note"},
                        {"data": "applicatation_created_date"}                                               
                    ]
                });
            }


            $(document).on('click', '.btn_fav_property', function () {
                var self = $(this);
                var table = self.attr('data-table');
                var updatefield = self.attr('data-updatefield');
                var wherefield = self.attr('data-wherefield');
                var status = self.attr('data-status');

                if (!confirm('Are you sure want to update?'))
                    return;
    //                self.attr('disabled', 'disabled');

                var data = {
                    'table_id': self.data('id'),
                    'status': status,
                    'table': table,
                    'updatefield': updatefield,
                    'wherefield': wherefield
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo APPROVE_STATUS ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {                           
                            var title = 'Click to fav';
                            var class_ = 'btn_fav_property btn btn-xs btn-info';
                            var text = 'Fav';
                            var isactive = 1;

                            if (status == 1) {
                                title = 'Click to update';
                                class_ = 'btn_fav_property btn btn-xs btn-warning';
                                text = 'unFav';
                                isactive = 0;
                            }

                            self.removeClass().addClass(class_);
                            self.attr({
                                'data-status': isactive,
                                'title': title
                            });
                            self.removeAttr('disabled');
                            self.html(text);
  
                        }
                    }
                });
            });



            $(document).on('click', '.btn_active_inactive_property', function () {
                var self = $(this);
                var table = self.attr('data-table');
                var updatefield = self.attr('data-updatefield');
                var wherefield = self.attr('data-wherefield');
                var status = self.attr('data-status');

                if (!confirm('Are you sure want to update?'))
                    return;
    //                self.attr('disabled', 'disabled');

                var data = {
                    'table_id': self.data('id'),
                    'status': status,
                    'table': table,
                    'updatefield': updatefield,
                    'wherefield': wherefield
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo APPROVE_STATUS ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {
                            self.parent('td').parent('tr').next('.child').remove();
                            self.parent('td').parent('tr').remove();
                            alert('Deleted successfully');
                        }
                    }
                });
            });

            
            $(document).delegate(".admin_note_modal", "click", function () {                                   
                var self = $(this);
                var id=self.data('id');
                var data = {
                    'table_id': self.data('id')                    
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo SET_MODAL; ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {
                            $("#admin_note_textarea").val(res.result['admin_note']);
                            $(".admin_note_button").data('id',id);                                                          
                        }
                    }
                }); 
            });
            $(document).delegate(".admin_note_button", "click", function () {
    //            $(document).on('click', '.admin_note_button', function () {                                   
                var self = $(this);
                var table = 'rental_property_viewing';
                var updatefield = 'admin_note';
                var wherefield = 'rental_view_id';
                var notes = $("#admin_note_textarea").val();               
                var data = {
                    'table_id': self.data('id'),
                    'table': table,
                    'updatefield': updatefield,
                    'wherefield': wherefield,
                    'notes': notes
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo UPDATE_NOTE ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {                                                        
                            $(".ahref_"+self.data('id')).text(notes);
                            $('#closemodal')[0].click();                          
                        }
                    }
                });
            });
        });
    </script>
<?php } ?> 
    
    
    
<?php if ($title == EMPLOYEE_INQUIRY_LIST_TITLE) {
    ?> 

    <script nonce='S51U26wMQz' type="text/javascript">
        $(document).ready(function () {
            fill_datatable1();
            function fill_datatable1()
            {
                $('#example').DataTable({
                    responsive: true,
                    "order": [[1, "desc"]],
                    columnDefs: [{
                            className: 'control',
                            orderable: false,
                            targets: 0
                        }],
                    "processing": true,
                    "serverSide": true,
                    "pageLength": 10,
                    "paginationType": "full_numbers",
                    "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
                    "ajax": {
                        'type': 'POST',
                        'url': "<?php echo BASE_URL . '/assets/front/DataTablesSrc-master/inquiry_list.php' ?>",
                        'data': {
                            employee_user_id: <?php
    if (isset($_SESSION['user_id'])) {
        echo $_SESSION['user_id'];
    }
    ?>,
                            status: 1
                        }
                    },
                    "columns": [
                        {"data": "index"},
                        {"data": "action1"},
                        {"data": "property_name"},
                        {"data": "viewer_name"},
                        {"data": "viewer_contact"},
                        {"data": "admin_note"},
                        {"data": "applicatation_created_date"}                                               
                    ]
                });
            }


            $(document).on('click', '.btn_fav_property', function () {
                var self = $(this);
                var table = self.attr('data-table');
                var updatefield = self.attr('data-updatefield');
                var wherefield = self.attr('data-wherefield');
                var status = self.attr('data-status');

                if (!confirm('Are you sure want to update?'))
                    return;
    //                self.attr('disabled', 'disabled');

                var data = {
                    'table_id': self.data('id'),
                    'status': status,
                    'table': table,
                    'updatefield': updatefield,
                    'wherefield': wherefield
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo APPROVE_STATUS ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {                           
                            var title = 'Click to fav';
                            var class_ = 'btn_fav_property btn btn-xs btn-info';
                            var text = 'Fav';
                            var isactive = 1;

                            if (status == 1) {
                                title = 'Click to update';
                                class_ = 'btn_fav_property btn btn-xs btn-warning';
                                text = 'unFav';
                                isactive = 0;
                            }

                            self.removeClass().addClass(class_);
                            self.attr({
                                'data-status': isactive,
                                'title': title
                            });
                            self.removeAttr('disabled');
                            self.html(text);
  
                        }
                    }
                });
            });



            $(document).on('click', '.btn_active_inactive_property', function () {
                var self = $(this);
                var table = self.attr('data-table');
                var updatefield = self.attr('data-updatefield');
                var wherefield = self.attr('data-wherefield');
                var status = self.attr('data-status');

                if (!confirm('Are you sure want to update?'))
                    return;
    //                self.attr('disabled', 'disabled');

                var data = {
                    'table_id': self.data('id'),
                    'status': status,
                    'table': table,
                    'updatefield': updatefield,
                    'wherefield': wherefield
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo APPROVE_STATUS ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {
                            self.parent('td').parent('tr').next('.child').remove();
                            self.parent('td').parent('tr').remove();
                            alert('Deleted successfully');
                        }
                    }
                });
            });
            
//            
//        $(document).delegate(".admin_inquiry_modal", "click", function () {                             
//                var self = $(this);                
//                var data = {
//                    'table_id': self.data('id')                    
//                };
//                $.ajax({
//                    type: "POST",
//                    url: "<?php //echo SET_MODAL_INQUIRY; ?>",
//                    data: data,
//                    success: function (res) {
//                        var res = $.parseJSON(res);
//                        if (res.suceess) {                                                                                    
//                        }
//                    }
//                }); 
//            });
//            
//            
            
            $(document).delegate(".admin_note_modal", "click", function () {                                   
                var self = $(this);
                var id=self.data('id');
                var data = {
                    'table_id': self.data('id')                    
                };
                $.ajax({
                    type: "POST",
                    url: "<?php echo SET_MODAL; ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {
                            $("#admin_note_textarea").val(res.result['admin_note']);
                            $(".admin_note_button").data('id',id);                                                          
                        }
                    }
                }); 
            });
            $(document).delegate(".admin_note_button", "click", function () {
    //            $(document).on('click', '.admin_note_button', function () {                                   
                var self = $(this);
                var table = 'rental_property_viewing';
                var updatefield = 'admin_note';
                var wherefield = 'rental_view_id';
                var notes = $("#admin_note_textarea").val();               
                var data = {
                    'table_id': self.data('id'),
                    'table': table,
                    'updatefield': updatefield,
                    'wherefield': wherefield,
                    'notes': notes
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo UPDATE_NOTE ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {                                                        
                            $(".ahref_"+self.data('id')).text(notes);
                            $('#closemodal')[0].click();                          
                        }
                    }
                });
            });
        });
    </script>
<?php } ?>     
<?php if ($title == EMPLOYEE_INQUIRY_DELETED_LIST_TITLE) {
    ?>    
    <script nonce='S51U26wMQz' type="text/javascript">        
        $(document).ready(function () {
            fill_datatable1();
            function fill_datatable1()
            {
                $('#example').DataTable({
                    responsive: true,
                    "order": [[1, "desc"]],
                    columnDefs: [{
                            className: 'control',
                            orderable: false,
                            targets: 0
                        }],
                    "processing": true,
                    "serverSide": true,
                    "pageLength": 10,
                    "paginationType": "full_numbers",
                    "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
                    "ajax": {
                        'type': 'POST',
                        'url': "<?php echo BASE_URL . '/assets/front/DataTablesSrc-master/inquiry_list.php' ?>",
                        'data': {
                            employee_user_id: <?php
                            if (isset($_SESSION['user_id'])) {
                                echo $_SESSION['user_id'];
                            }
                            ?>,
                            status: 0
                        }
                    },
                    "columns": [
                        {"data": "index"},
                        {"data": "action1"},
                        {"data": "property_name"},
                        {"data": "viewer_name"},
                        {"data": "viewer_contact"},
                        {"data": "admin_note"},
                        {"data": "applicatation_created_date"}
                    ]
                });
            }

            $(document).on('click', '.btn_active_inactive_property', function () {
                var self = $(this);
                var table = self.attr('data-table');
                var updatefield = self.attr('data-updatefield');
                var wherefield = self.attr('data-wherefield');
                var status = self.attr('data-status');

                if (!confirm('Are you sure want to update?'))
                    return;
    //                self.attr('disabled', 'disabled');

                var data = {
                    'table_id': self.data('id'),
                    'status': status,
                    'table': table,
                    'updatefield': updatefield,
                    'wherefield': wherefield
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo APPROVE_STATUS ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {
                            self.parent('td').parent('tr').next('.child').remove();
                            self.parent('td').parent('tr').remove();
                            alert('Recover successfully');
                        }
                    }
                });
            });
        });
    </script>
<?php } ?>     




<?php if ($title == EMPLOYEE_PROPERTY_LIST_TITLE) {
    ?> 
    <script nonce='S51U26wMQz' type="text/javascript">
        $(document).ready(function () {
            fill_datatable1();
            function fill_datatable1()
            {
                $('#example').DataTable({
                    responsive: {
                        details: {
                            type: 'column',
                            target: 'tr'
                        }
                    },
                    "order": [[1, "desc"]],
                    columnDefs: [{
                            className: 'control',
                            orderable: false,
                            targets: 0
                        }],
                    "processing": true,
                    "serverSide": true,
                    "pageLength": 10,
                    "paginationType": "full_numbers",
                    "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
                    "ajax": {
                        'type': 'POST',
                        'url': "<?php echo BASE_URL . '/assets/front/DataTablesSrc-master/property_list.php' ?>",
                        'data': {
                            employee_user_id: <?php
    if (isset($_SESSION['user_id'])) {
        echo $_SESSION['user_id'];
    }
    ?>
                        }
                    },
                    "columns": [
                        {"data": "index"},
                        {"data": "property_id"},
                        {"data": "property_name"},
                        {"data": "property_address"},
                        {"data": "property_status"},
                        {"data": "action"}
                    ]
                });
            }


            $(document).on('click', '.btn_active_inactive_property', function () {
                var self = $(this);
                var table = self.attr('data-table');
                var updatefield = self.attr('data-updatefield');
                var wherefield = self.attr('data-wherefield');

                var status = self.attr('data-status');

                if (!confirm('Are you sure want to update?'))
                    return;
                self.attr('disabled', 'disabled');

                var data = {
                    'table_id': self.data('id'),
                    'status': status,
                    'table': table,
                    'updatefield': updatefield,
                    'wherefield': wherefield
                };

                $.ajax({
                    type: "POST",
                    url: "<?php echo APPROVE_STATUS ?>",
                    data: data,
                    success: function (res) {
                        var res = $.parseJSON(res);
                        if (res.suceess) {

                            var title = 'Click to inactive Property';
                            var class_ = 'btn_active_inactive_property btn btn-xs btn-success';
                            var text = "Property Activated";
                            var isactive = 0;

                            if (status == 0) {
                                title = 'Click to active Property';
                                class_ = 'btn_active_inactive_property btn btn-xs btn-danger';
                                text = "Property Inactivated";
                                isactive = 1;
                            }
                            self.removeClass().addClass(class_);
                            self.attr({
                                'data-status': isactive,
                                'title': title
                            });
                            self.removeAttr('disabled');
                            self.html(text);
                        }
                    }
                });
            });
        });
    </script>
<?php } ?> 

<script>
    $(document).ready(function () {
        $('.tooltip1').tooltip();
    });
</script>    
</body>
</html>