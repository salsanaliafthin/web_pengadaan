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
                                    <li class="breadcrumb-item"><a href="<?php echo site_url('Dashboard') ?>" class="breadcrumb-link">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Status pengadaan</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
      <div class="col-xl-3 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
        <div class="card-body-icon">
        </div>
        <div class="mr-5"><?php echo $this->db->select('count(id) as jml')->where('status',"Warning")->get('kontrak')->row(0)->jml ?> Warning</div>
        </div>
        <a class="card-footer text-dark clearfix small z-1">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
        
        </a>
      </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-right">
            
           
          </div>
        </div>
         
    <div class="card mb-3">
      <div class="card-header">
      <i class="fas fa-chart-area"></i>
      Status Pengadaan</div>

      <div class="row">
          <div class="col-lg-8 mx-auto text-right">
            <br>
            <a href="#" class="btn btn-primary" onclick="showchart()">Chart</a>
            <a href="#" class="btn btn-success" onclick="showbar()">Bar</a>
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
            
          </div>
        </div>
       
       <br>
        <div class="row" id="chart-container">
          <div class="col-lg-5 mx-auto text-center">
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
          <div class="col-lg-8 mx-auto text-center">
             <canvas id="myBarChart" width="150%" height="80" data-drafting='<?php echo $retDrafting ?>' data-onprogress='<?php echo $retOnprogress ?>' data-signing='<?php echo $retSigning ?>' data-ongoing='<?php echo $retOngoing ?>' data-done='<?php echo $retDone ?>'></canvas>
          </div>
        </div>

      </div>


<?php $this->load->view('footer') ?>