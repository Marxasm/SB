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
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
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
                      <a href="<?php echo base_url('ingoing');?>" class="nav-link">
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
                      <a href="<?php echo base_url('document');?>" class="nav-link active">
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
                      <h1>Documents</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item">Home</a></li>
                          <li class="breadcrumb-item active">Documents</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <?php alert_message('status'); ?>
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title"><b><i class="fa-solid fa-file-import"></i> INGOING DOCUMENTS</b>
                              </h3>

                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th style="text-align:center;">#</th>
                                          <th style="text-align:center;">Ingoing ID</th>
                                          <th style="text-align:center;">Title</th>
                                          <th style="text-align:center;">Time</th>
                                          <th style="text-align:center;">Date</th>
                                          <th style="text-align:center;">Status</th>
                                          <th style="text-align:center;">Action</th>

                                      </tr>
                                  </thead>
                                  <tbody style="text-align:center;">
                                      <tr>
                                      </tr>
                                  </tbody>
                                  <tr>
                                      <tfoot>
                                          <th style="text-align:center;">#</th>
                                          <th style="text-align:center;">Ingoing ID</th>
                                          <th style="text-align:center;">Title</th>
                                          <th style="text-align:center;">Time</th>
                                          <th style="text-align:center;">Date</th>
                                          <th style="text-align:center;">Status</th>
                                          <th style="text-align:center;">Action</th>
                              </table>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>

                  <!-- /.row -->
              </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title"><b><i class="fa-solid fa-file-export"></i> OUTGOING DOCUMENTS</b>
                              </h3>

                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="example3" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th style="text-align:center;">#</th>
                                          <th style="text-align:center;">Outgoing ID</th>
                                          <th style="text-align:center;">Title</th>
                                          <th style="text-align:center;">Time</th>
                                          <th style="text-align:center;">Date</th>
                                          <th style="text-align:center;">Status</th>
                                          <th style="text-align:center;">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody style="text-align:center;">
                                      <tr>
                                      </tr>
                                  <tfoot>
                                      <th style="text-align:center;">#</th>
                                      <th style="text-align:center;">Outgoing ID</th>
                                      <th style="text-align:center;">Title</th>
                                      <th style="text-align:center;">Time</th>
                                      <th style="text-align:center;">Date</th>
                                      <th style="text-align:center;">Status</th>
                                      <th style="text-align:center;">Action</th>
                              </table>
                          </div>
                          <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
                  </div>

                  <!-- /.row -->
              </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Bootstrap Update Ingoing modal -->
  <div class="modal fade" id="modal_form" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h3 class="modal-title"></h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body form">
                  <form action="#" id="form" class="form-horizontal">
                      <input type="hidden" value="" name="id" />
                      <input type="hidden" value="" name="date" />
                      <input type="hidden" value="" name="hid_type" />
                      <input type="hidden" value="" name="hid_title" />
                      <input type="hidden" value="" name="hid_time" />
                      <input type="hidden" value="" name="hid_status" />
                      <div class="form-body">
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Title <span style="color:red">*</span></label>
                              <div class="col-sm-10">
                                  <input name="title" placeholder="Title" class="form-control" type="text">
                                  <span id="title_error" class="text-danger"></span>
                                  <span class="help-block"></span>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Time <span style="color:red">*</span></label>
                              <div class="col-sm-10">
                                  <input name="time" placeholder="Time" class="form-control" type="time">
                                  <span id="time_error" class="text-danger"></span>
                                  <span class="help-block"></span>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  <!-- Bootstrap Delete Ingoing modal -->
  <div class="modal fade" id="modal_form1" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h3 class="modal-title"></h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body form">
                  <form action="#" id="form" class="form-horizontal">
                      <input type="hidden" value="" name="id" />
                      <div class="form-body">
                          <label>Are you sure you want to delete this row?</label>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" id="btnSave" onclick="in_delete()" class="btn btn-primary">Delete</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  <!-- Bootstrap Update Outgoing modal -->
  <div class="modal fade" id="modal_out_form" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h3 class="modal-title"></h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body form">
                  <form action="#" id="form1" class="form-horizontal">
                      <input type="hidden" value="" name="id" />
                      <input type="hidden" value="" name="date" />
                      <input type="hidden" value="" name="hid_type" />
                      <input type="hidden" value="" name="hid_title" />
                      <input type="hidden" value="" name="hid_time" />
                      <input type="hidden" value="" name="hid_status" />
                      <div class="form-body">
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Title <span style="color:red">*</span></label>
                              <div class="col-sm-10">
                                  <input name="title" placeholder="Title" class="form-control" type="text" required>
                                  <span id="title1_error" class="text-danger"></span>
                                  <span class="help-block"></span>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Time <span style="color:red">*</span></label>
                              <div class="col-sm-10">
                                  <input name="time" placeholder="Time" class="form-control" type="time" required>
                                  <span id="time1_error" class="text-danger"></span>
                                  <span class="help-block"></span>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" id="btnSave1" onclick="save1()" class="btn btn-primary">Save</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->

  <!-- Bootstrap Delete Outgoing modal -->
  <div class="modal fade" id="modal_out_form1" role="dialog">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h3 class="modal-title"></h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body form">
                  <form action="#" id="form1" class="form-horizontal">
                      <input type="hidden" value="" name="id" />
                      <div class="form-body">
                          <label>Are you sure you want to delete this row?</label>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button type="button" id="btnSave1" onclick="out_delete()" class="btn btn-primary">Delete</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- End Bootstrap modal -->