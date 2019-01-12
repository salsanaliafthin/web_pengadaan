<?php $this->load->view('header') ?>
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Pengadaan</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Basic Table</h5>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Nomer</label>
                                <input type="text" name="nomer" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Inisiator</label>
                                <select name="inisiator" id="" class="form-control">
                                    <option value="">Jabatan 1</option>
                                    <option value="">Jabatan 1</option>
                                    <option value="">Jabatan 1</option>
                                    <option value="">Jabatan 1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Penandatanganan</label>
                                <button class="btn btn-primary ml-3 btn-sm" onclick="add_penandatanganan(); return false;"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="row" id='container-penandatangan'>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="text" name="Keterangan" class="form-control">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
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
</div>
<div class="fade" id="sample-penandatanganan">
    <div class="col-md-4" id="form-penandatanganan">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-md-6">Nama Perseroan</label>
                                                <input type="text" class="form-control col-md-6">
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Perwakilan</label>
                                                <input type="text" class="form-control col-md-6">
                                            </div>
                                        </div>
                                    </div>
                                </div>
</div>
<?php $this->load->view('footer') ?>
<script>
    function add_penandatanganan() {
        var sample = $('#sample-penandatanganan').html();
        $('#container-penandatangan').append(sample);
            }
</script>