
<?php include __DIR__.'/../Admin/header.php'; ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Building<small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url(); ?>create" method="post" id="add_zone">
                            <div class="row card-body">
                                <input type="hidden" name="table" class="form-control" value="tbl_building" id="id">


                                <div class="col-lg-4 col-md-3 col-12 form-group">
                                    <label for="zone">Select Society Name</label>
                                    <select name="Society" id="Society" class="form-control">
                                        <option value="" disabled selected>Select a Society</option>
                                        <?php foreach ($society as $user): ?>
                                        <option value="<?php echo $user->id; ?>">
                                            <?php echo $user->Society; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>


                                <div class="col-lg-4 col-md-3 col-12 form-group">
                                    <label for="Building">Enter Building Name</label>
                                    <input type="text" name="Building" class="form-control" id="Building"
                                        placeholder="Enter Building Name">
                                </div>

                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Municipal Tax">Municipal Tax </label>
                                    <input type="text" name="Municipal_Tax" class="form-control" id="Municipal_Tax" placeholder="Enter Municipal Tax">
                                </div>

                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Electricity Charges">Electricity Charges</label>
                                    <input type="text" name="Electricity_Charges" class="form-control" id="Electricity_Charges" placeholder="Enter Electricity Charges">
                                </div>

                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Water Charges">Water Charges</label>
                                    <input type="text" name="Water_Charges" class="form-control" id="Water_Charges" placeholder="Enter Electricity Charges">
                                </div>

                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Lease Rent Charges">Lease Rent Charges</label>
                                    <input type="text" name="Lease_Rent_Charges" class="form-control" id="Lease_Rent_Charges" placeholder="Enter Lease Rent Charges">
                                </div>

                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Education Fund">Education Fund</label>
                                    <input type="text" name="Education_Fund" class="form-control" id="Education_Fund" placeholder="Education Fund">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__.'/../Admin/footer.php'; ?>
<script>
$(document).ready(function() {
    $('#add_zone').validate({
        rules: {
            Society: {
                required: true,
            },
            Building: {
                required: true,
            },
            Municipal_Tax: { 
                required: true, number: true 
            },
            Electricity_Charges: { 
                required: true, number: true 
            },
            Water_Charges: { 
                required: true, number: true 
            },
            Lease_Rent_Charges: { 
                required: true, number: true 
            },
            Education_Fund: { 
                required: true, number: true 
            },
        },
        messages: {
            Society: {
                required: 'Please Society name.',
            },
            Building: {
                required: 'Please Building name.',
            },
            Municipal_Tax: { 
                required: 'Please enter Municipal Tax.', 
                number: 'Please enter a valid number.' 
            },
            Electricity_Charges: { 
                required: 'Please enter Electricity Charges.', 
                number: 'Please enter a valid number.' 
            },
            Water_Charges: { 
                required: 'Please enter Water Charges.', 
                number: 'Please enter a valid number.' 
            },
            Lease_Rent_Charges: { 
                required: 'Please enter Lease Rent Charges.', 
                number: 'Please enter a valid number.' 
            },
            Education_Fund: { 
                required: 'Please enter Education Fund.', 
                number: 'Please enter a valid number.' 
            },
        },

    });
});
</script>
