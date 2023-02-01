<?php include_once('header.php'); ?>
<nav id="sidebar">
    <div class="sidebar-header">
        <a href="index.php">
            <h2><center>Kho tài liệu</center></h2>
        </a>
    </div>
    <ul class="list-unstyled components">

        <li class="dropdown">
            <a href="index.php">
                <i class="material-icons">home</i><span>Trang chủ</span></a>
        </li>
</nav>
<div id="content">
		   
		   <!--top--navbar----design--------->
		   
		   <div class="top-navbar">
		      <nav class="navbar  navbar-expand-lg">
			     <button type="button" id="sidebar-collapse" class="d-xl-block d-lg-block d-md-none d-none">
				   <span class="material-icons">arrow_back_ios</span>
				 </button>
				 <h3>Trang chủ</h3>
			
				 <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
				   data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle">
				    <span class="material-icons">menu</span>
				 </button>
				 <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarcollapse">
				    
					<ul class="nav navbar-nav ml-auto">
					   
					   <li class="nav-item dropdown active">
					  <a class="nav-link " href="#" data-toggle="dropdown">
					    <span class="material-icons">notifications</span>	
						<span class="notification">1</span>
						</a>
						<ul class="dropdown-menu">
						   <li>
						     <a href="#">Okay</a>
						   </li>
						</ul>
					</li>
					
					
					<li class="nav-item">
					  <a class="nav-link" href="index.php"><span class="material-icons">home</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="./Login/login.php"><span class="material-icons">person</span></a>
					</li>
					<li class="nav-item">
					  <a class="nav-link" href="#"><span class="material-icons">settings</span></a>
					</li>
				    
					</ul>
				 
				 </div>
				 
			  </nav>
		   </div>
		   
		   
		   
<?php include_once('main-content.php'); ?>
<?php include_once('footer.php'); ?>