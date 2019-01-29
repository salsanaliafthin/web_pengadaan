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
                        <div class="row">
                            <!-- ============================================================== -->
                            <!-- basic table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">LIST PENGADAAN</h5>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered first">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor Kontrak</th>
                                                        <th>Nama Kontrak</th>
                                                        <th>Tanggal</th>
                                                        <th>Insiator</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($kontrak as $key => $value): ?>
                                                        <?php 
                                                        $date1 = new DateTime(date('Y-m-d'));
                                                        $date2 = new DateTime($value->pelaksanaan_to); // patokan tanggal
                                                        $interval = $date1->diff($date2);
                                                        if ($date1 < $date2) {
                                                            $month = $interval->m;
                                                        }else{
                                                            $month = -1;
                                                        }

                                                        ?>
                                                        <tr class="<?php echo ($month == 0 ? "bg-danger text-white" : "") ?>">
                                                            <td><?php echo ++$key ?></td>
                                                            <td><?php echo $value->nomor ?></td>
                                                            <td><?php echo $value->nama ?></td>
                                                            <td><?php echo $value->tanggal ?></td>
                                                            <td><?php echo $value->inisiator_nama." - ".$value->inisiator_devisi ?></td>
                                                            <td><?php echo $value->status ?></td>
                                                            <td>
                                                                <a href="<?php echo site_url('Dashboard/detail/'.$value->id) ?>" class="btn btn-info btn-sm">Detail</a>
                                                                <a href="<?php echo site_url('Pengadaan/edit/'.$value->id) ?>" class="btn btn-success btn-sm">Edit</a>
                                                                <a href="<?php echo site_url('Pengadaan/delete/'.$value->id) ?>" onclick="confirm('apakah anda yakin?')" class="btn btn-danger btn-sm">Hapus</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nomor Kontrak</th>
                                                        <th>Nama Kontrak</th>
                                                        <th>Tanggal</th>
                                                        <th>Insiator</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            <?php $this->load->view('footer') ?>