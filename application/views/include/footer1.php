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
<script>
var timeDisplay = document.getElementById("time");


function refreshTime() {
    var dateString = new Date().toLocaleString("en-US", {
        timeZone: "Asia/Manila"
    });
    var formattedString = dateString.replace(", ", " - ");
    timeDisplay.innerHTML = formattedString;
}

setInterval(refreshTime, 1000);
</script>
<script>
function save() {

    $('#btnSave').text('Submitting...'); //change button text
    $('#btnSave').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/ajax_add')?>";

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
            }
            $('#btnSave').text('Submit'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 
            if (data.status) //if success close and reload 
            {
                $('#form')[0].reset(); // reset form 
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
                    title: 'You have sucessfully submitted the ingoing document.'
                })
                $('#title_error').html('');
                $('#time_error').html('');
            }

            $('#btnSave').text('Submit'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 


        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#form')[0].reset(); // reset form
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
            $('#title_error').html('');
            $('#time_error').html('');
            $('#btnSave').text('Submit'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 

        }

    });
}

function save1() {

    $('#btnSave1').text('Submitting...'); //change button text
    $('#btnSave1').attr('disabled', true); //set button disable 
    var url;

    url = "<?php echo site_url('user/ajax_add1')?>";

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
            }
            $('#btnSave1').text('Submit'); //change button text
            $('#btnSave1').attr('disabled', false); //set button enable 

            if (data.status) //if success close and reload 
            {
                $('#form1')[0].reset(); // reset form 
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
                    title: 'You have sucessfully submitted the outgoing document.'
                })
                $('#title1_error').html('');
                $('#time1_error').html('');
            }

            $('#btnSave1').text('Submit'); //change button text
            $('#btnSave1').attr('disabled', false); //set button enable 


        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#form1')[0].reset(); // reset form
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
            $('#title1_error').html('');
            $('#time1_error').html('');
            $('#btnSave1').text('Submit'); //change button text
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

