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
$(document).ready(function() {

    $("#example4").DataTable({
        "dom": 'Blfrtip',
        "buttons": [{
                extend: "copy",
                footer: false,
                title: 'SB Office - Accounts',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "csv",
                footer: false,
                title: 'SB Office - Accounts',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "excel",
                footer: false,
                title: 'SB Office - Accounts',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "pdf",
                footer: false,
                title: 'SB Office - Accounts',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "print",
                footer: false,
                title: 'SB Office - Accounts',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: "colvis",
                footer: false,
                title: 'SB Office - Accounts',
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
            "url": "<?php echo base_url('user/getaccount/'); ?>",
            "type": "POST"
        },
        "columnDefs": [{
            "targets": [0],
            "orderable": false
        }],

    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
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

var currentdate = new Date();
var datetime = "Now: " + currentdate.getDate() + "/" +
    (currentdate.getMonth() + 1) + "/" +
    currentdate.getFullYear() + " @ " +
    currentdate.getHours() + ":" +
    currentdate.getMinutes() + ":" +
    currentdate.getSeconds();

// -- Account Management Functions --

function register_person() {
    $('#account_form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#modal_form_account').modal('show'); // show bootstrap modal
    $('.modal-title').text('Register Account'); // Set Title to Bootstrap modal title
}

function reload_table1() {
    $('#example4').DataTable().ajax.reload(null, false); //reload datatable ajax 
}

function register() {
    $('#btnSaveReg').text('Submitting...'); //change button text
    $('#btnSaveReg').attr('disabled', true); //set button disable 
    var url;
    url = "<?php echo site_url('user/ajax_register')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#account_form').serialize(),
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
                if (data.type_error != '') {
                    $('#type_error').html(data.type_error);
                } else {
                    $('#type_error').html('');
                }
                if (data.username_error != '') {
                    $('#username_error').html(data.username_error);
                } else {
                    $('#username_error').html('');
                }
                if (data.password_error != '') {
                    $('#password_error').html(data.password_error);
                } else {
                    $('#password_error').html('');
                }
                if (data.confirm_error != '') {
                    $('#confirm_error').html(data.confirm_error);
                } else {
                    $('#confirm_error').html('');
                }
            }
            $('#btnSaveReg').text('Register Account'); //change button text
            $('#btnSaveReg').attr('disabled', false); //set button enable 
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
                    title: 'You have sucessfully registered an account.'
                })
                $('#modal_form_account').modal('hide');
                $('#lastname_error').html('');
                $('#middlename_error').html('');
                $('#firstname_error').html('');
                $('#email_error').html('');
                $('#phone_error').html('');
                $('#position_error').html('');
                $('#type_error').html('');
                $('#username_error').html('');
                $('#password_error').html('');
                $('#confirm_error').html('');

                reload_table1();
            }

            $('btnSaveReg').text('Register Account'); //change button text
            $('btnSaveReg').attr('disabled', false); //set button enable 


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
                title: 'An error occurred in submitting the data. Please try again.'
            })

            $('#modal_form_account').modal('hide');
            $('#lastname_error').html('');
            $('#middlename_error').html('');
            $('#firstname_error').html('');
            $('#email_error').html('');
            $('#phone_error').html('');
            $('#position_error').html('');
            $('#type_error').html('');
            $('#username_error').html('');
            $('#password_error').html('');
            $('#confirm_error').html('');

            $('#btnSaveReg').text('Register Account'); //change button text
            $('#btnSaveReg').attr('disabled', false); //set button enable 

        }

    });

}

function editp(id) {
    $('#pform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/ajax_edit_profile')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.account_id);
            $('[name="usertype"]').val(data.type);
            $('#modal_profile').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit User Type'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}

function save_usertype() {
    $('#btnProf').text('Saving...'); //change button text
    $('#btnProf').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/update_profile')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#pform').serialize(),
        dataType: "JSON",
        success: function(data) {
            if (data.error) {
                if (data.type_error != '') {
                    $('#usertype_error').html(data.usertype_error);
                } else {
                    $('#usertype_error').html('');
                }

            }
            $('#btnProf').text('Save'); //change button text
            $('#btnProf').attr('disabled', false); //set button enable 
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
                    title: 'You have sucessfully updated the account user type.'
                })
                $('#modal_profile').modal('hide');
                $('#usertype_error').html('');
                reload_table1();
            }
            $('#usertype_error').html('');
            $('#btnProf').text('Save'); //change button text
            $('#btnProf').attr('disabled', false); //set button enable 



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
            $('#usertype_error').html('');
            $('#btnProf').text('Save'); //change button text
            $('#btnProf').attr('disabled', false); //set button enable 

        }
    });
}

function edit_status(id) {

    $('#sform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/ajax_status')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.account_id);
            $('[name="status"]').val(data.status);
            $('#modal_status').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit User Status'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}

function save_status() {
    $('#btnStatus').text('Saving...'); //change button text
    $('#btnStatus').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/update_status')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#sform').serialize(),
        dataType: "JSON",
        success: function(data) {
            if (data.error) {
                if (data.status_error != '') {
                    $('#status_error').html(data.status_error);
                } else {
                    $('#status_error').html('');
                }

            }
            $('#btnStatus').text('Save'); //change button text
            $('#btnStatus').attr('disabled', false); //set button enable 
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
                    title: 'You have sucessfully updated the account user status.'
                })
                $('#modal_status').modal('hide');
                $('#status_error').html('');
                reload_table1();
            }
            $('#status_error').html('');
            $('#btnStatus').text('Save'); //change button text
            $('#btnStatus').attr('disabled', false); //set button enable 



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
            $('#status_error').html('');
            $('#btnProf').text('Save'); //change button text
            $('#btnProf').attr('disabled', false); //set button enable 

        }
    });
}

function delete_view(id) {
    save_method = 'update';
    $('#dform')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url: "<?php echo site_url('user/ajax_edit_profile')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {

            $('[name="id"]').val(data.account_id);
            $('#delete_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Delete Account'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error getting data from the database.');
        }
    });
}


function delete_status() {
    $('#btnDel').text('Deleting...'); //change button text
    $('#btnDel').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/delete_account')?>";

    // ajax adding data to database
    $.ajax({
        url: url,
        type: "POST",
        data: $('#dform').serialize(),
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
                    title: 'You have sucessfully deleted the account.'
                })
                $('#delete_form').modal('hide');
                reload_table1();
            }

            $('#btnDel').text('Delete'); //change button text
            $('#btnDel').attr('disabled', false); //set button enable 


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
            $('#btnDel').text('Delete'); //change button text
            $('#btnDel').attr('disabled', false); //set button enable 

        }
    });
}

function showpwd(id, el) {
    let x = document.getElementById(id);
    if (x.type === "password") {
        x.type = "text";
        $(el).toggleClass('fa-solid fa-eye-slash');
    } else {
        x.type = "password";
        $(el).toggleClass('fa-solid fa-eye');
    }
}

function showpwd1(id, el) {
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