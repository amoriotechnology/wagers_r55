<style>
   .pe-7s-cart{
   position: absolute;
   top: -44px;
   left: 50px;
   margin-left: 769px;
   }
   .pe-7s-help1{
   position: absolute;
   top:-68px;
   left:95px;
   margin-left: 770px
   }
   .pe-7s-settings{
   position: absolute;
   top:-92px;
   left:142px;
   margin-left: 770px;
   }
   .label{
   position: absolute;
   top: -79px;
   display: none;
   }
   .navbar {
   height: 40px;
   }
   .sidebar-toggle{
   margin-top: -97px;
   margin-left: -971px;
   }
   .pe-7s-bell{
   position: relative;
   left: 768px;
   }
</style>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link
         href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
         rel="stylesheet"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
         crossorigin="anonymous"
         />
      <link rel="stylesheet" href="<?php echo base_url()  ?>assets/css/f942.css">
      <title>Document</title>
   </head>
   <body>
     <body bgcolor="#A0A0A0" vlink="blue" link="blue"   >
         <div id="download"  >
            <div class="container-fluid"  id="one">
               <div class="row">
                  <img src="<?php echo base_url()  ?>assets/images/f940_01.jpg" width="100%" />
                  <?php
                     $Federal_Pin_Number = isset($get_cominfo[0]['Federal_Pin_Number']) ? $get_cominfo[0]['Federal_Pin_Number'] : '';
                     if (strlen($Federal_Pin_Number) >= 9) {
                         $one = substr($Federal_Pin_Number, 0, 2);
                         $two = substr($Federal_Pin_Number, -7);
                     
                         $one1 = $one[0];
                         $one2 = $one[1];
                     
                         $two3 = $two[0]; // Corrected from $two[2]
                         $two4 = $two[1]; // Corrected from $two[3]
                         $two5 = $two[2]; // Corrected from $two[4]
                         $two6 = $two[3]; // Corrected from $two[5]
                         $two7 = $two[4]; // Corrected from $two[6]
                         $two8 = $two[5]; // Corrected from $two[7]
                         $two9 = $two[6]; // Corrected from $two[8]
                     
                     } else {
                         $one = '00'; // Example 
                         $two = '0000000'; // Example 
                     }
                     ?>
                  <div class="two-digit d-flex gap-3">
                     <input class="ein-number" style="margin-right: 9px; margin-left: -8px;" value=" <?php echo $one1; ?>" />
                     <input class="ein-number second-value" value="<?php echo $one2; ?>" />
                  </div>
                  <div class="two-digit-2 d-flex gap-1">
                     <input class="ein-number-2" value="<?php echo $two3; ?>" />
                     <input
                        class="ein-number-2 print-check"
                        style="margin-left: 13px"
                        value="<?php echo $two4; ?>"
                        />
                     <input
                        class="ein-number-2 print-check-2"
                        style="margin-left: 15px"
                        value="<?php echo $two5; ?>"
                        />
                     <input
                        class="ein-number-2 print-check-3"
                        style="margin-left: 13px"
                        value="<?php echo $two6; ?>"
                        />
                     <input
                        class="ein-number-2 print-check-4"
                        style="margin-left: 13px"
                        value="<?php echo $two7; ?>"
                        />
                     <input
                        class="ein-number-2 print-check-5"
                        style="margin-left: 13px"
                        value="<?php echo $two8; ?>"
                        />
                     <input
                        class="ein-number-2 print-check-6"
                        style="margin-left: 13px"
                        value="<?php echo $two9; ?>"
                        />
                  </div>
                  <?php
                     if (isset($get_cominfo) && !empty($get_cominfo)) {
                        $company_name = $get_cominfo[0]['company_name'];
                        $mobile  = $get_cominfo[0]['mobile'];
                     
                     } else {
                         $company_name = '';
                         $mobile  = '';
                     }
                     ?>
                  <div class="name-text">
                     <input type="text" value="<?php echo $company_name; ?>" />
                  </div>
                  <div class="trade-text">
                     <input type="text" value="<?php echo $company_name; ?>" />
                  </div>
                  <?php
                     $address = isset($get_cominfo[0]['address']) ? $get_cominfo[0]['address'] : '';
                     $get_address = explode(',' , $address);
                     ?>
                  <div class="Address-text">
                     <input type="text" value="<?php echo $get_address[0]; ?>" />
                  </div>
                  <div class="city-text">
                     <input type="text" value="<?php echo $get_address[1]; ?>" />
                  </div>
                  <div class="state-text">
                     <input type="text" value="<?php echo $get_address[2]; ?>" />
                  </div>
                  <div class="zipcode-text">
                     <input type="text" value="<?php echo $get_address[3]; ?>" />
                  </div>
                  <div class="country">
                     <input type="text" value="" />
                  </div>
                  <div class="foreign">
                     <input type="text" value=" " />
                  </div>
                  <div class="postal-code">
                     <input type="text" value="" />
                  </div>
                  <div class="typea">
                     <input type="checkbox">
                  </div>
                  <div class="typeb">
                     <input type="checkbox">
                  </div>
                  <div class="typec">
                     <input type="checkbox">
                  </div>
                  <div class="typed">
                     <input type="checkbox">
                  </div>
                  <?php  $split_code = str_split($state_code); ?>
                  <div class="a1">
                     <input type="text" value="<?php echo isset($split_code[0]) ? $split_code[0] : ''; ?>">
                  </div>
                  <div class="a2">
                     <input type="text" value="<?php echo isset($split_code[1]) ? $split_code[1] : ''; ?>">
                  </div>
                  <div class="b1">
                     <input type="checkbox">
                  </div>
                  <div class="b2">
                     <input type="checkbox">
                  </div>
                  <div class="p2-4a">
                     <input type="checkbox">
                  </div>
                  <div class="p2-4b">
                     <input type="checkbox">
                  </div>
                  <div class="p2-4c">
                     <input type="checkbox">
                  </div>
                  <div class="p2-4d">
                     <input type="checkbox">
                  </div>
                  <div class="p2-4e">
                     <input type="checkbox">
                  </div>

                  <?php
                     $total_grosspay = $get_paytotal[0]['total_grosspay'];
                     $parts = explode('.', number_format($total_grosspay, 2, '.', ''));
                     $integerPart = $parts[0];
                     $dollar_value=$integerPart;
                     $decimalPart =$parts[1];
                     $cent_value=$decimalPart;
                  ?>
                  <div class="total-emp-payment">
                     <input type="text" value="$<?php echo $integerPart ; ?> "  style="margin-left: -80px;width: 104px;text-align:right;"     />
                     <input type="text" value="<?php echo $decimalPart ; ?>"     />

                  </div>

                  <?php
                     $exemptFutatax = 0.00;
                     $parts = explode('.', number_format($exemptFutatax, 2, '.', ''));
                     $futaTax = isset($parts[0]) ? $parts[0] : '00'; 
                     $futadecimalPart = isset($parts[1]) ? $parts[1] : '00'; 
                  ?>

                  <div class="row5">
                     <input type="text" value="$<?php echo $futaTax ; ?> " style="margin-left: -89px;width: 104px;text-align:right;"/>
                     <input type="text" value="<?php echo $futadecimalPart ; ?> " style="margin-left: -76px;width: 104px; text-align:right;" />
                  </div>
 
                  <?php
                     $parts = explode('.', number_format($amt, 2, '.', ''));
                     $integerPart = $parts[0];
                     $decimalPart = isset($parts[1]) ? $parts[1] : '00'; 
                  ?>

                  <?php
                     $parts = explode('.', number_format($amountabove, 2, '.', ''));
                     $aboveamount1 = isset($parts[0]) ? $parts[0] : '00'; 
                     $aboveamountdecimalPart = isset($parts[1]) ? $parts[1] : '00'; 
                  ?>
                  <div class="total-payment">
                     <input type="text" value="$<?php echo $aboveamount1; ?> "  style="margin-left: -80px;width: 104px;text-align:right;"/>
                     <input type="text" value="<?php echo $aboveamountdecimalPart ; ?>" style="margin-left: -81px;width: 104px; text-align:right;" />
                  </div>

                  <?php
                     $partSubtotal = number_format($exemptFutatax + $amountabove, 2, '.', '');
                     list($sub1, $subdecimalPart) = explode('.', $partSubtotal) + ['00', '00'];
                  ?>

                  <div class="subtotal-text">
                     <input type="text" value="$<?php echo $sub1; ?>" style="margin-left: -86px;width: 104px;text-align:right;"/>
                     <input type="text" value="<?php echo $subdecimalPart; ?>" style="margin-left: -76px;width: 104px;text-align:right;" />
                  </div>

                  <?php
                     $totaltaxableFutaWagers = number_format($total_grosspay - $partSubtotal, 2, '.', '');
                     list($totaltaxableFutaWagers1, $totaltaxableFutaWagersdecimalPart) = explode('.', $totaltaxableFutaWagers) + ['00', '00'];
                  ?>

                  <div class="total-taxable-text">
                     <input type="text" value="$<?php echo $totaltaxableFutaWagers1 ; ?> "  style="margin-left: -81px;width: 104px;text-align:right;"/>
                     <input type="text" value="<?php echo $totaltaxableFutaWagersdecimalPart ; ?>" style="margin-left: -82px;width: 104px; text-align:right;" />
                  </div>

                  <?php
                     $futaBeforeAdjustments = number_format($totaltaxableFutaWagers1 * 0.006, 2, '.', '');
                     list($futaBefore1, $futaBeforedecimalPart) = explode('.', $futaBeforeAdjustments) + ['00', '00'];
                  ?>

                  <div class="row8">
                     <input type="text" value="$<?php echo $futaBefore1 ; ?> "  style="margin-left: -79px;width: 104px;text-align:right;"/>
                     <input type="text" value="<?php echo $futaBeforedecimalPart ; ?>" style="margin-left: -84px;width: 104px; text-align:right;" />
                  </div>

                  <?php
                     $excludedStateUnemploymentTax = number_format($totaltaxableFutaWagers1 * 0.054, 2, '.', '');
                     list($excludedStateUnemploymentTax1, $excludedStateUnemploymentTaxdecimalPart) = explode('.', $excludedStateUnemploymentTax) + ['00', '00'];
                  ?>

                  <div class="row9">
                     <input type="text" value="$<?php echo $excludedStateUnemploymentTax1 ; ?> "  style="margin-left: -78px;width: 104px;text-align:right;"/>
                     <input type="text" value="<?php echo $excludedStateUnemploymentTaxdecimalPart ; ?>" style="margin-left: -86px;width: 104px; text-align:right;" />
                  </div>
                  <div class="row10">
                     <input type="text" value="" />
                  </div>
                  <div class="row11">
                     <input type="text" value="" />
                  </div>
                 <?php
                     $futaTaxAfterAdjustments = number_format($futaBeforeAdjustments + $excludedStateUnemploymentTax, 2, '.', '');
                     list($futaTaxAfterAdjustments1, $futaTaxAfterAdjustmentsdecimalPart) = explode('.', $futaTaxAfterAdjustments) + ['00', '00'];
                  ?>
                  <div class="row12">
                     <input type="text" value="$<?php echo $futaTaxAfterAdjustments1 ; ?> "  style="margin-left: -79px;width: 104px;text-align:right;"/>
                     <input type="text" value="<?php echo $futaTaxAfterAdjustmentsdecimalPart ; ?>" style="margin-left: -86px;width: 104px; text-align:right;" />
                  </div>
                  <div class="row13">
                     <input type="text" value="" />
                  </div>
                  <div class="row14">
                     <input type="text" value="" />
                  </div>
                  <div class="row15">
                     <input type="text" value="" />
                  </div>
                  <div class="row15a">
                     <input type="checkbox">
                  </div>
                  <div class="row15b">
                     <input type="checkbox">
                  </div>
               </div>
            </div>
            <!-- second-page -->
            <div class="container-fluid" id="two">
               <div class="row">
                  <img src="<?php echo base_url()  ?>assets/images/f940_02.jpg" width="100%" />
               
               
                  <div class="trade-name">
                     <input type="text" value="<?php echo $company_name; ?>" style="margin-top:4px;">
                  </div>
 
                  <div class="ein">
                     <input type="text" value="<?php echo $Federal_Pin_Number;  ?>" style="margin-top:4px;"/>
                  </div>
                  <?php
                     $quater1 = number_format($sumQuaterWiseUnemployment['Q1'], 2, '.', '');
                     list($quaterwise1, $quater1decimalPart) = explode('.', $quater1) + ['00', '00'];
                  ?>

                  <div class="row16a">
                     <input type="text" value="$<?php echo $quaterwise1; ?> "  style="margin-top: 4px;margin-left: -7px;width: 38px;text-align:right;"/>
                     <input type="text" value="<?php echo $quater1decimalPart ; ?>" style="margin-left: -161px; text-align:right;" />
                  </div>

                  <?php
                     $quater2 = number_format($sumQuaterWiseUnemployment['Q2'], 2, '.', '');
                     list($quaterwise2, $quater2decimalPart) = explode('.', $quater2) + ['00', '00'];
                  ?>
                  <div class="row16b">
                     <input type="text" value="$<?php echo $quaterwise2; ?> "  style="margin-top: 4px;margin-left: -7px;width: 38px;text-align:right;"/>
                     <input type="text" value="<?php echo $quater2decimalPart ; ?>" style="margin-left: -161px; text-align:right;" />
                  </div>
                  <?php
                     $quater3 = number_format($sumQuaterWiseUnemployment['Q3'], 2, '.', '');
                     list($quaterwise3, $quater4decimalPart) = explode('.', $quater3) + ['00', '00'];
                  ?>
                  <div class="row16c">
                     <input type="text" value="$<?php echo $quaterwise3; ?> "  style="margin-top: 4px;margin-left: -7px;width: 38px;text-align:right;"/>
                     <input type="text" value="<?php echo $quater4decimalPart ; ?>" style="margin-left: -161px; text-align:right;" />
                  </div>
                  <?php
                     $quater4 = number_format($sumQuaterWiseUnemployment['Q4'], 2, '.', '');
                     list($quaterwise4, $quater4decimalPart) = explode('.', $quater4) + ['00', '00'];
                  ?>
                  <div class="row16d">
                     <input type="text" value="$<?php echo $quaterwise4; ?>"  style="margin-top: 4px;margin-left: -11px;width: 38px;text-align:right;"/>
                     <input type="text" value="<?php echo "00" ; ?>" style="margin-left: -159px; text-align:right;" />
                  </div>
                 <div class="row17">
                     <input type="text" style="margin-top: 4px;margin-left: 13px;width: 38px;text-align:right;" value="$<?php
                        $Quater1 = $sumQuaterWiseUnemployment['Q1'];
                        $Quater2 = $sumQuaterWiseUnemployment['Q2'];
                        $Quater3 = $sumQuaterWiseUnemployment['Q3'];
                        $Quater4 = $sumQuaterWiseUnemployment['Q4'];
                         $total = ($Quater1 + $Quater2 + $Quater3 + $Quater4);
                         $quater5 = number_format($total, 2, '.', '');
                         list($quaterwise5, $quater5decimalPart) = explode('.', $quater5) + ['00', '00'];
                         echo $quaterwise5;
                     ?>" />
                     <input type="text" value="<?php echo $quater5decimalPart; ?>" style="margin-left: -156px;text-align:right;" />
                  </div>
                  <div class="row17a">
                     <input type="text" value="" />
                  </div>
                  <div class="row17b">
                     <input type="text" value="" />
                  </div>
                  <div class="p6-a">
                     <input type="checkbox">
                  </div>
                  <div class="p6-b">
                     <input type="checkbox">
                  </div>
                  <div class="p6-c">
                     <input type="text" value="" />
                     <input type="text" value="" style="margin-left: 15px;" />
                     <input type="text" value="" style="margin-left: 16px;" />
                     <input type="text" value="" style="margin-left: 16px;" />
                     <input type="text" value="" style="margin-left: 16px;" />
                  </div>
                  <div class="pre-check">
                     <input type="checkbox">
                  </div>
                  <div class="sign">
                     <input type="text" value="" />
                  </div>
                  <div class="printname">
                     <input type="text" value="<?php echo $company_name; ?>" style="margin-top:4px;"/>
                  </div>
                  <div class="printitle">
                     <input type="text" value="Admin" style="margin-top:4px;"/>
                  </div>
                  <div class="date">
                     <input type="text" value="<?php echo date('m/d/Y'); ?>" style="margin-top:4px;"/>
                  </div>
                  <div class="dayphone">
                     <input type="text" value="<?php echo $mobile; ?>" style="margin-top:4px;"/>
                  </div>
                  <div class="pre-name">
                     <input type="text" value="" />
                  </div>
                  <div class="pre-sign">
                     <input type="text" value="" />
                  </div>
                  <div class="first-name">
                     <input type="text" value="" />
                  </div>
                  <div class="address">
                     <input type="text" value="" />
                  </div>
                  <div class="pre-city">
                     <input type="text" value="" name="" id="" />
                  </div>
                  <div class="pre-state">
                     <input type="text" value="" />
                  </div>
                  <div class="pre-zipcode">
                     <input type="text" value="" />
                  </div>
                  <div class="pre-pin">
                     <input type="text" value="" />
                  </div>
                  <div class="pre-date">
                     <input type="text" value="" />
                  </div>
                  <div class="pre-ein">
                     <input type="text" value="" />
                  </div>
                  <div class="pre-phone">
                     <input type="text" value="" />
                  </div>
               </div>
            </div>
            <!-- third-page -->
            <div class="container-fluid"  id="three">
               <div class="row">
                  <img src="<?php echo base_url()  ?>assets/images/f940_03.jpg" width="100%"/>
               
                  <div class="row1-ein">
                     <input type="text" value="<?php echo $Federal_Pin_Number; ?>" style="position: absolute;top: -17px;"/>
                  </div>

                  <div class="dollar">
                       <input type="text" value="$<?php echo $futaTaxAfterAdjustments1 ; ?> "  />
                    
                 
                  </div>

                  <div class="cent">
                       <input type="text" value="<?php echo $futaTaxAfterAdjustmentsdecimalPart ; ?>" />
                    
                  </div>
                  <div class="busniess-name">
                     <input type="text" value="<?php echo $company_name; ?>" style="position: absolute;margin-top: -19px;"/>
                  </div>
                  <div class="b-address">
                     <input type="text" value="<?php echo $get_address[0]; ?>" style="position: absolute;margin-top: -19px;"/>
                  </div>
                  <div class="city-state-code">
                     <input type="text" value="<?php echo $get_address[1] .' '. $get_address[2] .' '. $get_address[3]; ?>" style="position: absolute;margin-top: -19px;"/>
                  </div>
               </div>
            </div>
            <!-- forth page -->
            <div class="container-fluid" id="four" >
               <div class="row">
                  <img src="<?php echo base_url()  ?>assets/images/f940_04.jpg" width="100%" />
               </div>
            </div>
         </div>
<style>
input {
  border: 0;
  background-color: transparent;
  font-size: medium;
}
.ein-number {
  width: 20px;
  height: 20px;
}
.ein-number-2 {
  width: 15px;
  height: 20px;
}
.container-fluid {
  width: 21cm;
  height: 29.7cm;
  position: relative;
  margin: 0 auto;
  page-break-after: always
} 


.two-digit {
  position: absolute;
  top: 85px;
  left: 204px;
}
.two-digit-2 {
  position: absolute;
  top: 85px;
  left: 289px;
}
/* name-box */
.name-text {
  position: absolute;
  top: 117px;
  left: 179px;
}
.name-text input {
  height: 20px;
  width: 250px;
}
/* trade-box */
.trade-text {
  position: absolute;
  top: 147px;
  left: 150px;
}
.trade-text input {
  height: 20px;
  width: 250px;
}
/* address-text */
.Address-text {
  position: absolute;
  top: 177px;
  left: 105px;
}
.Address-text input {
  height: 20px;
  width: 250px;
}
/* city-text */
.city-text {
  position: absolute;
  top: 225px;
  left: 105px;
}
.city-text input {
  height: 20px;
  width: 225px;
}
/* state-text */
.state-text {
  position: absolute;
  top: 225px;
  left: 355px;
}
.state-text input {
  height: 20px;
  width: 30px;
}
/* zipcode-text */
.zipcode-text {
  position: absolute;
  top: 226px;
  left: 410px;
}
.zipcode-text input {
  height: 20px;
  width: 80px;
}
/* country */
.country {
  position: absolute;
  top: 261px;
  left: 102px;
}
.country input {
  height: 20px;
  width: 100px;
}
/* foreign */
.foreign {
  position: absolute;
  top: 261px;
  left: 277px;
}
.foreign input {
  height: 20px;
  width: 100px;
}
/* postal-code */
.postal-code {
  position: absolute;
  top: 261px;
  left: 410px;
}
.postal-code input {
  height: 20px;
  width: 80px;
}
.typea{
  position: absolute;
  top: 121px;
  left: 543px;
}
.typeb{
  position: absolute;
  top: 145px;
  left: 543px;
}
.typec{
  position: absolute;
  top: 167px;
  left: 543px;
}
.typed{
  position: absolute;
  top: 190px;
  left: 543px;
}
.a1 input ,.a2 input{
  height: 20px;
  width: 20px;
  text-align: center;
}
.a1{
  position: absolute;
  top: 346px;
  left: 583px;
}
.a2{
  position: absolute;
  top: 346px;
  left: 628px;
}
.b1{
  position: absolute;
  top: 378px;
  left: 579px;
}
.b2{
  position: absolute;
  top: 402px;
  left: 579px;
}
.p2-4a{
  position: absolute;
  top: 501px;
  left: 202px;
}
.p2-4b{
  position: absolute;
  top: 517px;
  left: 202px;
}
.p2-4c{
  position: absolute;
  top: 501px;
  left: 395px;
}
.p2-4d{
  position: absolute;
  top: 517px;
  left: 395px;
}
.p2-4e{
  position: absolute;
  top: 501px;
  left: 551px;
}

/* total-emp-payment */
.total-emp-payment {
  position: absolute;
  top: 456px;
  left: 677px;
}
.total-emp-payment input {
  height: 20px;
  width: 80px;
}
/* row5 */
.row5 {
  position: absolute;
  top: 476px;
  left: 498px
}
.row5 input {
  height: 20px;
  width: 80px;
}

/* total-payment */
.total-payment {
  position: absolute;
  top: 546px;
  left: 491px;
}
.total-payment input {
  height: 20px;
  width: 80px;
}
/* subtotal-text */
.subtotal-text {
  position: absolute;
  top: 570px;
  left: 675px;
}
.subtotal-text input {
  height: 20px;
  width: 52px;
}
/* total-taxable-text */
.total-taxable-text {
  position: absolute;
  top: 598px;
  left: 676px;;
}
.total-taxable-text input {
  height: 20px;
  width: 52px;
}
/* row-8 */
.row8 {
  position: absolute;
  top: 631px;
  left: 675px;;
}
.row8 input {
  height: 20px;
  width: 52px;
}
/* row-9 */
.row9 {
  position: absolute;
  top: 684px;
  left: 675px;;
}
.row9 input {
  height: 20px;
  width: 52px;
}
/* row-10 */
.row10 {
  position: absolute;
  top: 723px;
  left: 682px;
}
.row10 input {
  height: 20px;
  width: 52px;
}
/* row-11 */
.row11 {
  position: absolute;
  top: 750px;
  left: 682px;;
}
.row11 input {
  height: 20px;
  width: 52px;
}
/* row-12 */
.row12 {
  position: absolute;
  top: 794px;
  left: 675px;
}
.row12 input {
  height: 20px;
  width: 52px;
}
/* row-13 */
.row13 {
  position: absolute;
  top: 825px;
  left: 682px;;
}
.row13 input {
  height: 20px;
  width: 52px;
}
/* row-14 */
.row14 {
  position: absolute;
  top: 875px;
  left: 682px;;
}
.row14 input {
  height: 20px;
  width: 52px;
}
/* row-15 */
.row15 {
  position: absolute;
  top: 905px;
  left: 682px;;
}
.row15 input {
  height: 20px;
  width: 52px;
}
.row15a {
  position: absolute;
  top: 928px;
  left: 508px;;
}
.row15b {
  position: absolute;
  top: 928px;
  left: 627px;

}

/* second-page */
/* ein */
.trade-name {
  position: absolute;
  top: 68px;
  left: 83px;
}
.ein {
  position: absolute;
  top: 73px;
  left: 534px;
}
.ein input {
  height: 20px;
  width: 150px;
}
/* row16a */
.row16a {
  position: absolute;
  top: 153px;
  left: 532px;
}
.row16b {
  position: absolute;
  top: 183px;
  left: 532px;
}
.row16c {
  position: absolute;
  top: 213px;
   left: 532px;
}
.row16d {
  position: absolute;
  top: 243px;
   left: 532px;
}
.row17 {
  position: absolute;
  top: 274px;
   left: 506px;
}
.row17a {
  position: absolute;
  top: 358px;
  left: 332px;
}
.row17b {
  position: absolute;
  top: 358px;
  left: 542px;
}
.p6-a{
  position: absolute;
  top: 364px;
  left: 74px;
}
.p6-b{
  position: absolute;
  top: 416px;
  left: 74px;
}
.p6-c input {
  height: 18px;
  width: 18px;
  text-align: center;
}

.p6-c {
  position: absolute;
  top: 393px;
  left: 546px;

}
.sign {
  position: absolute;
  top: 537px;
  left: 154px;
}
.printname {
  position: absolute;
  top: 527px;
  left: 489px;

}
.printitle {
  position: absolute;
  top: 561px;
  left: 490px;
}
.date {
  position: absolute;
  top: 599px;
  left: 155px;
}
.dayphone {
  position: absolute;
  top: 588px;
  left: 544px;

}
.pre-check{
  position: absolute;
  top: 649px;
  left: 713px;
}
.pre-name {
  position: absolute;
  top: 693px;
  left: 186px;
}
.pre-sign {
  position: absolute;
  top: 732px  ;
    left: 186px;
}
.first-name {
  position: absolute;
  top: 770px;
    left: 186px;
}

.address {
  position: absolute;
  top: 802px;
    left: 186px;
}
.pre-city {
  position: absolute;
  top: 832px;
    left: 186px;
}
.pre-state {
  position: absolute;
  top: 832px;
  left: 391px;
}
.pre-pin {
  position: absolute;
  top: 693px;
  left:570px;
}
.pre-date {
  position: absolute;
  top: 732px;
  left:570px;
}
.pre-ein {
  position: absolute;
  top: 770px;
  left:570px;
}
.pre-phone {
  position: absolute;
  top: 802px;
  left:570px;
}
.pre-zipcode {
  position: absolute;
  top: 832px;
  left:570px;
}

/* third page */
.row1-ein {
  position: absolute;
  bottom: 301px;
  left: 84px;
}
.dollar {
  position: absolute;
  bottom: 311px;
  left: 598px;
}
.cent {
  position: absolute;
  bottom: 311px;
  left: 703px;
}
.busniess-name {
  position: absolute;
  bottom: 273px;
  left: 290px;
}
.b-address {
  position: absolute;
  bottom: 242px;
  left: 290px;
}
.city-state-code {
  position: absolute;
  bottom: 212px;
  left: 290px;
}



  </style>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>



 
</body>
</html>
<script>
$(document).ready(function() {
  downloadPagesAsPDF();
});

async function downloadPagesAsPDF() {
   const ids = ['one', 'two', 'three', 'four'];
   const elements = ids.map(id => document.getElementById(id)).filter(el => el !== null);
   $('#generatedownload').modal('show');
   generatePDF(elements);
}

async function generatePDF(elements) {
    try {
        const pixelToMmRatio = 25.4 / 96;
        const widthInMm = 918 * pixelToMmRatio;
        const heightInMm = 1188 * pixelToMmRatio;
        const pdf = new jspdf.jsPDF({
            orientation: 'p',
            unit: 'mm',
            format: [widthInMm, heightInMm],
        });

        for (let i = 0; i < elements.length; i++) {
            const element = elements[i];
            const canvas = await html2canvas(element, { scale: 1 });
            const imgData = canvas.toDataURL('image/jpeg', 1.0);

            if (i !== 0) {
                pdf.addPage([widthInMm, heightInMm], 'p');
            }
            pdf.addImage(imgData, 'JPEG', 0, 0, widthInMm, heightInMm);
        }

        $('#generatedownload').modal('hide');
        window.location.href = "<?= base_url('Chrm/payroll_setting?id=' . $_GET['id']); ?>";
        const currentDate = new Date();
        const formattedDate = `${currentDate.getMonth() + 1}-${currentDate.getDate()}-${currentDate.getFullYear()}`;
        const formattedTime = `${currentDate.getHours()}-${currentDate.getMinutes()}-${currentDate.getSeconds()}`;
        const formattedDateTime = `${formattedDate}_${formattedTime}`;
        
        pdf.save(`940_${formattedDateTime}.pdf`);
    } catch (error) {
        console.error('Error generating PDF:', error);
        alert('An error occurred while generating the PDF. Please try again.');
        $('#generatedownload').modal('hide');
    }
}

</script>

