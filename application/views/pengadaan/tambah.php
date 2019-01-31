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
                                <li class="breadcrumb-item"><a href="<?php echo site_url('/Dashboard') ?>" class="breadcrumb-link">Dashboard</a></li>
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
                    <div class="card-header">
                            <a href="<?php echo site_url('Listpengadaan') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                        </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nama Kontrak</label>
                                <input type="text" name="nama" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="">Adendum</label>
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
                                <div class="input-group">

                                    <input type="text" value="Nama :" readonly class="form-control col-md-1">
                                    <input type="text" name="inisiator_nama" class="form-control col-md-5">
                                    <input type="text" value="Divisi :" readonly class="form-control col-md-1">
                                    <input type="text" name="inisiator_devisi" class="form-control col-md-5">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="">Pajak:</label>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                  <input type="radio"  checked id="pajak1" name="pajak" class="custom-control-input" value="tanpapajak">
                                  <label class="custom-control-label" for="pajak1">Tanpa Pajak</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="pajak2" name="pajak" class="custom-control-input" value="denganpajak">
                                  <label class="custom-control-label" for="pajak2">Dengan Pajak</label>
                    
                            </div>
                            <script>
                                $("input[name='pajak']").change(function(){
            var radioValue = $("input[name='pajak']:checked").val();
            if(radioValue == 'denganpajak'){
                $('#container-pajak').fadeIn();
            }else{
                $('#container-pajak').fadeOut();
            }
        });
                            </script>
                        </div>
                            <div class="form-group">
                                <label for="">Nilai Kontrak</label>
                                <div class="input-group col-md-6 col-lg-5">
                                    <input type="text" disabled="" class="form-control col-md-4" value="Nilai">
                                    <input type="text" id="input-nilai" name="nilai" class="form-control col-md-8">
                                </div>
                                <div id="container-pajak" style="display: none;">
                                <div class="input-group col-md-6 col-lg-5">
                                    <input type="text" disabled="" class="form-control col-md-4" value="Pajak">
                                    <input type="text" name="pajak" class="form-control col-md-8" value="10%" disabled="">
                                </div>
                                <div class="input-group col-md-6 col-lg-5">
                                    <input type="text" disabled="" class="form-control col-md-4" value="Nilai Pajak">
                                    <input type="text" name="nilai_pajak" class="form-control col-md-8" disabled="">
                                </div>
                                <div class="input-group col-md-6 col-lg-5">
                                    <input type="text" disabled="" class="form-control col-md-4" value="Nilai Total">
                                    <input type="text" name="nilai_total" class="form-control col-md-8" disabled="">
                                </div></div>
                                
                                <script>
                                    $('input[name="nilai"]').change(function(){
                                        var nilai =  parseInt($(this).val());
                                        var nilai_pajak = parseInt(nilai*0.1, 10);
                                        var rp_nilai = String(nilai).replace(/(.)(?=(\d{3})+$)/g,'$1,');
                                        var nilai_total = nilai + nilai_pajak;
                                        var rp_nilai_total = String(nilai_total).replace(/(.)(?=(\d{3})+$)/g,'$1,')
                                        $('input[name="nilai_pajak"]').val("Rp. "+rp_nilai);
                                        $('input[name="nilai_total"]').val("Rp. "+rp_nilai_total);
                                    });
                                </script>
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
                                  <label class="custom-control-label" for="carapembayaran2">Per termin</label>
                                   <button class="btn btn-primary ml-3 btn-sm" onclick="add_petermin(); return false;"><i class="fas fa-plus"></i></button>
                    
                            </div>
                            <div class="" id='container-petermin'>

                            </div>
                        </div>

                        <div class="form-group mt-5">
                            <label for="">Penandatanganan</label>
                            <button class="btn btn-primary ml-3 btn-sm" onclick="add_penandatanganan(); return false;"><i class="fas fa-plus"></i></button>

                            <div class="row" id='container-penandatangan'>

                            </div>
                            <div class="form-group mt-5">
                                <label for="">Jangka Waktu</label>

                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3">Pelaksanaan</label>
                                <div class="col-md-3"> 
                                    <input type="date" class="form-control" name="pelaksanaan_from">
                                </div>
                                <div class="col-md-1 text-middle"> 
                                    <input type="text" readonly value="s/d" class="form-control-plaintext">
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
                                    <input type="text" readonly value="s/d" class="form-control-plaintext">
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
                                    <input type="text" readonly value="s/d" class="form-control-plaintext">
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
                                    <option>Drafting</option>
                                        <option>On Progress</option>
                                        <option>Signing</option>
                                        <option>On Going</option>
                                        <option>Done</option>
                                    </select>
                                </div>

                                <input type="submit" value="Submit" class="btn btn-primary" >
                                <form method="post"  action="<?php echo site_url('Dashboard') ?>">
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
        <label class="col-md-3">Adendum <span id="nokontrak">1</span></label>
        <input type="text" name="subkontrak[]" class="form-control col-md-4">
    </div>
</div>
<div class="fade" id="sample-petermin">
    <div class="form-group row">
        <div class="col-md-1"></div>
        <label class="col-md-12">Petermin <span id="nopetermin">1</span></label>
        <div class="input-group col-md-3">

        <input type="number" value="0" class="form-control petermin-nominal">
        <input type="text" value="0" id="" min="1" max="99" name="petermin[]" class="form-control col-md-2 petermin-persen" readonly=""><div class="input-group-append">
    <span class="input-group-text">%</span>
  </div>
    </div>
    <script>
        $('.petermin-nominal').change(function(){
            var nominal = parseInt($('#input-nilai').val());
            var petermin_nominal = parseInt($(this).val());
            var petermin_persen = (petermin_nominal/nominal) * 100;
            $(this).parent().find(".petermin-persen").val(petermin_persen);
        });
    </script>
    </div>
</div>
<?php $this->load->view('footer') ?>
<script>
    var idxsub = 1;
    var idxpertermin = 1;
    function add_penandatanganan() {
        var sample = $('#sample-penandatanganan').html();

        $('#container-penandatangan').append(sample);
    }
    function add_subnama() {
        var sample = $('#sample-subnama').html();
        idxsub ++;
        $('#sample-subnama').find('#nokontrak').html(idxsub);

        $('#container-subnama').append(sample);
    }
    function add_petermin() {
        var sample = $('#sample-petermin').html();
        idxpertermin ++;
        $('#sample-petermin').find('#nopetermin').html(idxpertermin);

        $('#container-petermin').append(sample);
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