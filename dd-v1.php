<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <title>DISPATCH DETAILS </title>
    </head>
    <body>
        <br>
        <div class="container" style="border: 4px solid;"><br>
            <div class="container" style="padding: 2px; border: 2px solid;margin: 2px;text-align: center;font-size: 12PX;">
                <!--<p style="text-align: center;font-size: 12PX;">-->
                <div class="row" >
                        <div class="col " style="padding: 10px;margin:1px; font-size: 12PX; text-align: center;">
                            <strong style="font-size: 18PX;">SUDHIR SWITCHGEARS PVT LTD</strong>
                            <br>
                            <strong style="font-size: 16PX;">DISPATCH DETAILS</strong>
                        </div>  
                </div>
                <div contenteditable="true">
                <p style="padding: 10px;font-size: 12PX;border: 2px solid;margin:1px; text-align:left;">
                <?php?>
                Dispatch details - <strong ><?php echo $_GET["ms"]; ?></strong>&nbsp;- <strong ><?php echo $_GET["mrms"]; ?></strong>&nbsp;<BR>
                
                <strong ><?php echo $_GET["ms"]; ?></strong>&nbsp;<BR>
                
                Dear Sir<BR>

                We have dispatched GE/ Alstom make Relays as per below by <strong style="font-size:15px;"><?php echo $_GET["loca"]; ?></strong>&nbsp; vide their <strong style="color:blue; font-size:15px; "><?php echo $_GET["DKT"]; ?></strong> dt. <strong ><?php echo $_GET["dt2"]; ?></strong>
. Ex-Bhiwandi to <strong style="font-size:15px; "><?php echo $_GET["mrms1"]; ?></strong> on c.c attached bases packed in <strong style="font-size:15px; " ><?php echo $_GET["box"]; ?></strong>.  Documents have been sent with consignment.  This is for your info and necessary action.<BR>

PO No.- Order - <strong style="color:red; font: size 13px;"><?php echo $_GET["mrms"]; ?></strong>     Dtd.: <strong style="color:red; font-size:13px; "><?php echo $_GET["dt"]; ?></strong>
 <BR>

 <strong style="color:blue; font-size:15px; "><?php echo $_GET["i"]; ?></strong>
                
                
                     <!-- 
                        <strong style="font-size: 16px;">PARTY INFORMATION</strong><br>
                            <strong>M/s : - <input type="text" name="ms"size="80"></strong><br>
                            <strong>PO : - <input type="text" name="mrms" value="PO " size="20"></strong>
                            <strong>DT : - <input type="date"name="dt"><br></strong>
                            <strong>TRANSPORT : - <input type="text" name="loca"size="60"></strong><br>
                            <strong>LR/DKT No : - <input type="text" name="DKT" value="LR/DKT "></strong> 
                            <strong>dt : - <input type="date"name="dt2"></strong><br>
                            <strong>DESTINATION : - <input type="text" name="mrms1"size="60"></strong><br>
                            <strong>NO BOX : - <input type="text" name="box" value="1" size="20"></strong><br>
                            <strong>ITEM : - <input type="text" name="i" value="VAJH13- 1 NO" size="20"></strong><br>
                     
                     M/s : name="ms"size="80"></strong><br>
                        PO name="loca"size="20"></strong>   <strong>DT:<input type="date"name="dt"><br></strong>
                        TRANSPORT  name="mrms"size="60"></strong><br>
                        LR/DKT No: name="DKT"></strong> <strong>dt:<input type="date"name="dt2"></strong><br>
                        DESTINATION name="mrms1"size="60"></strong><br>
                        NO BOX name="box"size="20"></strong><br>
                        ITEM name="i"size="20"></strong><br>
                    -->
                    

                </p>    
            </div>
            <br>
        </div>
    </body>
</html>


 <!--<#?php
$conn = mysqli_connect("localhost", "root", "","sspl");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$v='vajh13yf0000bba';
$sql = "SELECT * FROM `i30` where `model no`='".$v."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo $row['model no'] ."<br> ".$row['des1'] ."<br> ".$row['type']."<br> ".$row['case size']."<br> ".$row['application']."<br> ".$row['aux_current_voltage']."<br> ".$row['contacts']."<br> ".$row['total burden']." <br>".$row['flag']."<br> ".$row['mounting']."<br> ".$row['name plate']."<br> ".$row['outline drawing']."<br>".$row['writing diagram']."<br><br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>   --> 