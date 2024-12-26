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
                            <h3 class="card-title">Add Society<small></small></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url(); ?>create" method="post" id="add_zone">
                            <div class="row card-body">
                                <input type="hidden" name="table" value="tbl_society" id="tbl_society">

                                <div class="col-lg-12 col-md-3 col-12 form-group">
                                    <label for="Society">Enter Society Name</label>
                                    <input type="text" name="Society" class="form-control" id="Society" placeholder="Enter Society Name" value="<?php if(!empty($single_data)){ echo $single_data->zone; } ?>">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-right">
                                <button type="submit" name="submit" id="submit" class="btn btn-primary submitButton">Submit</button>
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
         
        },
        messages: {
            Society: {
                required: 'Please Enter Society Name.',
            },
           
        },
    
    });
});
</script>