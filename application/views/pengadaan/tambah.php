<?php $this->load->view('header') ?>
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">TAMBAH DATA</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tabel Pengadaan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Sub Nama</label>
                                <button class="btn btn-primary ml-3 btn-sm" onclick="add_subnama(); return false;"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="" id='container-subnama'>

                            </div>

                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d') ?>">
                            </div>

                            <div class="form-group">
                                <label for="">Nomor</label>
                                <input type="text" name="nomor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Inisiator</label>
                                <select name="inisiator" id="" class="form-control">
                                    <option>Jabatan 1</option>
                                    <option>Jabatan 2</option>
                                    <option>Jabatan 3</option>
                                    <option>Jabatan 4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nilai Kontrak</label>
                                <input type="text" name="nilai" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Cara Pembayaran:</label>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                  <input type="radio"  checked id="carapembayaran1" name="carapembayaran" class="custom-control-input" value="langsung">
                                  <label class="custom-control-label" for="carapembayaran1">Langsung</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="carapembayaran2" name="carapembayaran" class="custom-control-input" value="petermin">
                                  <label class="custom-control-label" for="carapembayaran2">Pertermin</label>
                                  <div class="input-group ml-3">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-success btn-xs" onclick="petermin_plus();" type="button" id="button-peterminplus"><li class="fa fa-plus"></li></button>
                                    </div>
                                    <input type="number" name="petermin" class="form-control form-xs" value="0" max="100" min="0" id="input-petermin">
                                    <div class="input-group-append">
                                        <button class="btn btn-danger btn-xs"  onclick="petermin_minus();" type="button" id="button-peterminminus"><li class="fa fa-minus"></li></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="">Penandatanganan</label>
                                <button class="btn btn-primary ml-3 btn-sm" onclick="add_penandatanganan(); return false;"><i class="fas fa-plus"></i></button>
                                
                            <div class="row" id='container-penandatangan'>

                            </div>
                        <div class="form-group">
                            <label for="">Jangka Waktu</label>

                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Pelaksanaan</label>
                            <div class="col-md-3"> 
                                <input type="date" class="form-control" name="pelaksanaan_from">
                            </div>
                            <div class="col-md-1 text-middle"> 
                                <input type="text" readonly value="sd" class="form-control-plaintext">
                            </div>
                            <div class="col-md-3"> 
                                <input type="date" class="form-control" name="pelaksanaan_to">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Pemeliharaan</label>
                            <div class="col-md-3"> 
                                <input type="date" class="form-control" name="pemeliharaan_from">
                            </div>
                            <div class="col-md-1 text-middle"> 
                                <input type="text" readonly value="sd" class="form-control-plaintext">
                            </div>
                            <div class="col-md-3"> 
                                <input type="date" class="form-control" name="pemeliharaan_to">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-3">Garansi Jaminan</label>
                            <div class="col-md-3"> 
                                <input type="date" class="form-control" name="garansijaminan_from">
                            </div>
                            <div class="col-md-1 text-middle"> 
                                <input type="text" readonly value="sd" class="form-control-plaintext">
                            </div>
                            <div class="col-md-3"> 
                                <input type="date" class="form-control" name="garansijaminan_to">
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea name="keterangan" class="form-control"></textarea>
                            </div>
                        <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                    <option>Drafting
                                    <option>On Progress</option>
                                    <option>Signing</option>
                                    <option>On Going</option>
                                    <option>Done</option>
                                </select>
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
                    Copyright 2019. All rights reserved.</a>
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
                    <input type="text" name="namaperseroan[]" class="form-control col-md-6">
                </div>
                <div class="form-group row">
                    <label class="col-md-6">Perwakilan</label>
                    <input type="text" name="perwakilan[]" class="form-control col-md-6">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="fade" id="sample-subnama">
    <div class="form-group row">
        <div class="col-md-1"></div>
        <label class="col-md-3">Nama Sub Kontrak</label>
        <input type="text" name="subkontrak[]" class="form-control col-md-4">
    </div>
</div>
<?php $this->load->view('footer') ?>
<script>
function add_penandatanganan() {
    var sample = $('#sample-penandatanganan').html();
    $('#container-penandatangan').append(sample);
}
function add_subnama() {
    var sample = $('#sample-subnama').html();
    $('#container-subnama').append(sample);
}

function petermin_plus() {
    var val = parseInt($('#input-petermin').val());
    val++;
    if (val >= 100) {
        val = 100;
    }
    if (val <= 0) {
        val = 0;
    }
    $('#input-petermin').val(val);
}
function petermin_minus() {
    var val = parseInt($('#input-petermin').val());
    val--;
    if (val >= 100) {
        val = 100;
    }
    if (val <= 0) {
        val = 0;
    }
    $('#input-petermin').val(val);
}
</script>