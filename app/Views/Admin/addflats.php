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
                            <h3 class="card-title">Add Flats<small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url(); ?>create" method="post" id="add_zone">
                            <div class="row card-body">
                                <input type="hidden" name="id" class="form-control" id="id">
                                <input type="hidden" name="table" class="form-control" value="tbl_flats" id="id">


                                <div class="col-lg-3 col-md-3 col-12 form-group">
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

                                <div class="col-lg-3 col-md-3 col-12 form-group">
                                    <label for="zone">Select Building Name</label>
                                    <select name="Building" id="Building" class="form-control">
                                        <option value="" disabled selected>Select a Building</option>
                                        <?php foreach ($building as $user): ?>
                                        <option value="<?php echo $user->id; ?>">
                                            <?php echo $user->Building; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>                               
                                 </div>
                                <div class="col-lg-3 col-md-3 col-12 form-group">
                                    <label for="zone">Enter Wing Name</label>
                                    <input type="text" name="Wing" class="form-control" id="Wing" placeholder="Enter Society Name">
                                </div>
                                <div class="col-lg-3 col-md-3 col-12 form-group">
                                    <label for="zone">Enter Flats Number</label>
                                    <input type="text" name="Flats" class="form-control" id="Flats" placeholder="Enter Flats Number">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary submitButton"><?php if(!empty($single_data)){ echo 'Update'; }else{ echo 'Submit';} ?></button>
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
            Wing: {
                required: true,
            },
            Flats: {
                required: true,
            },
        },
        messages: {
            Society: {
                required: 'Please select Society name.',
            },
            Building: {
                required: 'Please select Building name.',
            },
            Wing: {
                required: 'Please Enter Wing name.',
            },
            Flats: {
                required: 'Please Enter Flats number.',
            },
        },
    
    });
});
</script>