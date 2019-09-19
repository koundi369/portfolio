<?php
	session_start();

?>
<?php 
	include 'inc.php';
	include 'navbar.php';
?>	
<div class="container">
<div class="alert alert-success">
<p>Dear <?php  echo $_SESSION['email'];?>Your registraion was successful and your mailid and password are: <?php echo $_SESSION['subject'];?> and <?php echo $_SESSION['textarea'];?></p>
</div>
</div>

<?php include 'footer.php'; ?>