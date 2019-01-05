 



<!DOCTYPE html>
<html lang="en">
<head>
    
    
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Item Lists</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    
    
    <!-- start: CSS -->
    <link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
    <link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
   
    <!-- end: CSS -->
    

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link id="ie-style" href="css/ie.css" rel="stylesheet">
    <![endif]-->
    
    <!--[if IE 9]>
        <link id="ie9style" href="css/ie9.css" rel="stylesheet">
    <![endif]-->
        
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- end: Favicon -->
    <style type="text/css">
        @media print
        {
            #PrintPageButton{
            display:none;
        }
            #texta{
                display border: none;
            }

    }
    </style>

        

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-box">
                        

                    <div class="invoice-header text-right">
                        
                        <span style="float:left;width: 10%;">
            <img src="img/logo.png"  
             width="200" height="150" />
        </span>
                        
                        <h4 style="font-size:16px;">अमोल साळवी <br><h5>9923296983</h5> </h4>
                        <table align="right"><h4 ><tr><th style="font-size:16px;">अस्मिता  साळवी</th></h4>
                            <h4 style="font-size:16px;"><th style="font-size:16px;">अनिल साळवी </th></h4></tr><tr><th><h5>9049400804</h5> </h4><th><h5>9823596983</h5></h4></tr></table></div><br><br>
                        <h5 align="left"><b>967 'ई' वॉर्ड शाहूपुरी 6 वी गल्ली कोल्हापूर </b></h5>
                    
                <hr style=" border-top: double ;" />
                    <hr>
                   <?php
                   include "db.php";
                                     
                                    //$ids=$_GET['id'];
                                   $ids=$_GET['id'];

                       $q2= "SELECT * FROM event_info where c_id='$ids'";
                       $result = mysqli_query($con,$q2) or die (mysql_error());
                 while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                    {
                   ?>
                    <div class="invoice-body">                  
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin-bottom: 5px">
                                <tr>

                                    <td colspan="2">
                                        Name: <input type="text" name="" id="texta" value="<?php echo $row['cust_name'] ;?>"><br>
                                        Address: <input type="text" name="" value="<?php echo $row['cust_add'] ;?>">
                                    </td>
                                    <td colspan="2">
                                        <span>Order No.:<input type="text" name="" id="texta" value="<?php echo $row['c_id'] ;?>"></span><br>
                                        <span>Date :<input type="date" name="date" value="<?php echo $row['date'];}?>"  required="Please select date" ></span>
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <th>PARTICULARS</th>
                                    <th>QTY</th>
                                    <th>RATE</th>
                                    <th>AMOUNT</th>
                                </tr>
                                <?php
                                $tot=0;



                                  $q1= "SELECT * FROM cat_dishes where c_id='$ids'";
$result = mysqli_query($con,$q1) or die (mysql_error());
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    ?>
                              
                                <tr>
                                    
                                    <td><?php echo $row['d_name'] ;?></td>
                                    <td><?php echo $row['d_qty'] ;?></td>
                                    <td><?php echo $row['d_price'] ;?></td>
                                    <td><?php echo $row['total'] ; $tot += $row['total'];} ?></td>
                            
                               
                                </tr>

                                <tr>
                             
                                </tr>
                                <tr >
                                
                                    
                                
                                    

                                    <td colspan="3"  style="text-align: right;"><b>Total:</td>
                                    <td>
                                        <?php echo $tot;?>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                        
 <?php
  /**
   * Created by PhpStorm.
   * User: sakthikarthi
   * Date: 9/22/14
   * Time: 11:26 AM
   * Converting Currency Numbers to words currency format
   */

   $no = round($tot);
   $point = round($tot - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
 
 ?> 
                        <p>RUPEES IN WORDS : <u><?php  echo $result . "Rupees  "   ?></u></p>
                        <div class="tc-box">
                            <p> Note:</p>
                            <p>A bill amount is the minimum amount for the order placed by you.</p>
                            <p>Further any extras will charged accordingly.</p>
                        </div>
<br><br>
<div width="100%" >
    <div width="50%"  style="float:left">
        <b>      
                            RECEIVER'S SIGNATURE & STAMP</b> 
                    </div>
                    <div width="50%" style="float:right;">
                         <b>FOR SALVI CATERING      
                            </b>   

                </div>
                </div>
            </div><br><br>
                <div class="text-center">
                    <button id="PrintPageButton" class="btn btn-default print-btn" onclick="window.print();">Print</button>
                </div>          
            </div>          
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>















