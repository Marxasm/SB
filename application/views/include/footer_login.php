<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<!-- /.login-box -->
<script src="<?php echo BASE_URL(); ?>/assets/faicons/js/all.js"></script>
<!-- jQuery -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL(); ?>/public/dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo BASE_URL(); ?>/public/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
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
</body>

</html>