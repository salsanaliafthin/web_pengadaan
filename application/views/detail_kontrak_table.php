<?php $this->load->view('header') ?>
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">DASHBOARD </h2>
                        <p class="pageheader-text">JSM</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard Superadmin</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->



            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                 <div class="card-header">
                            <a href="<?php echo site_url('Listpengadaan') ?>"><i class="fas fa-arrow-left"></i>Back to List Pengadaan</a>
                        </div>
                                <h5 class="card-header">Detail Kontrak</h5>
                                <div class="card-body" style="width: 50%">
                                    <table class="table">
                                        <tr>
                                            <td>Nama </td>
                                            <td> : </td>
                                            <td><?php echo $kontrak->nama ?></td>
                                        </tr>
                                        <?php foreach ($kontrak_sub as $key => $value): ?>
                                            <tr>
                                                <td> -> Sub Nama <?php echo ++$key ?></td>
                                                <td> : </td>
                                                <td><?php echo $value->nama ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                        <tr>
                                            <td>Tanggal </td>
                                            <td> : </td>
                                            <td><?php echo $kontrak->tanggal ?></td>
                                        </tr>
                                        <!-- terusin -->
                                        <?php foreach ($kontrak_penandatanganan as $key => $value): ?>
                                            <tr>
                                                <td> -> Sub Nama <?php echo ++$key ?></td>
                                                <td> : </td>
                                                <td><?php echo $value->nama_perseroan.' an. '.$value->nama_perwakilan ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- ============================================================== -->
                        <!-- basic table  -->
                        <!-- ============================================================== -->
                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <?php $this->load->view('footer') ?>