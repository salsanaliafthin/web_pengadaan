<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Tabel</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets_home/') ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets_home/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets_home/') ?>vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets_home/') ?>css/creative.min.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>assets/vendor/datatables/css/fixedHeader.bootstrap4.css">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-inverse fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">JSM</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#chart">Chart</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">List Pengadaan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>PORTAL PENGADAAN</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5"> PT. Jasa Marga Surabaya Mojokerto</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="<?php echo site_url('Login') ?>">LOGIN</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="chart">
      <div class="container">
        <div class="row">

<<<<<<< HEAD
        <div class="col-lg-9 mx-auto text-center">
=======
        <div class="col-lg-8 mx-auto text-center">
>>>>>>> 532c40366db7300ca5db4c3996c53c358a8e4014
            <button href="#" class="btn btn-dark" onclick="showchart()">Chart</button>
            <button href="#" class="btn btn-dark" onclick="showbar()">Bar</button>
            <script>
                function showchart() {
                    // body...
                    $("#chart-container").fadeIn();
                    $("#bar-container").fadeOut();
                }function showbar() {
                    // body...
                    $("#chart-container").fadeOut();
                    $("#bar-container").fadeIn();
                }

            </script>
            <hr class="my-3">

        <div class="row" id="chart-container">
          <div class="col-lg-6 mx-auto text-center">
                                    <canvas id="myChart" width="100%" height="100%"></canvas>
          </div>
        </div>

        <?php 
      $this->db->select('month(tanggal) as bulan,count(id) as jumlah');
      $this->db->from('kontrak');
      $this->db->group_by('month(tanggal)');
      $this->db->where('status','Drafting');
      $this->db->where('year(tanggal)','2019');
      $resDrafting = $this->db->get()->result();
      $retDrafting = "[";
      $idx = 0;
      for ($i=0; $i < 12; $i++) {  
       if(count($resDrafting) == 0 || !isset($resDrafting[$idx])){
          $retDrafting .= '"0",';
        }else if ($resDrafting[$idx]->bulan == ($i+1)) {
          $retDrafting .= '"'.$resDrafting[$idx]->jumlah.'",';
          $idx++;
        }else{
          $retDrafting .= '"0",';
        }
      }
      $retDrafting = substr($retDrafting, 0,-1)."]";

       ?>

       <?php 
      $this->db->select('month(tanggal) as bulan,count(id) as jumlah');
      $this->db->from('kontrak');
      $this->db->group_by('month(tanggal)');
      $this->db->where('status','On progress');
      $this->db->where('year(tanggal)','2019');
      $resOnprogress = $this->db->get()->result();
      $retOnprogress= "[";
      $idx = 0;
      for ($i=0; $i < 12; $i++) {  
       if(count($resOnprogress) == 0 || !isset($resOnprogress[$idx])){
          $retOnprogress.= '"0",';
        }else if ($resOnprogress[$idx]->bulan == ($i+1)) {
          $retOnprogress.= '"'.$resOnprogress[$idx]->jumlah.'",';
          $idx++;
        }else{
          $retOnprogress.= '"0",';
        }
      }
      $retOnprogress= substr($retOnprogress, 0,-1)."]";

       ?>

       <?php 
      $this->db->select('month(tanggal) as bulan,count(id) as jumlah');
      $this->db->from('kontrak');
      $this->db->group_by('month(tanggal)');
      $this->db->where('status','Signing');
      $this->db->where('year(tanggal)','2019');
      $resSigning = $this->db->get()->result();
      $retSigning = "[";
      $idx = 0;
      for ($i=0; $i < 12; $i++) {  
       if(count($resSigning) == 0 || !isset($resSigning[$idx])){
          $retSigning .= '"0",';
        }else if ($resSigning[$idx]->bulan == ($i+1)) {
          $retSigning .= '"'.$resSigning[$idx]->jumlah.'",';
          $idx++;
        }else{
          $retSigning .= '"0",';
        }
      }
      $retSigning = substr($retSigning, 0,-1)."]";

       ?>

       <?php 
      $this->db->select('month(tanggal) as bulan,count(id) as jumlah');
      $this->db->from('kontrak');
      $this->db->group_by('month(tanggal)');
      $this->db->where('status','On going');
      $this->db->where('year(tanggal)','2019');
      $resOngoing = $this->db->get()->result();
      $retOngoing = "[";
      $idx = 0;
      for ($i=0; $i < 12; $i++) {  
       if(count($resOngoing) == 0 || !isset($resOngoing[$idx])){
          $retOngoing .= '"0",';
        }else if ($resOngoing[$idx]->bulan == ($i+1)) {
          $retOngoing .= '"'.$resOngoing[$idx]->jumlah.'",';
          $idx++;
        }else{
          $retOngoing .= '"0",';
        }
      }
      $retOngoing = substr($retOngoing, 0,-1)."]";

       ?>

       <?php 
      $this->db->select('month(tanggal) as bulan,count(id) as jumlah');
      $this->db->from('kontrak');
      $this->db->group_by('month(tanggal)');
      $this->db->where('status','Done');
      $this->db->where('year(tanggal)','2019');
      $resDone = $this->db->get()->result();
      $retDone = "[";
      $idx = 0;
      for ($i=0; $i < 12; $i++) {  
       if(count($resDone) == 0 || !isset($resDone[$idx])){
          $retDone .= '"0",';
        }else if ($resDone[$idx]->bulan == ($i+1)) {
          $retDone .= '"'.$resDone[$idx]->jumlah.'",';
          $idx++;
        }else{
          $retDone .= '"0",';
        }
      }
      $retDone = substr($retDone, 0,-1)."]";

       ?>

<br>
        <div class="row" id="bar-container" style="display: none">
          <div class="col-lg-12 mx-auto text-center">
             <canvas id="myBarChart" width="170%" height="80" data-drafting='<?php echo $retDrafting ?>' data-onprogress='<?php echo $retOnprogress ?>' data-signing='<?php echo $retSigning ?>' data-ongoing='<?php echo $retOngoing ?>' data-done='<?php echo $retDone ?>'></canvas>
          </div>
        </div>

      </div>
    </section>

    <section id="about" class="bg-dark text-dark">
     <div class="row">
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto text-center"  >
                        <div class="page-header">
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-11 col-lg-11 col-md-11 col-sm-11 col-11 mx-auto text-center"  >
                    
                        <div class="card">
    
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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($this->db->get('kontrak')->result() as $key => $value): ?>
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
                                                        <tr class="<?php echo ($month == 0 ? "" : "") ?>">
                                                    <td><?php echo ++$key ?></td>
                                                    <td><?php echo $value->nomor; ?></td>
                                                    <td><?php echo $value->nama; ?></td>
                                                    <td><?php echo $value->tanggal; ?></td>
                                                    <td><?php echo $value->inisiator_nama." - ".$value->inisiator_devisi; ?></td>
                                                    <td><?php echo $value->status; ?></td>
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
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
                
            </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">CONTACT WITH US!</h2>
            <hr class="my-4">
            <p class="mb-5">Gedung MNA, Jl. Raya Taman, Plaza Tol Waru I & Ramp, Sidoarjo 61257 </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>(031) 7879994</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">info@tolsumo.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets_home/') ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('assets_home/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url('assets_home/') ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url('assets/') ?>assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
     <script src="<?php echo base_url('assets/') ?>assets/vendor/datatables/js/data-table.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('assets_home/') ?>js/creative.min.js"></script>

<!-- chartjs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
<?php 
$this->db->select('status,count(id) as jml');
$this->db->group_by('status');
$query = $this->db->get('kontrak');
$res = $query->result();
$data = "[";
$idx = 0;
for ($i=0; $i < 5; $i++) { 
    if (($idx+1) <= count($res)) {
        $value = $res[$idx];
        if ($value->status == "Drafting") {
            $data .= $value->jml.",";

            $idx++;
        }else if ($value->status == "On Progress") {
            $data .= $value->jml.",";

            $idx++;
        }else if ($value->status == "Signing") {
            $data .= $value->jml.",";

            $idx++;
        }else if ($value->status == "On Going") {
            $data .= $value->jml.",";

            $idx++;
        }else if ($value->status == "Done") {
            $data .= $value->jml.",";

            $idx++;
        }else{
            $data .= "0,";
        }
    }else{
        $data .= "0,";
    }
    

}
$data = substr($data, 0,-1);
$data .= "]";
?>
<script>
data = {
    datasets: [{
        data: <?php echo $data ?>,
        backgroundColor: [
                'rgba(255, 99, 132, 0.5)', //editen wana e ada 5 juga 1 2 3 4 5 6 6 
                'rgba(54, 162, 235, 0.5)',
                'rgba(66, 134, 244, 0.5)',
                'rgba(208, 89, 255, 0.5)',
                'rgba(255, 125, 89, 0.5)', //
                ],
            }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
    'Drafting',
    'On progress',
    'signing',
    'on going',
    'done',
    ],
    
};
var myPieChart = new Chart($('#myChart'),{
    type: 'pie',
    data: data,
});

var ctx = document.getElementById("myBarChart");
var Drafting = $('#myBarChart').data('drafting');
var Onprogress = $('#myBarChart').data('onprogress');
var Signing = $('#myBarChart').data('signing');
var Ongoing = $('#myBarChart').data('ongoing');
var Done = $('#myBarChart').data('done');
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: "Drafting",
      backgroundColor: "rgba(2,117,216,0.5)",
      borderColor: "rgba(2,117,216,1)",
      data: Drafting,
    },{
      label: "Onprogress",
      backgroundColor: "rgba(191, 19, 53,0.5) ",
      borderColor: "rgba(191, 19, 53,1)",
      data: Onprogress,

    },{
      label: "Signing",
      backgroundColor: "rgba(138, 255, 84, 0.5)",
      borderColor: "rgba(138, 255, 84, 1)",
      data: Signing,
    },{
      label: "Ongoing",
     backgroundColor: "rgba(208, 89, 255, 0.5)",
      borderColor: "rgba(208, 89, 255, 1)",
      data: Ongoing,
    },{
      label: "Done",
        backgroundColor: "rgba(255, 125, 89, 0.5)",
      borderColor: "rgba(255, 125, 89, 1)",
      data: Done,
    }],
  }
});
</script>


  </body>

</html>
