<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="<?= base_url() ?>assets/images/logoBI_2.png" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="Bank Indonesia, Pension Fund Tracker">
        <title>Pension Fund Tracker</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="<?= base_url() ?>assets/template/dist/css/app.css" />
        <!-- END: CSS Assets-->
        <!-- Toast -->
        <link rel="stylesheet" href="<?= base_url('/assets/plugins'); ?>/toastr/toastr.min.css">
        <link rel="stylesheet" href="<?= base_url('/assets/plugins'); ?>/chart.js/chart.min.css">
        <!-- Datatables -->
        <link rel="stylesheet" href="<?= base_url('assets/plugins'); ?>/datatables-bs4/css/dataTables.bootstrap4.css">
        <!-- jQuery -->
        <script src="<?= base_url("assets/plugins/") ?>/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/plugins'); ?>/chart.js/Chart.min.js"></script>  
        <!-- DataTables -->
        <script src="<?= base_url(); ?>assets/plugins/datatables/jquery.dataTables.js"></script>
        <script src="<?= base_url(); ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    </head>
    <!-- END: Head -->
    <!-- Alert Error -->
    <?php
      $error = $this->session->flashdata('error');
      if ($error) {
      ?>
        <script type="text/javascript">
            $(function() {
              const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 5000
              });

              Toast.fire({
                icon: 'error',
                title: '&nbsp;<?php echo $error ?>'
              })
            });
        </script>
      <?php }
    ?>

    <!-- Alert Success -->
    <?php
      $success = $this->session->flashdata('success');
      if ($success) {
      ?>
        <script type="text/javascript">
            $(function() {
              const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                showCloseButton: true,
                timer: 5000
              });

              Toast.fire({
                icon: 'success',
                title: '&nbsp;<?php echo $success ?>'
              })
            });
        </script>
      <?php } ?>
    <body class="main">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] mt-12 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="<?= site_url() ?>" class="-intro-x hidden md:flex">
                    <img alt="" class="w-32" src="<?= base_url() ?>assets/images/logoBI_2.png">
                    <!-- <span class="text-white text-lg ml-3"> Pension Fund Tracker </span>  -->
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                    <ol class="breadcrumb breadcrumb-light">
                        <li class="breadcrumb-item"><a href="<?= site_url() ?>">Application</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                    </ol>
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="" src="<?= base_url() ?>assets/images/user.png">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium"><?= implode(' ', array_slice(explode(' ', $this->session->userdata('admin_pension_fund_tracker_data')['name']), 0, 2)) ?></div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Selamat Datang!</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="<?= base_url("logout") ?>" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
        </div>
        <!-- END: Top Bar -->
        
        <div class="wrapper">
            <div class="wrapper-box">
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav">
                    <ul>
                        <li>
                            <a href="<?= base_url() ?>" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                                <div class="side-menu__title">
                                    Dashboard 
                                </div>
                            </a>
                        </li>
                        <li class="side-nav__devider my-4"></li>
                        <li>
                            <a href="<?= base_url() ?>data-peserta" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                                <div class="side-menu__title">
                                    Data Peserta 
                                </div>
                            </a>
                        </li>
                        <li class="side-nav__devider my-4"></li>
                        <li>
                            <a href="<?= base_url() ?>setting-nilai-asumsi" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                                <div class="side-menu__title">
                                    Nilai Asumsi
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>setting-portofolio-ppip" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                                <div class="side-menu__title">
                                    Portofolio PPIP
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>setting-portofolio-personal-pasar-keuangan" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="settings"></i> </div>
                                <div class="side-menu__title">
                                    Portofolio Personal Pasar Keuangan
                                </div>
                            </a>
                        </li>
                        <li class="side-nav__devider my-4"></li>
                        <li>
                            <a href="<?= base_url() ?>admin" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="wrench"></i> </div>
                                <div class="side-menu__title">
                                    Administrator
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url() ?>pengumuman" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="megaphone"></i> </div>
                                <div class="side-menu__title">
                                    Pengumuman
                                </div>
                            </a>
                        </li>
                        <li class="side-nav__devider my-4"></li>
                        <li>
                            <a href="<?= base_url() ?>export" class="side-menu ">
                                <div class="side-menu__icon"> <i data-lucide="printer"></i> </div>
                                <div class="side-menu__title">
                                    Excel Export
                                </div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- END: Side Menu -->