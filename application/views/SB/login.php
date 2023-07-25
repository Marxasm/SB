<div class="login-box">
    <!-- /.login-logo -->
    <div> <img src="<?php echo base_url('assets/img/sanggunian.png');?>"
            class="rounded-circle mx-auto d-block img-fluid" alt="logo" style="width: 200px; padding-bottom:50px;">
    </div>
    <div class="card card-outline card-success">
        <div class="card-header text-center">
            <h3><b>Sangguniang Bayan Office
                    Information System</b></h3>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="<?php echo site_url('logaccount');?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text bg-white">
                            <i class="fa-solid fa-eye" onClick="showpwd1('password', this)"
                                style="cursor: pointer;"></i>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-warning">
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-secondary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>