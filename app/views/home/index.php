<?php $this->setSiteTitle('AMCC Home'); ?>

<?php $this->start('head'); ?>

<link rel="stylesheet" type="text/css" href="<?=PROOT?>css/style.css">
	
<?php $this->end(); ?>

<?php $this->start('body'); ?>

 <div class="bck">

 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
 	<div class="container">
  <a class="navbar-brand" href="<?=PROOT?>home/index"><img src="<?=PROOT?>images/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> AMCC.lk</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=PROOT?>home/index">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
    </ul>
    <ul class="navbar-nav  navbar-right">
    	<li> 
    		<a class="nav-link" href="<?=PROOT?>login/index"><i class="fa fa-user"></i>Login</a>
    	</li>
    </ul>

  </div>
  </div>
</nav>

  <div class="container">
      <div class="row">
  		<div class="col-lg-12">
  		 <div class="content">
        <div class="box">
  			<h1>A M C C SMS</h1>
  			<h3>Welcome to AMCC Student Management System</h3>
        </div>
  			<hr>
  		 </div>
      </div>
  	</div>
  </div>


</div>
<br>

<br>

<div class="jumbotron">
	
</div>

<p>AMCC.lk all rignht reserved</p>

<?php $this->end(); ?>