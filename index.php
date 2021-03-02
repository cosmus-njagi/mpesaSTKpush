<html>
<head>
<title>Mpesa push</title>
</head>
<body>
<div class="container text-centre">
<H1>Testing STK PUSH </H1>

            <?php 
             if (isset($_GET['error'])) {

            ?>
            <span style="color: red;">Email or Password error !! try again</span>
            <?php   } else if (isset($_GET['success'])){ ?>
            <span style="color: green;">Login successfully</span>
            <?php  
             }?>
                    
<form action="https://www.cosmusnjangi.co.ke/lipa.php" method="POST">
Name:<br>
<input type="text" name="Name" required /><br>
Phone Number:<br>
<input type="text" name="phone"  placeholder="254700711233" required /><br>
Amount to pay:<br>
<input type="text" name="Amount" required /><br>
Email Address:<br>
<input type="email" name="email" required /><br>
<input type="submit" name="submit" Value="Confirm" required /><br>
</form>
</div>
</body>
</html>