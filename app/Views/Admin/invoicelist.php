<?php include __DIR__.'/../Admin/header.php'; ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Invoice List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>society Name</th>
                                        <th>Building Name</th>
                                        <th>Flat Number</th>
                                        <th>Invoice Date</th>
                                        <th>Print</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($invoice)) {
                                        $i = 1; ?>
                                    <?php foreach ($invoice as $data) {  ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $data->Society; ?></td>
                                        <td><?= $data->Building; ?></td>
                                        <td><?= $data->Flats; ?></td>
                                        <td><?= $data->Bill_Date; ?></td>
                                        <td><a href="invoiceprint/<?=$data->id; ?>" target="_blank" data-toggle="tooltip" title="View Bill">
                                                                                        <i class='far fa-money-bill-alt me-2'></i>
                                                                                    </a></td>
                                    </tr>
                                    <?php $i++;
                                        } ?>
                                    <?php } ?>

                                </tbody>

                            </table>
                        </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__.'/../Admin/footer.php'; ?>