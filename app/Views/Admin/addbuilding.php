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

        },
        messages: {
            Society: {
                required: 'Please Society name.',
            },
            Building: {
                required: 'Please Building name.',
            },
        },

    });
});
</script>