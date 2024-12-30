<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
@page {
    size: A5;
    margin: 20mm;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f9f9f9;
    font-size:12px;
}

.invoice {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
}

.header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px; /* Adjust as necessary */
}

.logo {
    height: 76px;
    margin-right: 20px; /* Adjust the space between the logo and the title as necessary */
}

.invoice-title {
    flex-grow: 1;
    margin: 0;
    font-weight: 500;
    font-size: 25px;
}

.top-right-text {
    margin: 0;
    text-align: right; /* Ensure the text is aligned to the right */
    padding-top: 1.5rem;
}


.header-section, .footer-section {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.bdetails {
    padding: 5px 0px;
}

.address-section {
    border: 1px solid #000;
    padding: 10px;
    margin-bottom: 20px;
}

.left, .right {
    width: 22%;
}

.buyer-section {
    margin-top: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 5px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

.text-right {
    text-align: right;
}

.tax th, .tax td {
    text-align: center;
}

.computer-generated {
    text-align: center;
    margin-top: 6px;    
}

.no-border td {
    border-top: none !important;
    border-bottom: none !important;
}

.no_border td {
    border-bottom: none !important;
}

.footer {
    position: fixed;
    bottom: 20mm; /* Adjust according to your page margin */
    width: 100%;
    text-align: center;
    display: none;
}

.continue {
    display: none;
    text-align: center;
    padding-top: 10px;
}
.mitechdetails{
    padding: 10px 0px;
}
p {
    margin: 0 0 -4px !important;
}
.dark-blue-line {
    border: 2px solid #5499aa;   
    margin-top: 5px;

}
.bill_title{
    text-align:center;
    font-weight: 600;
}

.customer_details {
  font-family: Arial, sans-serif; /* Set font for better readability */
}

.customer_details p {
  margin: 0; /* Remove default margin */
  padding: 10px 0;
  display: flex; /* Use flexbox for alignment */
  align-items: center; /* Center items vertically */
}

.customer_details span {
  margin-right: 20px; /* Space between items */
  flex: 1; /* Allow spans to grow and take equal space */
}

.customer_details span:last-child {
  margin-right: 0; /* Remove margin from the last span */
}
.qrcode{
    height:245px;
}
.qrcodeno{
    padding: 0px 16px;}

.qr-code-cell {
        border-top: none;
        border-bottom: none;
        border-left: none;
        width: 150px; /* Adjust as needed */
    }


@media print {
    .invoice {
        width: 100%;
        max-width: 100%;
        page-break-after: always;
    }
    
    .continue {
        display: block;
    }

    .footer {
        display: block;
    }

    .page-break {
        page-break-before: always;
    }
}




    </style>
</head>
<body>
    <div class="invoice">
        <div class="header">
        <img src="<?=base_url();?>public/assets/images/logo.webp" alt="Logo" class="logo"> 
            <h1 class="invoice-title">Taxmanagement
                <br></h1>
            <p class="top-right-text"><span><b>Contact No.</b> +91 8459639126</span>
            <br>
            <span><b>Email Id.</b> nakshatraaestheticspune@gmail.com</span>
            <br>
            <span>Lakshmi chowk, Moshi, PCMC, Pune, Maharashtra-412105</span>

            </p>

        </div>
     

        <hr class="dark-blue-line">
        <h2 class="bill_title">Invoice</h2>
        <div class="customer_details">
           <p><span><b>Bill Number :</b> <?php //if(!empty($invoice_data)){ echo $invoice_data[0]->Society; }?> </span> <span><b>Building :</b> <?php //if(!empty($invoice_data)){ echo $invoice_data[0]->Building_Name; }?> </span>  <span><b>Date :</b> <?php //if(!empty($invoice_data)){ $date = new DateTime($invoice_data[0]->Bill_Date); echo $date->format('d/m/Y');  }?> </span></p> 
           <p><span><b>Flat :</b> <?php //if(!empty($invoice_data)){ echo $invoice_data[0]->Flats; }?> </span> <span style="margin-left: 34%; !important;     margin-right: 0px !important; "><b>Contact :</b> <?php //if(!empty($invoice_data)){ echo $invoice_data[0]->Mobile; }?> </span></p> 
        </div>

        <hr class="dark-blue-line">

        <table style="margin-bottom: 0px !important;">
    <thead>
        <tr>
            <th class="text-center">Sr. No.</th>
            <th class="text-center">Charges</th>
            <th class="text-center">Rate / Unit (₹)</th>
            <th class="text-center">Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($invoice_data)) { ?>
            <?php $i = 1; foreach ($invoice_data as $invoice) { ?>
                <tr class="no-border" style="vertical-align: baseline; height: 140px;">
                    <td><?= $i++; ?></td>
                    <td class="text-right"><b>Electricity Charges</b></td>
                    <td class="text-center">-</td>
                    <td class="text-right">₹ <?= number_format($invoice['Electricity_Charges'], 2); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-right"><b>Municipal Tax</b></td>
                    <td class="text-center">-</td>
                    <td class="text-right">₹ <?= number_format($invoice['Municipal_Tax'], 2); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-right"><b>General Maintenance</b></td>
                    <td class="text-center">-</td>
                    <td class="text-right">₹ <?= number_format($invoice['General_Maintenance'], 2); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-right"><b>Courier Charges</b></td>
                    <td class="text-center">-</td>
                    <td class="text-right">₹ <?= number_format($invoice['Misc_Charges'], 2); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" class="text-right"><strong>Grand Total</strong></td>
                    <td class="text-right"><b>₹ <?= number_format($invoice['grand_total'], 2); ?></b></td>
                </tr>
               
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="4" class="text-center">No unpaid invoices found.</td>
            </tr>
        <?php } ?>
    </tbody>
</table>


        <table style="margin-bottom: 0px !important; border: none;">

    <tbody style="border: none;">
    <tr style="border: none;">
  <td colspan="7" style="border: none;">
    <b>Kindly make the payment on the following QR code or UPI ID</b>
  </td>
</tr>

<tr style="border: none;">
    <td class="qr-code-cell" style="border-top: none; border-bottom: none; border-left: none; width: 150px;">
        <img src="<?=base_url();?>public/assets/images/NakshtraAethetics_QR.jpeg" alt="qrcode" class="qrcode"> 
        <!-- <p class="qrcodeno">1234567850@ckQRCODE</p> -->
    </td>
    <td class="dark-blue-line" style="border-top: none; border-bottom: none; width: 200px; padding-left: 18px;" colspan="">
        <p class="bdetails"><b><u>Bank Details</u></b></p> 
        <p class="bdetails"><b>Acc. Name: Nakshtra Aesthetics Pune </b></p>
        <p class="bdetails"><b>Bank Name: Axis Bank Ltd </b></p> 
        <p class="bdetails"><b>Building Name: Moshi, Pune (MH)</b></p> 
        <p class="bdetails"><b>Account No.: 923020062971759 </b></p>
        <p class="bdetails"><b>IFSC Code: UTIB0004875 </b></p>
        <p class="bdetails"><b>MICR: </b></p> 
    </td>
    <td class="dark-blue-line" style="border-top: none; border-bottom: none; border-right: none; width: 200px; padding-left: 18px;" colspan="">
        <p class="mitechdetails">GST No.: <b></b></p>
        <p class="mitechdetails">PAN No. : <b></b></p>
        <p class="mitechdetails">HSN/SAC. : <b></b></p>
    </td>
</tr>
            </tbody>

            </table>


      

    </div>
</body>
</html>