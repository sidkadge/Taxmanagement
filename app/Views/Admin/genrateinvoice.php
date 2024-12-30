<?php include __DIR__.'/../Admin/header.php'; ?>
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Genarte Invoice</h3>
                        </div>
                        <form action="<?php echo base_url(); ?>create" id="add_product" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="table" class="form-control" value="tbl_invoice" id="id">
                        <div class="row card-body">
                                <input type="hidden" name="id" class="form-control" id="id">
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="productname">Select Society</label>
                                    <select name="Society" id="Society" class="form-control">
                                        <option value="" disabled selected>Select a Society</option>
                                        <?php foreach ($society as $user): ?>
                                        <option value="<?php echo $user->id; ?>">
                                            <?php echo $user->Society; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>                                  </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="productname">Select Building</label>
                                    <select name="Building" id="Building" class="form-control">
                                        <option value="" disabled selected>Select a Building</option>
                                        <?php foreach ($building as $user): ?>
                                        <option value="<?php echo $user->id; ?>">
                                            <?php echo $user->Building; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>                                   </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Size">Select Wing</label>
                                    <select name="Wing" id="Wing" class="form-control">
                                        <option value="" disabled selected>Select a Wing</option>
                                        <?php foreach ($flats as $user): ?>
                                        <option value="<?php echo $user->id; ?>">
                                            <?php echo $user->Wing; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>   
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Flats">Select Flats</label>
                                    <select name="Flats" id="Flats" class="form-control">
                                        <option value="" disabled selected>Select a Flats</option>
                                        <?php foreach ($flats as $user): ?>
                                        <option value="<?php echo $user->id; ?>">
                                            <?php echo $user->Flats; ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>   
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Mobile">Mobile Number</label>
                                    <input type="text" name="Mobile" class="form-control" id="Mobile" placeholder="Mobile">
                                </div>
                              
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Bill Date">Bill Date</label>
                                    <input type="date" name="Bill_Date" class="form-control" id="Bill_Date" placeholder="Select Date">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="brand">Email </label>
                                    <input type="Email" name="Email" class="form-control" id="Email" placeholder="Enter Email">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Municipal Tax">Municipal Tax </label>
                                    <input type="text" name="Municipal_Tax" class="form-control" id="Municipal_Tax" placeholder="Enter Municipal Tax">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="General Maintenance">General Maintenance</label>
                                    <input type="text" name="General_Maintenance" class="form-control" id="General_Maintenance" placeholder="Enter General Maintenance">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Sinking Fund">Sinking Fund</label>
                                    <input type="text" name="Sinking_Fund" class="form-control" id="Sinking_Fund" placeholder="Enter Sinking Fund">
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
                                    <label for="Structural Repairs">Structural Repairs</label>
                                    <input type="text" name="Structural_Repairs" class="form-control" id="Structural_Repairs" placeholder="Structural Repairs Charges">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Education Fund">Education Fund</label>
                                    <input type="text" name="Education_Fund" class="form-control" id="Education_Fund" placeholder="Education Fund">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Non Occupancy Charges">Non Occupancy Charges</label>
                                    <input type="text" name="Non_Occupancy_Charges" class="form-control" id="Non_Occupancy_Charges" placeholder="Non Occupancy Charges">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Misc. Charges">Misc. Charges</label>
                                    <input type="text" name="Misc_Charges" class="form-control" id="Misc_Charges" placeholder="Misc Charges">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Conveyance Charges">Conveyance Professional Charges</label>
                                    <input type="text" name="Conveyance_Charges" class="form-control" id="Conveyance_Charges" placeholder="Conveyance Charges">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Total">Total</label>
                                    <input type="text" name="Total" class="form-control" id="Total" placeholder="Total">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <!-- <label for="Arrears (Interest)">Arrears (Interest)</label>
                                    <input type="text" name="Arrears" class="form-control" id="Arrears" placeholder="Enter Arrears"> -->
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Arrears (Interest)">Arrears (Interest)</label>
                                    <input type="text" name="Arrears" class="form-control" id="Arrears" placeholder="Enter Arrears">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Principal (Arrears)">Principal Arrears</label>
                                    <input type="text" name="Principal_Arrears" class="form-control" id="Principal_Arrears" placeholder="Enter Principal Arrears">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="Accumulated Interest">Accumulated Interest</label>
                                    <input type="text" name="Accumulated_Interest" class="form-control" id="Accumulated_Interest" placeholder="Enter Accumulated Interest">
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 form-group">
                                    <label for="GRAND TOTAL">Grand total</label>
                                    <input type="text" name="grand_total" class="form-control" id="grand_total" placeholder="grand total">
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" name="submit"  id="submit" class="btn btn-primary submitButton">
                                    <?php { echo 'Submit'; } ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include __DIR__.'/../Admin/footer.php'; ?>

<script>
   $(document).ready(function () {
    // Handle Society or Building selection change
    $('#Society, #Building').change(function () {
        var societyId = $('#Society').val();
        var buildingId = $('#Building').val();

        // Only make the AJAX call if both values are selected
        if (societyId && buildingId) {
            $.ajax({
                url: '<?php echo base_url("getBuildingChargesBySociety"); ?>',
                type: 'POST',
                data: { society_id: societyId, building_id: buildingId },  // Pass both values
                dataType: 'json',
                success: function (response) {
                    if (response.length > 0) {
                        var building = response[0]; // Assuming one building per society
                        $('#Municipal_Tax').val(building.Municipal_Tax);
                        $('#Electricity_Charges').val(building.Electricity_Charges);
                        $('#Water_Charges').val(building.Water_Charges);
                        $('#Education_Fund').val(building.Education_Fund);
                        $('#Lease_Rent_Charges').val(building.Lease_Rent_Charges);
                    } else {
                        // Clear fields if no data found
                        $('#Municipal_Tax, #Electricity_Charges, #Water_Charges, #Education_Fund, #Lease_Rent_Charges').val('');
                        alert('No building data found for the selected society and building.');
                    }
                },
                error: function () {
                    alert('Error retrieving building data.');
                }
            });
        } else {
            // Clear fields if either society or building is not selected
            $('#Municipal_Tax, #Electricity_Charges, #Water_Charges, #Education_Fund, #Lease_Rent_Charges').val('');
        }
    });
});

  $(document).ready(function () {
    // Function to calculate the Total field
    function calculateTotal() {
        let total = 0;

        // List of fields contributing to the Total
        const totalFields = [
            "#Municipal_Tax",
            "#General_Maintenance",
            "#Sinking_Fund",
            "#Electricity_Charges",
            "#Water_Charges",
            "#Lease_Rent_Charges",
            "#Structural_Repairs",
            "#Education_Fund",
            "#Non_Occupancy_Charges",
            "#Misc_Charges",
            "#Conveyance_Charges"
        ];

        // Sum up the values of these fields
        totalFields.forEach(field => {
            const value = parseFloat($(field).val()) || 0; // Default to 0 if empty or invalid
            total += value;
        });

        // Update the Total field
        $("#Total").val(total.toFixed(2));
    }

    // Function to calculate the Grand Total field
    function calculateGrandTotal() {
        let grandTotal = 0;

        // Fields contributing to the Grand Total
        const grandTotalFields = [
            "#Total",
            "#Arrears",
            "#Principal_Arrears",
            "#Accumulated_Interest"
        ];

        // Sum up the values of these fields
        grandTotalFields.forEach(field => {
            const value = parseFloat($(field).val()) || 0; // Default to 0 if empty or invalid
            grandTotal += value;
        });

        // Update the Grand Total field
        $("#grand_total").val(grandTotal.toFixed(2));
    }

    // Bind the calculation functions to the relevant fields
    $("#add_product input[type='text']").on("input", function () {
        calculateTotal(); // Recalculate the Total field
        calculateGrandTotal(); // Recalculate the Grand Total field
    });

    // Validate the form
    $('#add_product').validate({
        rules: {
            Society: { required: true },
            Building: { required: true },
            Wing: { required: true },
            Flats: { required: true },
            Mobile: { required: true, digits: true, minlength: 10, maxlength: 10 },
            Bill_Date: { required: true, date: true },
            Email: { required: true, email: true },
            Municipal_Tax: { required: true, number: true },
            General_Maintenance: { required: true, number: true },
            Sinking_Fund: { required: true, number: true },
            Electricity_Charges: { required: true, number: true },
            Water_Charges: { required: true, number: true },
            Lease_Rent_Charges: { required: true, number: true },
            Structural_Repairs: { required: true, number: true },
            Education_Fund: { required: true, number: true },
            Non_Occupancy_Charges: { required: true, number: true },
            Misc_Charges: { required: true, number: true },
            Conveyance_Charges: { required: true, number: true },
            // Total: { required: true, number: true },
            Arrears: { required: true, number: true },
            Principal_Arrears: { required: true, number: true },
            Accumulated_Interest: { required: true, number: true },
            // grand_total: { required: true, number: true }
        },
        messages: {
            Society: { required: 'Please select a society.' },
            Building: { required: 'Please select a building.' },
            Wing: { required: 'Please select a wing.' },
            Flats: { required: 'Please select a Flats.' },
            Mobile: {
                required: 'Please enter a mobile number.',
                digits: 'Please enter only digits.',
                minlength: 'Mobile number must be 10 digits.',
                maxlength: 'Mobile number must be 10 digits.'
            },
            Bill_Date: { required: 'Please select a bill date.', date: 'Please enter a valid date.' },
            Email: { required: 'Please enter an email address.', email: 'Please enter a valid email address.' },
            Municipal_Tax: { required: 'Please enter Municipal Tax.', number: 'Please enter a valid number.' },
            General_Maintenance: { required: 'Please enter General Maintenance.', number: 'Please enter a valid number.' },
            Sinking_Fund: { required: 'Please enter Sinking Fund.', number: 'Please enter a valid number.' },
            Electricity_Charges: { required: 'Please enter Electricity Charges.', number: 'Please enter a valid number.' },
            Water_Charges: { required: 'Please enter Water Charges.', number: 'Please enter a valid number.' },
            Lease_Rent_Charges: { required: 'Please enter Lease Rent Charges.', number: 'Please enter a valid number.' },
            Structural_Repairs: { required: 'Please enter Structural Repairs.', number: 'Please enter a valid number.' },
            Education_Fund: { required: 'Please enter Education Fund.', number: 'Please enter a valid number.' },
            Non_Occupancy_Charges: { required: 'Please enter Non-Occupancy Charges.', number: 'Please enter a valid number.' },
            Misc_Charges: { required: 'Please enter Misc Charges.', number: 'Please enter a valid number.' },
            Conveyance_Charges: { required: 'Please enter Conveyance Charges.', number: 'Please enter a valid number.' },
            // Total: { required: 'Please enter Total.', number: 'Please enter a valid number.' },
            Arrears: { required: 'Please enter Arrears.', number: 'Please enter a valid number.' },
            Principal_Arrears: { required: 'Please enter Principal Arrears.', number: 'Please enter a valid number.' },
            Accumulated_Interest: { required: 'Please enter Accumulated Interest.', number: 'Please enter a valid number.' },
            // grand_total: { required: 'Please enter Grand Total.', number: 'Please enter a valid number.' }
        }
    });
});

</script>
