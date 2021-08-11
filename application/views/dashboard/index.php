<!-- Quick Info -->

<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box noradius noborder bg-danger">
            <i class="fa fa-users float-right text-white"></i>
            <h6 class="text-white text-uppercase m-b-20">PENGIRIM</h6>
            <h1 class="m-b-20 text-white counter">
                <?php foreach ($count_pengirim as $total_pengirim) {
                    echo $total_pengirim['total'];
                } ?>
            </h1>
            <span class="text-white">Customer</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box noradius noborder bg-purple">
            <i class="fa fa-ship float-right text-white"></i>
            <h6 class="text-white text-uppercase m-b-20">BARANG MASUK</h6>
            <h1 class="m-b-20 text-white counter">
                <?php foreach ($count_barang as $total_barang) {
                    echo $total_barang['total'];
                } ?>
            </h1>
            <span class="text-white">In Kargo</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box noradius noborder bg-warning">
            <i class="fa fa-truck float-right text-white"></i>
            <h6 class="text-white text-uppercase m-b-20">BARANG KELUAR</h6>
            <h1 class="m-b-20 text-white counter">
                <?php foreach ($count_barang as $total_barang) {
                    echo $total_barang['total'];
                } ?></h1>
            <span class="text-white">Out Kargo</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box noradius noborder bg-info">
            <i class="far fa-user float-right text-white"></i>
            <h6 class="text-white text-uppercase m-b-20">PENERIMA</h6>
            <h1 class="m-b-20 text-white counter">
                <?php foreach ($count_pengirim as $total_pengirim) {
                    echo $total_pengirim['total'];
                } ?>
            </h1>
            <span class="text-white">Client</span>
        </div>
    </div>
</div>
<!-- end Quick Info -->

<!-- Chart -->
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-chart-bar"></i> Barang In Out</h3>
                <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus.
                                    Vivamus fermentum ultricies orci sit amet sollicitudin. -->
            </div>

            <div class="card-body">
                <canvas id="comboBarLineChart"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated <?php echo date('d-m-Y H:i:s'); ?></div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
        <div class="card mb-3">
            <div class="card-header">
                <h3><i class="fas fa-chart-bar"></i> Income</h3>
                <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus.
                                    Vivamus fermentum ultricies orci sit amet sollicitudin. -->
            </div>

            <div class="card-body">
                <canvas id="barChart"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated <?php echo date('d-m-Y H:i:s'); ?></div>
        </div>
    </div>
</div>
<!-- end Chart -->


<div class="card mb-3">
    <div class="card-header">
        <h3><i class="fas fa-user-friends"></i> History Barang</h3>
        <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus.
                                    Vivamus fermentum ultricies orci sit amet sollicitudin. -->
    </div>

    <div class="card-body">

        <div class="table-responsive">
            <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                <thead>
                    <tr>
                        <th>No Resi</th>
                        <th>Posisi</th>
                        <th>Status</th>
                        <th>Extn.</th>
                        <th>Date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
            </table>
        </div>
        <!-- end table-responsive-->
    </div>
    <!-- end card-body-->
</div>