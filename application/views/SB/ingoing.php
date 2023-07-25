<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-grey navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url('home');?>" class="nav-link">Home</a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <div class="btn-group">
            <button type="button" class="btn btn-default btn-flat"><b
                    style="text-transform: uppercase;"><?php echo $details->last_name;?></b></button>
            <button type="button" class="btn btn-default btn-flat dropdown-toggle dropdown-icon" data-toggle="dropdown">
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" title="Update_Profile"
                    onclick="change_profile(<?php echo $details->account_id?>)" style="cursor: pointer;">Update
                    Profile</a>
                <a class="dropdown-item" href="javascript:void(0)" title="Change_Password"
                    onclick="change_pass(<?php echo $details->account_id?>)" style="cursor: pointer;">Change
                    Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=site_url('logout/'.'');?>">Log Out</a>
            </div>
        </div>


        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-white elevation-4" style="background-color:#47E3C4;">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="<?php echo base_url('assets/img/sanggunian.png');?>" class="rounded-circle img-fluid" alt="logo"
            style="width: 60px;"> <span class="brand-text font-weight-bold">SB Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <i class="fa-solid fa-id-card-clip"></i>
            </div>
            <span><a href="#" class="d-block" style="text-transform: uppercase;">&nbsp;<?php echo $details->type;?>
                </a></span>
        </div>

        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-header">OPTIONS</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('home');?>" class="nav-link">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('ingoing');?>" class="nav-link active">
                        <i class="fa-solid fa-file-import"></i>
                        <p>
                            Ingoing
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('outgoing');?>" class="nav-link">
                        <i class="fa-solid fa-file-export"></i>
                        <p>
                            Outgoing
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('document');?>" class="nav-link">
                        <i class="fa-solid fa-folder-open"></i>
                        <p>
                            Documents
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('account');?>" class="nav-link">
                        <i class="fa-solid fa-id-card"></i>
                        <p>
                            Account Management
                        </p>
                    </a>
                </li>
            </ul>


        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ingoing</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Home</a></li>
                        <li class="breadcrumb-item active">Ingoing</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <?php alert_message('status'); ?>
                            <h3 class="card-title"><b><i class="fa-solid fa-file-import"></i> INGOING SUBMISSION</b>
                            </h3>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="#" id="form" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Current Date and Time</label>
                                    <div class="col-sm-10">
                                        <b>
                                            <p id="time" style="font-family: Arial, Helvetica, sans-serif;"></p>
                                        </b>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title <span
                                            style="color:red">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" maxlength="5000" class="form-control" required>
                                        <span id="title_error" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Time <span style="color:red">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="time" name="time" class="form-control" required>
                                        <span id="time_error" class="text-danger"></span>
                                    </div>
                                </div>
                            </form>
                            <div class="col-md-12 bg-light text-right">
                                <button type="button" id="btnSave" onclick="save()"
                                    class="btn btn-primary">Submit</button>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- /.row -->
                </div><!-- /.container-fluid -->
    </section>

</div>
<!-- /.content-wrapper -->

<!-- Bootstrap Update Profile modal -->
<div class="modal fade" id="change_modal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="change_form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">First Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input name="first_name" placeholder="First Name..." class="form-control" type="text"
                                    required>
                                <span id="firstname_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Middle Name</label>
                            <div class="col-sm-10">
                                <input name="middle_name" placeholder="Middle Name..." class="form-control" type="text">
                                <span id="middlename_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Last Name <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input name="last_name" id="last_name" placeholder="Last Name..." class="form-control"
                                    type="text" required>
                                <span id="lastname_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input name="email" placeholder="Email..." class="form-control" type="email" required>
                                <span id="email_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Contact Number</label>
                            <div class="col-sm-10">
                                <input name="phone" placeholder="Contact Number..." class="form-control"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type="number" minlength="11" maxlength="11" onpaste="return false;">
                                <span id="phone_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Job Position <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input name="position" placeholder="Job Position..." class="form-control" type="text"
                                    required>
                                <span id="position_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Username <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <input name="username" id="username" placeholder="Username..." class="form-control"
                                    type="text" required>
                                <span id="username_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="changeBtn" onclick="save_profile()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<!-- Bootstrap Change Password modal -->
<div class="modal fade" id="password_modal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <form action="#" id="password_form" class="form-horizontal">
                    <input type="hidden" value="" name="id" />
                    <div class="form-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Current Password <span
                                    style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <input name="current" id="current" placeholder="Current Password..."
                                        class="form-control" type="password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-eye" onClick="showpwd11('current', this)"
                                                style="cursor: pointer;"></i>
                                        </div>
                                    </div>
                                </div>
                                <span id="current_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">New Password <span style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <input name="new" id="new"
                                        placeholder="Password must be at least more than 6 letters, 1 uppercase letter, and 1 number..."
                                        class="form-control" type="password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-eye" onClick="showpwd12('new', this)"
                                                style="cursor: pointer;"></i>
                                        </div>
                                    </div>
                                </div>
                                <span id="new_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Confirm Password <span
                                    style="color:red">*</span></label>
                            <div class="col-sm-10">
                                <div class="input-group mb-3">
                                    <input name="confirm1" id="confirm1" placeholder="Confirm Password..."
                                        class="form-control" type="password" required>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fa-solid fa-eye" onClick="showpwd13('confirm1', this)"
                                                style="cursor: pointer;"></i>
                                        </div>
                                    </div>
                                </div>
                                <span id="confirm1_error" class="text-danger"></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="passBtn" onclick="save_password()" class="btn btn-primary">Change
                    Password</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->