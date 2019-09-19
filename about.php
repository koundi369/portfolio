<?php 
include 'inc.php';
include 'navbar.php';
 ?>
<style type="text/css"> 
	
	h1, h2{
		text-align: center;
	}
	.container{
		margin-top: 15px;
	}
	.table-bordered{
		width: 40%;
		margin: auto; 
		float: left;
	}
	.table-striped{
		margin: 85px;
    	float: right;
    	
	}
	#table-bordered{
		width: auto;
		margin-top: initial; 

	}
</style>
<div class="container">
	<h1>ABOUT MYSELF</h1>
	<p>Introducing myself i am recently graduated from Sreyas Institute of Engineering and Technology in the stream of Computer Science and Engineering from the year of passout-2019.Currently i am seeking for an opportunity to work with an organization,where i can utilize my skills and knowledge.</p>

<table class="table table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Languages Known</th>
    </tr>
  </thead>
  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>HTML5</td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>CSS</td>
	    </tr>
	    <tr>
	      <th scope="row">3</th>
	      <td>JavaScript</td>
	    </tr>
	    <tr>
	      <th scope="row">4</th>
	      <td>Bootstrap</td>
	    </tr>
	    <tr>
	      <th scope="row">5</th>
	      <td>PHP</td>
	    </tr>
	    <tr>
	      <th scope="row">6</th>
	      <td>MYSQL</td>
	    </tr>
	    <tr>
	      <th scope="row">7</th>
	      <td>C-Language</td>
	    </tr>
	    <tr>
	      <th scope="row">8</th>
	      <td>Core Java</td>
	    </tr>
	  </tbody>
	</table>

<table class="table table-striped table-bordered table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hobbies</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
      <th scope="row">1</th>
      <td>Web surfing</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Web Programming</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Playing cricket,Football</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Playing Video games</td>
    </tr>
  </tbody>
</table>

	<table class="table table-bordered table-sm" id="table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Certifications</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
	    <tr>
	      <th scope="row">1</th>
	      <td>Certification on C Language Associate from Cisco Networking Academy</td>
	      <td>5/2018 - 6/2018</td>
	      <td>Intermediate level training given on C programming language for 1 month which was held at "Sreyas Institute of Engineering and Technology"</td>
	    </tr>
	    <tr>
	      <th scope="row">2</th>
	      <td>Certification on Web Development from Ace Web Academy</td>
	      <td>1/2019 - 6/2019</td>
	      <td>Trained on Web Technologies like HTML5,CSS3,JavaScript,Bootstrap,PHP,MYSQL.</td>
	    </tr>
</div>
<?php
	include 'footer.php';
?>
