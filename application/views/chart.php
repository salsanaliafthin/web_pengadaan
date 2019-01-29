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
                        <p class="pageheader-text">JSM</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Chart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

             <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Chart Pengadaan</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5 mx-auto text-center">
             <canvas id="myChart" width="100%" height="100%"></canvas>
          </div>
        </div>
      </div>


<?php $this->load->view('footer') ?>