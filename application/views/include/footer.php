<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="<?php echo BASE_URL(); ?>/assets/faicons/js/all.js"></script>
<!-- jQuery -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL(); ?>/public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo BASE_URL(); ?>/public/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/toastr/toastr.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- jquery-validation -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo BASE_URL(); ?>/public/plugins/jquery-validation/additional-methods.min.js"></script>


<script type="text/javascript">
var currentdate = new Date();
var datetime = "Now: " + currentdate.getDate() + "/" +
    (currentdate.getMonth() + 1) + "/" +
    currentdate.getFullYear() + " @ " +
    currentdate.getHours() + ":" +
    currentdate.getMinutes() + ":" +
    currentdate.getSeconds();
$(document).ready(function() {
    table = $("#example1").DataTable({
        "dom": 'Blfrtip',
        "buttons": [{
                extend: "copy",
                footer: false,
                title: 'SB Office - Ingoing Documents',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "csv",
                footer: false,
                title: 'SB Office - Ingoing Documents',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "excel",
                footer: false,
                title: 'SB Office - Ingoing Documents',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "pdf",
                footer: false,
                title: 'SB Office - Ingoing Documents',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "print",
                footer: false,
                title: 'SB Office - Ingoing Documents',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "colvis",
                footer: false,
                title: 'SB Office - Ingoing Documents',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ],
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            "url": "<?php echo base_url('user/getingoing/'); ?>",
            "type": "POST"
        },
        "columnDefs": [{
            "targets": [0],
            "orderable": false
        }],

    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example3")
        .DataTable({
            "dom": 'Blfrtip',
            "buttons": [{
                    extend: "copy",
                    footer: false,
                    title: 'SB Office - Outgoing Documents',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: "csv",
                    footer: false,
                    title: 'SB Office - Outgoing Documents',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: "excel",
                    footer: false,
                    title: 'SB Office - Outgoing Documents',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: "pdf",
                    footer: false,
                    title: 'SB Office - Outgoing Documents',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: "print",
                    footer: false,
                    title: 'SB Office - Outgoing Documents',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: "colvis",
                    footer: false,
                    title: 'SB Office - Outgoing Documents',
                    exportOptions: {
                        columns: ':visible'
                    }
                }
            ],
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?php echo base_url('user/getoutgoing/'); ?>",
                "type": "POST"
            },
            "columnDefs": [{
                "targets": [0],
                "orderable": false
            }],

        }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
});

function reload_table() {
    $('#example1').DataTable().ajax.reload(null, false); //reload datatable ajax 
    $('#example3').DataTable().ajax.reload(null, false); //reload datatable ajax 
}

function edit_person(id) {
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.in_id);
            $('[name="title"]').val(data.in_title);
            $('[name="time"]').val(data.in_time);
            $('[name="date"]').val(data.in_date);
            $('[name="update"]').val(data.in_update);
            $('[name="hid_title"]').val(data.in_title);
            $('[name="hid_time"]').val(data.in_time);
            $('[name="hid_status"]').val(data.in_status);
            $('[name="hid_update"]').val(data.in_update);
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Ingoing Document'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}

function save() {
    $('#btnSave').text('Saving...'); //change button text
    $('#btnSave').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/ajax_update')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data) {
            if (data.error) {
                if (data.title_error != '') {
                    $('#title_error').html(data.title_error);
                } else {
                    $('#title_error').html('');
                }
                if (data.time_error != '') {
                    $('#time_error').html(data.time_error);
                } else {
                    $('#time_error').html('');
                }
                if (data.update_error != '') {
                    $('#update_error').html(data.update_error);
                } else {
                    $('#update_error').html('');
                }
            }
            $('#btnSave').text('Save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 
            if (data.status) //if success close modal and reload ajax table
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'You have sucessfully updated the ingoing document.'
                })
                $('#modal_form').modal('hide');
                $('#title_error').html('');
                $('#time_error').html('');
                $('#update_error').html('');
                reload_table();
            }

            $('#btnSave').text('Save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 



        },
        error: function(jqXHR, textStatus, errorThrown) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'An error occurred in updating the data. Please try again.'
            })
            $('#title_error').html('');
            $('#time_error').html('');
            $('#update_error').html('');
            $('#btnSave').text('Save'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 

        }
    });
}

function delete_person(id) {
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/ajax_edit')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.in_id);
            $('#modal_form1').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Delete Ingoing Document'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}


function in_delete() {
    $('#btnSave').text('Deleting...'); //change button text
    $('#btnSave').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/ajax_delete')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data) {

            if (data.status) //if success close modal and reload ajax table
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'You have sucessfully deleted the ingoing document.'
                })
                $('#modal_form1').modal('hide');
                reload_table();
            }

            $('#btnSave').text('Delete'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 


        },
        error: function(jqXHR, textStatus, errorThrown) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'An error occurred in deleting the data. Please try again.'
            })
            $('#btnSave').text('Delete'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 

        }
    });
}

function edit_person1(id) {
    save_method = 'update';
    $('#form1')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/ajax_edit1')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.out_id);
            $('[name="title"]').val(data.out_title);
            $('[name="time"]').val(data.out_time);
            $('[name="date"]').val(data.out_date);
            $('[name="update1"]').val(data.out_update);
            $('[name="hid_title"]').val(data.out_title);
            $('[name="hid_time"]').val(data.out_time);
            $('[name="hid_status"]').val(data.out_status);
            $('[name="hid_update1"]').val(data.out_update);
            $('#modal_out_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Outgoing Document'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}

function save1() {
    $('#btnSave1').text('Saving...'); //change button text
    $('#btnSave1').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/ajax_update1')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#form1').serialize(),
        dataType: "JSON",
        success: function(data) {
            if (data.error) {
                if (data.title_error != '') {
                    $('#title1_error').html(data.title_error);
                } else {
                    $('#title1_error').html('');
                }
                if (data.time_error != '') {
                    $('#time1_error').html(data.time_error);
                } else {
                    $('#time1_error').html('');
                }
                if (data.update1_error != '') {
                    $('#update1_error').html(data.update1_error);
                } else {
                    $('#update1_error').html('');
                }
            }
            $('#btnSave1').text('Save'); //change button text
            $('#btnSave1').attr('disabled', false); //set button enable 
            if (data.status) //if success close modal and reload ajax table
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'You have sucessfully updated the outgoing document.'
                })
                $('#modal_out_form').modal('hide');
                $('#title1_error').html('');
                $('#time1_error').html('');
                $('#update1_error').html('');
                reload_table();
            }

            $('#btnSave1').text('Save'); //change button text
            $('#btnSave1').attr('disabled', false); //set button enable 


        },
        error: function(jqXHR, textStatus, errorThrown) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'An error occurred in updating the data. Please try again.'
            })
            $('#title1_error').html('');
            $('#time1_error').html('');
            $('#update1_error').html('');
            $('#btnSave1').text('Save'); //change button text
            $('#btnSave1').attr('disabled', false); //set button enable 

        }
    });
}

function delete_person1(id) {
    save_method = 'update';
    $('#form1')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/ajax_edit1')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.out_id);
            $('#modal_out_form1').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text(
                'Delete Outgoing Document'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}


function out_delete() {
    $('#btnSave1').text('Deleting...'); //change button text
    $('#btnSave1').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/ajax_delete1')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#form1').serialize(),
        dataType: "JSON",
        success: function(data) {

            if (data.status) //if success close modal and reload ajax table
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'You have sucessfully deleted the outgoing document.'
                })
                $('#modal_out_form1').modal('hide');
                reload_table();
            }

            $('#btnSave1').text('Delete'); //change button text
            $('#btnSave1').attr('disabled', false); //set button enable 


        },
        error: function(jqXHR, textStatus, errorThrown) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'An error occurred in deleting the data. Please try again.'
            })
            $('#btnSave1').text('Delete'); //change button text
            $('#btnSave1').attr('disabled', false); //set button enable 

        }
    });
}

</script>

<!-- CHANGE PASSWORD AND UPDATE PROFILE FUNCTIONS -->

<script>
<?php if($this->session->flashdata('success')) : ?>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'success',
    title: '<?=$this->session->flashdata('success'); ?>'
})


<?php elseif($this->session->flashdata('error')) : ?>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'error',
    title: '<?=$this->session->flashdata('error'); ?>'
})

<?php elseif($this->session->flashdata('warning')) : ?>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'warning',
    title: '<?=$this->session->flashdata('warning'); ?>'
})
<?php endif; ?>
</script>
<script>
function change_profile(id) {
    save_method = 'update';
    $('#change_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/get_change')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.account_id);
            $('[name="last_name"]').val(data.last_name);
            $('[name="first_name"]').val(data.first_name);
            $('[name="middle_name"]').val(data.middle_name);
            $('[name="email"]').val(data.email);
            $('[name="phone"]').val(data.phone);
            $('[name="position"]').val(data.position);
            $('[name="username"]').val(data.username);
            $('#change_modal').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Update Profile'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}

function save_profile() {
    $('#changeBtn').text('Saving...'); //change button text
    $('#changeBtn').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/ajax_change')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#change_form').serialize(),
        dataType: "JSON",
        success: function(data) {
            if (data.error) {
                if (data.lastname_error != '') {
                    $('#lastname_error').html(data.lastname_error);
                } else {
                    $('#lastname_error').html('');
                }
                if (data.middlename_error != '') {
                    $('#middlename_error').html(data.middle_error);
                } else {
                    $('#middlename_error').html('');
                }
                if (data.firstname_error != '') {
                    $('#firstname_error').html(data.firstname_error);
                } else {
                    $('#firstname_error').html('');
                }
                if (data.email_error != '') {
                    $('#email_error').html(data.email_error);
                } else {
                    $('#email_error').html('');
                }
                if (data.phone_error != '') {
                    $('#phone_error').html(data.phone_error);
                } else {
                    $('#phone_error').html('');
                }
                if (data.position_error != '') {
                    $('#position_error').html(data.position_error);
                } else {
                    $('#position_error').html('');
                }
                if (data.username_error != '') {
                    $('#username_error').html(data.username_error);
                } else {
                    $('#username_error').html('');
                }
            }
            $('#changeBtn').text('Save'); //change button text
            $('#changeBtn').attr('disabled', false); //set button enable 
            if (data.status) //if success close modal and reload ajax table
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'You have sucessfully updated your profile.'
                })
                $('#change_modal').modal('hide');
                $('#lastname_error').html('');
                $('#middlename_error').html('');
                $('#firstname_error').html('');
                $('#email_error').html('');
                $('#phone_error').html('');
                $('#username_error').html('');
            }

            $('#changeBtn').text('Save'); //change button text
            $('#changeBtn').attr('disabled', false); //set button enable 


        },
        error: function(jqXHR, textStatus, errorThrown) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'An error occurred in updating the data. Please try again.'
            })
            $('#lastname_error').html('');
            $('#middlename_error').html('');
            $('#firstname_error').html('');
            $('#email_error').html('');
            $('#phone_error').html('');
            $('#username_error').html('');
            $('#change_modal').modal('hide');
            $('#changeBtn').text('Save'); //change button text
            $('#changeBtn').attr('disabled', false); //set button enable 

        }
    });
}
// --- CHANGE PASSWORD FUNCTIONS ---
function change_pass(id) {
    save_method = 'update';
    $('#password_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/get_password_id')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.account_id);
            $('#password_modal').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Change Password'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}

function save_password() {
    $('#passBtn').text('Saving...'); //change button text
    $('#passBtn').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/ajax_password')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#password_form').serialize(),
        dataType: "JSON",
        success: function(data) {
            if (data.error) {
                if (data.current_error != '') {
                    $('#current_error').html(data.current_error);
                } else {
                    $('#current_error').html('');
                }
                if (data.new_error != '') {
                    $('#new_error').html(data.new_error);
                } else {
                    $('#new_error').html('');
                }
                if (data.confirm1_error != '') {
                    $('#confirm1_error').html(data.confirm1_error);
                } else {
                    $('#confirm1_error').html('');
                }
            }
            $('#passBtn').text('Save'); //change button text
            $('#passBtn').attr('disabled', false); //set button enable 

            if (data.wrong) //if success close modal and reload ajax table
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'error',
                    title: 'Incorrect current password. Please input your valid password and try again.'
                })
                $('#password_modal').modal('hide');
                $('#current_error').html('');
                $('#new_error').html('');
                $('#confirm1_error').html('');
            }

            $('#passBtn').text('Save'); //change button text
            $('#passBtn').attr('disabled', false); //set button enable 

            if (data.status) //if success close modal and reload ajax table
            {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'You have sucessfully changed your password.'
                })
                $('#password_modal').modal('hide');
                $('#current_error').html('');
                $('#new_error').html('');
                $('#confirm1_error').html('');
            }

            $('#passBtn').text('Save'); //change button text
            $('#passBtn').attr('disabled', false); //set button enable 


        },
        error: function(jqXHR, textStatus, errorThrown) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'An error occurred in updating the data. Please try again.'
            })
            $('#current_error').html('');
            $('#new_error').html('');
            $('#confirm1_error').html('');
            $('#password_modal').modal('hide');
            $('#passBtn').text('Save'); //change button text
            $('#passBtn').attr('disabled', false); //set button enable 

        }
    });
}

function showpwd11(id, el) {
    let x = document.getElementById(id);
    if (x.type === "password") {
        x.type = "text";
        $(el).toggleClass('fa-solid fa-eye-slash');
    } else {
        x.type = "password";
        $(el).toggleClass('fa-solid fa-eye');
    }
}

function showpwd12(id, el) {
    let x = document.getElementById(id);
    if (x.type === "password") {
        x.type = "text";
        $(el).toggleClass('fa-solid fa-eye-slash');
    } else {
        x.type = "password";
        $(el).toggleClass('fa-solid fa-eye');
    }
}

function showpwd13(id, el) {
    let x = document.getElementById(id);
    if (x.type === "password") {
        x.type = "text";
        $(el).toggleClass('fa-solid fa-eye-slash');
    } else {
        x.type = "password";
        $(el).toggleClass('fa-solid fa-eye');
    }
}
</script>

<script>
<?php if($this->session->flashdata('success')) : ?>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'success',
    title: '<?=$this->session->flashdata('success'); ?>'
})


<?php elseif($this->session->flashdata('error')) : ?>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'error',
    title: '<?=$this->session->flashdata('error'); ?>'
})

<?php elseif($this->session->flashdata('warning')) : ?>
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

Toast.fire({
    icon: 'warning',
    title: '<?=$this->session->flashdata('warning'); ?>'
})
<?php endif; ?>
</script>