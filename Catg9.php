<?php 
require('config/db.php');
$query = 'SELECT * FROM postss WHERE catg9 LIKE "y"  AND  status LIKE "p" ORDER BY date DESC';
$result = mysqli_query($conn, $query);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>What,when,where | Catg9</title>
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
	<div class="container">
		<div id="branding">
			<h1><span class="highlight ">title</span>here</h1>
		</div>
	 <nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="catg1.php">Catg1</a></li>
			<li><a href="catg2.php">Catg2</a></li>
			<li><a href="catg3.php">Catg3</a></li>
			<li><a href="catg4.php">Catg4</a></li>
			<li><a href="catg5.php">Catg5</a></li>
			<li><a href="catg6.php">Catg6</a></li>
			<li><a href="catg7.php">Catg7</a></li>
			<li><a href="catg8.php">Catg8</a></li>
			<li class="current"><a href="catg9.php">Catg9</a></li>
			<li><button  class="loginbtn" onclick="document.getElementById('id01') .style.display='block'">LOGIN</button></li>
			<li><button  class="loginbtn" onclick="document.getElementById('id02') .style.display='block'">REGISTER</button></li>
			<li><a href="mailto:contactus@example.com">Contact us</a></li>

<!-- The Modal -->
<div  id="id01" class="modal animate">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    
    
      <label for="uname" class="blk"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
<br>
      <label for="psw" class="blk"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
<br>
      <button type="submit" class="button_1  blk">Login</button>
   
  </form>
</div>

<div id="id02" class="modal animate">
  <span onclick="document.getElementById('id02').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="/action_page.php">
    
    
      <label for="uname" class="blk"><b>Name</b></label>
      <input type="text" placeholder="Enter Name..." name="name" required>
<br>
      <label for="email" class="blk"><b>E-mail</b></label>
      <input type="email" placeholder="Enter Email..." name="email" required>
<br>
      <button type="submit" class="button_1  blk">Login</button>
   
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementByClass('modal animate');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
		</ul>
	 </nav>
    </div>
</header><br><br>
<section id="showcase">
	
<?php  

foreach($posts as $post) :
		if ( $post['is_catg_head'] === "9" ){?>
	 <img src = <?php echo $post['img']; ?> >
	
	<h1>
		 

<?php	   echo $post['headline']; 
}
        

endforeach; ?>
</h1>
</section>

    </div>

</section><br><br><br><br>
<?php 

foreach($posts as $post) : ?>


	<div class="box">
		<div class="box_img">
			<img src =<?php echo $post['img']; ?>>
			

		</div>
		<div class="box_article">
			<h2><?php echo $post['headline']; ?></h2>

		<?php echo  $post['article']; ?> 
		<br>
	</div>
</div>
<?php endforeach; ?>
<footer><p>This is where copyright appears &copy; </p></footer>
</body>
</html>
 