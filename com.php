
<?php
// Start the session
session_start();
?>
<html>
<head>		<link rel="stylesheet" href="css/first.css">
</head>
<body >
<script>
alert("Thank you for your feedback, Keep going with us!")
</script>
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
			<li><a href="index.html" class="current">Home</a></li>  
			<li>	<a href="test.html">Gallery</a></li>  
			<li> <a href="Aboutus.html">About us</a> </li> 
			<li><a href="buy.html" >Buy</a> </li> 
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
  </div>
</div>
</div>
	</ul>	
	</div>
		</div>
		<div id="templatemo_content">
    
			<div id="content_left">
				<div class="content_left_section">
					<div class="content_title_01">Buying</div>
						You can buy whatever cat you want based on your desire and also the amount money.
					<div class="cleaner">&nbsp;</div>
				</div> <!-- end of booking -->
				
				<div class="cleaner_h30">&nbsp;</div>
				<div class="cleaner_horizontal_divider_01">&nbsp;</div>
				<div class="cleaner_h30">&nbsp;</div>
				 
				<div class="content_left_section">
				<div class="content_title_01">Leave a comment</div>
				<form action="com.php" method="POST" class="form">
					<input type="text" name="Email" placeholder="Your email address"/>
					<input type="password" name="password" placeholder="password"/>
					<input type="textarea" row=“10” cols=“30” name="comment" placeholder="Feedback or suggestions"/>
					</textarea>
				
					<input type="submit" value="Send" style="width: 50%; " >        

				</form>
				</div>	
				<div class="cleaner_horizontal_divider_01">&nbsp;</div>
            <div class="cleaner_h30">&nbsp;</div>
            </div>
	 <!-- end of content left -->
			
			<div id="content_right">
			
				<div class="content_right_section">
				
					<div class="content_title_01">Welcome to online purchase of cats</div>
				<img src="pics/i.jpg" alt="image" />
					<p> This is a website that provides you with all functionalities regarding a <b> Cat purchase.</b> </p>
				  <p>All the cats here are free of any pandemic diseases. </p>
				  <p>You can come to our company in person and see everything with your own eyes but we assure you that you can buy it here online save your time and we will deiver it to your provided address on time so you do not need to worry <I><a href="Buy.html">order here and save your time</a></I>.</p>
				 </div>
				
				
				<div class="cleaner_h40">&nbsp;</div>
				
				<div class="content_right_2column_box">
					<div class="content_title_01">Locations</div>
					<p> We have branches in every subcities of mekele,tgray and also some of our braches are found in some city of tgray.</p>
				
					<ul>
						<li>Adigart</li>
						<li>Wukro</li>
						<li>Shire</li>
						<li>Maychew</li>
						<li>Axum</li>
					</ul> 
					<div class="cleaner_h10">&nbsp;</div>
					<div class="rc_btn_02"><a href="#"></a></div>          
				</div>
	
				<div class="content_right_2column_box">
					<div class="content_title_01">Services</div>     
					<p>What Do you get from this site? </p>           
					<ul>
						<li>Buy a cat</li>
						<li>Be a member of our community of cat and help the cats that are scattered in the city without owner.</li>
						
					<div class="cleaner_h10">&nbsp;</div>
					<div class="rc_btn_02"><a href="#">View All</a></div>          
				</div>    
				
				<div class="cleaner_h40">&nbsp;</div>
				
				
				<div class="content_right_section">
					<div class="content_title_01">Gallery</div>
						<div class="gallery_box">
							<img src="mb/2.jpg" alt="image" style="width:60px;"/>
							<a href="#">one</a>
						</div>
						<div class="gallery_box">
							<img src="mb/8.png" alt="image" style="width:60px;"/>
							<a href="mb/8.png">two</a>
						</div>
						<div class="gallery_box">
							<img src="pics/9.jpg" alt="image" style="width:60px;"/>
							<a href="#">three</a>
						</div>
						<div class="gallery_box">
							<img src="pics/96148622_1144278685924745_3891113376582991872_n(1).jpg" alt="image"style="width:60px;" />
							<a href="#">four</a>
						</div>
						<div class="gallery_box">
							<img src="mb/mbb.jpg" alt="image" style="width:90px;"/>
							<a href="#">five</a>
						</div>
						
						<div class="cleaner_h20">&nbsp;</div>
						<div class="rc_btn_02"><a href="gallery.html">View All</a></div>
						
						<div class="cleaner">&nbsp;</div>
				</div>                    
				<div class="cleaner_h20">&nbsp;</div>
			</div> <!-- end of content right -->
			
			<div class="cleaner">&nbsp;</div>
		</div>
        
		<div id="footer">
			Copyright © 2021 <strong>cat's online purchase</strong> by <i><font color="red"><a href="last.html">Mahtot G/her</a></font></i>
				
			</div>
	</div>


<?php

$pass=$_POST['password'];
$name=$_POST['Email'];
$Comm=$_POST['comment'];

$dbhost = 'localhost';
   $dbuser = '';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   if(! $conn ) {
    die('Could not connect: ' . mysql_error());
 }
 
 
 
 $sql = 'CREATE Database  IF NOT EXISTS  test_db';
 $retval = mysql_query( $sql, $conn );
 
 if(! $retval ) {
    die('Could not create database: ' . mysql_error());
 }
 
 
 mysql_select_db( 'test_db' );
 $sqll = 'CREATE TABLE  IF NOT EXISTS employee( '.
      'Email VARCHAR(20) NOT NULL, '.
      'password  VARCHAR(20) NOT NULL, '.
      'comment   text NOT NULL)';

   $retvall = mysql_query( $sqll, $conn );

   if(! $retvall ) {
    die('Could not create table: ' . mysql_error());
 }

 
 $query = "INSERT INTO employee(Email, password, comment )
	      VALUES ('$name','$pass','$Comm' );";
         $boo = mysql_query($query, $conn);	
	    if(! $boo ) {
		  die("Could not connect: " . mysql_error()); 
	    }  	 

 mysql_close($conn);
?>
</div>
</div>
</body>
</html>
