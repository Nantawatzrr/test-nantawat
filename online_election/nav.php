	 <?php 
        session_start();
        include('server.php');
		if(isset($_SESSION['user'])){
        // include('function.php');
        // check();
        $id = $_SESSION['user'];
        $sql = "SELECT username FROM user WHERE id = '$id'";
        $query = mysqli_query($conn, $sql);
    ?>
    
        
    
		
			<div class="header-left">
				<a href="#" class="logo"> <img src="assets/img/nvc.jpg" width="50" height="70" alt="logo"> <span class="logoclass">NVC ELECTION</span> </a>
				<a href="#" class="logo logo-small"> <img src="assets/img/nvc.jpg" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
			<?php 
            	while($result = mysqli_fetch_array($query)){
					$username = $result['username'];
                	
                ?>
                
            
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/user.png" width="31" ></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							
							<div class="user-text">
								<h6>ยินดีต้อนรับคุณ : <?php echo $username;?></h6>
								
							</div>
						</div> 
						<!-- <a class="dropdown-item" href="profile.html">My Profile</a> <a class="dropdown-item" href="settings.html">Account Settings</a>  -->
						<a class="dropdown-item" href="logout.php">Logout</a> 
					</div>
				</li>
			<?php } 
			}else{ ?>
			<div class="header-left">
				<a href="#" class="logo"> <img src="assets/img/nvc.jpg" width="50" height="70" alt="logo"> <span class="logoclass">NVC ELECTION</span> </a>
				<a href="#" class="logo logo-small"> <img src="assets/img/nvc.jpg" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<a href="login.php">Sing in</a>
			
			<?php } ?>
			</ul>
			
		
		
		


	
