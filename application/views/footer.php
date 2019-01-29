</div>
<!-- ============================================================== -->
<!-- end main wrapper -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
<script src="<?php echo base_url('assets/') ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/vendor/multi-select/js/jquery.multi-select.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/libs/js/main-js.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/') ?>assets/vendor/datatables/js/data-table.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
<script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

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
</script>
</body>

</html>