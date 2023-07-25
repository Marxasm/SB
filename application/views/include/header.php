<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sangguniang Bayan Office Information System</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico');?>">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASE_URL(); ?>/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?php echo BASE_URL(); ?>/public/plugins/toastr/toastr.min.css">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="<?php echo BASE_URL(); ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo BASE_URL(); ?>/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?php echo BASE_URL(); ?>/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="<?php echo BASE_URL(); ?>/public/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASE_URL(); ?>/public/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL(); ?>/assets/faicons/css/all.min.css">
    <style>
    * {
        box-sizing: border-box;
    }

    .row {
        margin-left: -5px;
        margin-right: -5px;
    }

    .column {
        float: left;
        width: 50%;
        padding: 5px;
    }

    /* Clearfix (clear floats) */
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: center;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">