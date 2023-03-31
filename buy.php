<html>
<head>
	<title>
		Buy Cats online
	</title>
		<link rel="stylesheet" href="css/first.css">
	

    <link rel="stylesheet" href="all.css">
		
	</head>
      
	<body>
		<div id="templatemo_container">
			
			<div id="templatemo_header">
				<div id="website_title">
					<div id="title">
						Buy cats online
					</div>
					<div id="salgon">
						The best service at the lowest price</div>
				</div>
			</div>
			<div id="templatemo_banner">
				<div id="templatemo_menu">
					<ul>
			<li><a href="index.html" >Home</a></li>  
			<li>	<a href="test.html">Gallery</a></li>  
			<li> <a href="Aboutus.html">About us</a> </li> 
			<li><a href="buy.html" class="current">Buy</a> </li> 
			<li><a href="mail.html" class="last">Email us</a> </li>
	<div>
			<div class="dropdown">
          <span><li><a href="index.html" class="last">Share</a> </li> </span>
      <div class="dropdown-content">
        <ol>
		<li><a href="facebook.html"> Facebook</a></li>
		<li><a href="facebook.html"> instagram </a></li>
		<li><a href="facebook.html"> Telegram </a></li>	
	</ol>
  </div><br><br>
</div>
</div>
	</ul>	
    </div>
    
         




    <div class="form">
    

    <div class="form-white-background">	
    <div class="content">	
<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$Pnum=$_POST['pno'];

$city=$_POST['city'];
$adress=$_POST['adress'];
$code=$_POST['Code'];







$con=mysql_connect("localhost","root","");
   if(! $con ) {
    die('Could not connect: ' . mysql_error());
 }
 
 
 
 $sql = 'CREATE Database  IF NOT EXISTS  Buy';
 $retval = mysql_query( $sql, $con );
 
 if(! $retval ) {
    die('Could not create database : ' . mysql_error());
 }
 
 
 mysql_select_db( 'Buy' );
 $sqll = 'CREATE TABLE  IF NOT EXISTS buying( '.
       'first_name text NOT NULL, '.
       'last_name text NOT NULL, '.
     'Phone_number   VARCHAR(20) NOT NULL, '.
      'city text NOT NULL, '.
      'adress text NOT NULL, '.
      'code VARCHAR(20) NOT NULL)';

   $retvall = mysql_query( $sqll, $con );

   if(! $retvall ) {
    die('Could not create table: ' . mysql_error());
 }
 $sqll="SELECT * FROM buying WHERE code='$code' ";
$retvall=mysql_query($sqll,$con);
 if(mysql_num_rows($retvall)>=1 ){
    echo "<h3 style='color:grey;text-align:center'><span ><center>That cat is already bought.</center></span></h3><br><br>";
    echo'<a href="buy.html"> <button size="200px">Buy a new one</button></a>';
 }
 else{

 $query = "INSERT INTO  buying(first_name,last_name, Phone_number,city,adress,code )
	      VALUES ('$fname','$lname','$Pnum','$city','$adress','$code');";
         $boo = mysql_query($query, $con);	
	    if(! $boo ) {
		  die("Could not connect: " . mysql_error()); 
	    }  	 
echo "<h4 style='color:grey;text-align:center'>You have successfully bought your cat we will deliver it as per the address you have provided.
</h4>";
$sqll="SELECT * from buying where code='$code'  ";
$retvall=mysql_query($sqll,$con);
if(!$retvall){
   die('Could not fetch the required data: '.mysql_error());

}
while($row = mysql_fetch_array($retvall, MYSQL_ASSOC)) {
   echo "<h5 style='color:grey;text-align:center'> First Name :{$row['first_name']}  <br> ".
   "Last Name : {$row['last_name']} <br> ".
   "Phone Number : {$row['Phone_number']} <br> ".
   "City : {$row['city']} <br> ".
   "Home address: {$row['adress']} <br> ".
   "Cat code : {$row['code']}<br></h5>";
      
}

echo "<h3 style='color:grey;text-align:center'>Thank you for using our service.\n</h3>";
}
 
mysql_close($con);

?>
</div>
		</div>
	</body>
</html>