
<?php 
include 'inc.php';
include 'navbar.php';
 ?>
<style type="text/css">
	.blockquote-footer{
		word-spacing: 10px;
	}
	.jus, p{
		text-align: justify;
	}
	.btn{
		float: none;
	}
	.jumbotron{
		padding-bottom: 0px;
	}
	img{
		width: 30%;
	}
	h3{
		font-size: 1.5rem;
	}
	/*.port1{
		display: inline-block;
    	padding: 10px 15px 15px 15px;
	}
	.port2{
		display: inline-block;
    	padding: 10px 15px 15px 15px;	
	}*/
	.footer {
	  background: #0000006e;
	  color: white;
	}
	.footer .links ul {
	  list-style-type: none;
	}
	.footer .links li a {
	  color: white;
	  transition: color .2s;
	}
	.footer .links li a:hover {
	  text-decoration: none;
	  color: #4180CB;
	}
	.footer .about i {
	  font-size: 25px;
	}
	.footer .about a {
	  color: white;
	  transition: color .2s;
	}
	.footer .about a:hover {
	  color: #4180CB;
	}
	.footer .location i {
	  font-size: 18px;
	}
	.footer .copyright p {
	  border-top: 1px solid rgba(255, 255, 255, 0.1);
	}

</style>

 <div class="jumbotron">
 	<h1>KOUNDINYA SANAGALA</h1>
	<blockquote class="blockquote text-right">
		 <footer class="blockquote-footer"><strong>HARDWORKING ETHICAL MOTIVATED</strong></footer>
	</blockquote>
 </div>
 <div class="container">
 	<h2>ABOUT MYSELF</h2>
 	<img src="index.jpg" alt="index">
 	<p class="jus">Introducing myself i stand on a sweet spot where design and code intersects.I have completed my graduation in the year 2019 from CSE.I have learned a lot from people around me and how to interact with them.I love to code web applications of my own.Till now i have created two projects with this.In future i will be doing more web applications taking real world scenarios.I am an Enthusiastic and Passionate Web Developer.I want to start my career in web development.Some of my career interests are Data Science, Game Designing and Development, Ethical Hacking.
 	</p>
 	<a href="contact.php" class="btn btn-success">GetInTouch</a>

 	<h2>Projects</h2>
	<p>I have done some of the projects in PHP,you can access to the portfolio link provided.In few days i am going to start another project in PHP.These projects are deployed in my github.</p>

 	<div class="row">
		<div class="col-md-6"> 
	 		<img src="crud.png" alt="CRUD" class="rounded">
		 	<h3>Project CRUD</h3>
			<p>Project crud in mainly based on PHP and MYSQL.In computer programming, create, read, update, and delete are the four basic functions of persistent storage. Alternate words are sometimes used when defining the four basic functions of CRUD, such as retrieve instead of read, modify instead of update, or destroy instead of delete.</p>
			<a href="portfolio.php" class="btn btn-info">Read more</a>	
	 	</div>
	 	<div class="col-md-6">
	 		<img src="port.jpeg" alt="portfolio" class="rounded">
		 	<h3>Project Portfolio</h3>
		 	<p>In this project the main aim is to projecting myself.I have included about myself,my projects and details about me.I have used some of the bootstrap content for more look and feel content.</p>
		 	<a href="portfolio.php" class="btn btn-info">Read more</a>
	 	</div>
 </div>
 	
</div>

<div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about">
      <h2>Portfolio</h2>
      <p class="pr-5 text-white-50">This is my portfolio.I have included all my certifications,hobbies,projects and more.I developed this website as per my knowledge.I you have any queries you can go through contact link.You can give comments on website. </p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="about.php">About</a></li>
          <li>- <a href="portfolio.php">Projects</a></li>
          <li>- <a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>Alkapuri,Hyderabad.</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>9398603797</p>
      <p><i class="fa fa-envelope-o mr-3"></i>koundi.369@gmail.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div>

<?php
	include 'footer.php';
?>