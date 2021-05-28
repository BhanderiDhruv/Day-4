	<?php error_reporting(0); ?>
	
	<div class="header-wrap">
		<header>
			<!-- LOGO -->
			<a href="index.php">
				<figure class="logo">
					<img src="images/logo1.png" alt="logo">
				</figure>
			</a>
			<!-- /LOGO -->

			<!-- MOBILE MENU HANDLER -->
<!-- 			<div class="mobile-menu-handler left primary">
				<img src="images/pull-icon.png" alt="pull-icon">
			</div> -->
			<!-- /MOBILE MENU HANDLER -->

			<!-- LOGO MOBILE -->
			<a href="index.php">
				<figure class="logo-mobile">
					<img src="images/logo1.png" alt="logo">
				</figure>
			</a>
			<!-- /LOGO MOBILE -->

			<!-- MOBILE ACCOUNT OPTIONS HANDLER -->
			<!-- <div class="mobile-account-options-handler right secondary">
				<span class="icon-user"></span>
			</div> -->
			<!-- /MOBILE ACCOUNT OPTIONS HANDLER -->

			<!-- USER BOARD -->
			<div class="user-board">
				<!-- USER QUICKVIEW -->
				<div class="user-quickview">
					<!-- USER AVATAR -->
					<?php if ($_SESSION['user_id']!='' && $_SESSION['developer_id']!=''  ) { 
						
							@$login="SELECT * FROM `user_registration` where `user_id` = '".$_SESSION['user_id']."' ";
							$qry=mysqli_query($con,$login);
							$row=mysqli_fetch_assoc($qry);				
						?>
					
					<a href="index.php?page=author-profile">
					<div class="outer-ring">
						<div class="inner-ring"></div>

						<figure class="user-avatar">
							<img src="admin_theme/images/user/<?php echo $row['profile']; ?>" alt="avatar" height="40" width="40"><!-- images/avatars/avatar_01.jpg -->
						</figure>
					</div>

					<!-- /USER AVATAR -->

					<!-- USER INFORMATION -->
					<p class="user-name"><?php  echo ucwords($row["first_name"]); ?></p><?php ?>
					</a>
				<?php }?>

			<!-- USER LOGIN -->
				<?php if ($_SESSION['user_id']!=''){
					@$login="SELECT * FROM `user_registration` where `user_id` = '".$_SESSION['user_id']."' ";
					$qry=mysqli_query($con,$login);
					$row=mysqli_fetch_assoc($qry);	
				?>

				<a href="index.php?page=author-profile">
					<div class="outer-ring">
						<div class="inner-ring"></div>

						<figure class="user-avatar">
							<img src="admin_theme/images/user/<?php echo $row['profile']; ?>" alt="avatar" height="40" width="40">
						</figure>
					</div>

					<p class="user-name"><?php  echo ucwords($row["first_name"]); ?></p><?php ?>
					</a>
				

				<ul class="dropdown small hover-effect closed">
					
						<li class="dropdown-item">
							<a href="index.php?page=request-project">Request Project</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=auction-page">Auction Page</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=dashboard-purchases">Your Purchases</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=payment">Payment</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=feedback">feedback</a>
						</li>
					</ul>
					<?php }?>
			<!-- /USER LOGIN -->

			<!-- DEVELOPER LOGIN -->
				<?php if ($_SESSION['developer_id']!=''){
					@$login="SELECT * FROM `developer_registration` where `developer_id` = '".$_SESSION['developer_id']."' ";
						$qry=mysqli_query($con,$login);
						$row=mysqli_fetch_assoc($qry);	
				?>

				<a href="index.php?page=author-profile">
					<div class="outer-ring">
						<div class="inner-ring"></div>

						<figure class="user-avatar">
							<img src="admin_theme/images/developer/<?php echo $row['profile']; ?>" alt="avatar" height="40" width="40">
						</figure>
					</div>

					<p class="user-name"><?php  echo ucwords($row["first_name"]); ?></p><?php ?>
					</a>
				
				<ul class="dropdown small hover-effect closed">
						<li class="dropdown-item">
							<a href="index.php?page=dashboard-uploaditem">Upload Item</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=auction-page">Auction Page</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=project-auction">Project auction</a>
						</li>						
						<li class="dropdown-item">
							<a href="index.php?page=dashboard-statement">Sales Statement</a>
						</li>
 						<li class="dropdown-item">
							<a href="index.php?page=dashboard-buycredits">Buy Credits</a>
						</li> 
						<li class="dropdown-item">
							<a href="index.php?page=dashboard-withdrawals">Withdrawals</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=dashboard-manageitems">Manage Items</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=feedback">feedback</a>
						</li>
					</ul>
					<?php }?>
			<!-- /DEVELOPER LOGIN -->

					<!-- <?php if ($_SESSION['user_id']!='' || $_SESSION['developer_id']!='') { 
						
							@$login="SELECT * FROM `developer_registration` where `developer_id` = '".$_SESSION['developer_id']."' ";

							@$login="SELECT * FROM `user_registration` where `user_id` = '".$_SESSION['user_id']."' ";
							$qry=mysqli_query($con,$login);
							$row=mysqli_fetch_assoc($qry);				
						?>
					
					<a href="index.php?page=author-profile">
					<div class="outer-ring">
						<div class="inner-ring"></div>

						<figure class="user-avatar">
							
							<img src="admin_theme/images/developer/<?php echo $row['profile']; ?>" alt="avatar" height="40" width="40">
							
							<img src="admin_theme/images/user/<?php echo $row['profile']; ?>" alt="avatar" height="40" width="40">
						</figure>
					</div>

					<p class="user-name"><?php  echo ucwords($row["first_name"]); ?></p><?php ?>
					</a>
				<?php }?> -->

				<?php 	if($_SESSION['user_id']!='' || $_SESSION['developer_id']!=''  ) { ?> 
		

					<!-- SVG ARROW -->
					<svg class="svg-arrow">
						<use xlink:href="#svg-arrow"></use>
					</svg>
					<!-- /SVG ARROW -->
						
					<p class="user-money"></p>
					<!-- /USER INFORMATION -->

					<!-- DROPDOWN -->
					<ul class="dropdown small hover-effect closed">
						<!-- <li class="dropdown-item">
							<div class="dropdown-triangle"></div>
							<a href="index.php?page=author-profile">Profile Page</a>
						</li> -->
						<!-- <li class="dropdown-item">
							<a href="index.php?page=dashboard-settings">Account Settings</a>
						</li> -->
							<!-- <li class="dropdown-item">
								<a href="index.php?page=dashboard-uploaditem">Upload Item</a>
							</li>
							<li class="dropdown-item">
								<a href="index.php?page=dashboard-purchases">Your Purchases</a>
							</li>
							<li class="dropdown-item">
								<a href="index.php?page=request-project">Request Project</a>
							</li>
							<li class="dropdown-item">
								<a href="index.php?page=project-auction">Project auction</a>
							</li>
							<li class="dropdown-item">
								<a href="index.php?page=payment">Payment</a>
							</li> -->
						<!-- <li class="dropdown-item">
							<a href="index.php?page=dashboard-statement">Sales Statement</a>
						</li> -->
 						<!--<li class="dropdown-item">
							<a href="index.php?page=dashboard-buycredits">Buy Credits</a>
						</li> -->
						<!-- <li class="dropdown-item">
							<a href="index.php?page=dashboard-withdrawals">Withdrawals</a>
						</li>
						<li class="dropdown-item">
							<a href="index.php?page=dashboard-manageitems">Manage Items</a>
						</li> -->
					</ul>
				<?php }?>
					<!-- /DROPDOWN -->
				</div>
				<!-- /USER QUICKVIEW -->

				<!-- ACCOUNT INFORMATION -->
				<div class="account-information">
					<a href="index.php?page=favourites">
						<div class="account-wishlist-quickview">	
							<span class="icon-heart"></span>
						</div>
					</a>
					<div class="account-cart-quickview">
						<span class="icon-present">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</span>

						<!-- PIN -->
						<span class="pin soft-edged secondary"></span>
						<!-- /PIN -->

						<!-- DROPDOWN CART -->
						<ul class="dropdown cart closed">
							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=item-v1" class="link-to"></a>
								<!-- SVG PLUS -->
								<svg class="svg-plus">
									<use xlink:href="#svg-plus"></use>
								</svg>
								<!-- /SVG PLUS -->
								<div class="dropdown-triangle"></div>
								<figure class="product-preview-image tiny">
									<img src="images/items/pixel_s.jpg" alt="">
								</figure>
								<p class="text-header tiny">Pixel Diamond Gaming Shop</p>
								<p class="category tiny primary">Shopify</p>
								<p class="price tiny"><span>$</span>86</p>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=item-v1" class="link-to"></a>
								<!-- SVG PLUS -->
								<svg class="svg-plus">
									<use xlink:href="#svg-plus"></use>
								</svg>
								<!-- /SVG PLUS -->
								<figure class="product-preview-image tiny">
									<img src="images/items/monsters_s.jpg" alt="">
								</figure>
								<p class="text-header tiny">Little Monsters - 40 Pack Button Badge Maker</p>
								<p class="category tiny primary">Graphics</p>
								<p class="price tiny"><span>$</span>10</p>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=item-v1" class="link-to"></a>
								<!-- SVG PLUS -->
								<svg class="svg-plus">
									<use xlink:href="#svg-plus"></use>
								</svg>
								<!-- /SVG PLUS -->
								<figure class="product-preview-image tiny">
									<img src="images/items/flat_s.jpg" alt="">
								</figure>
								<p class="text-header tiny">Flatland - Hero Image Composer</p>
								<p class="category tiny primary">Shopify</p>
								<p class="price tiny"><span>$</span>12</p>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<p class="text-header tiny">Total</p>
								<p class="price"><span>$</span>108.00</p>
								<a href="index.php?page=cart" class="button primary half">Go to Cart</a>
								<a href="index.php?page=checkout" class="button secondary half">Go to Checkout</a>
							</li>
							<!-- /DROPDOWN ITEM -->
						</ul>
						<!-- /DROPDOWN CART -->
					</div>
					<div class="account-email-quickview">
						<span class="icon-envelope">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</span>

						<!-- PIN -->
						<span class="pin soft-edged secondary"></span>
						<!-- /PIN -->

						<!-- DROPDOWN NOTIFICATIONS -->
						<ul class="dropdown notifications closed">
							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<div class="dropdown-triangle"></div>
								<a href="index.php?page=dashboard-openmessage" class="link-to"></a>
								<figure class="user-avatar">
									<img src="images/avatars/avatar_06.jpg" alt="">
								</figure>
								<p class="text-header tiny"><span>Sarah-Imaginarium</span></p>
								<p class="subject">Product Question</p>
								<p class="timestamp">May 18th, 2014</p>
								<span class="notification-type secondary-new icon-envelope"></span>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=dashboard-openmessage" class="link-to"></a>
								<figure class="user-avatar">
									<img src="images/avatars/avatar_04.jpg" alt="">
								</figure>
								<p class="text-header tiny"><span>Red Thunder Graphics</span></p>
								<p class="subject">Support Inquiry</p>
								<p class="timestamp">May 5th, 2014</p>
								<span class="notification-type icon-envelope-open"></span>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=dashboard-openmessage" class="link-to"></a>
								<figure class="user-avatar">
									<img src="images/avatars/avatar_07.jpg" alt="">
								</figure>
								<p class="text-header tiny"><span>Twisted Themes</span></p>
								<p class="subject">Collaboration</p>
								<p class="timestamp">Feb 24th, 2014</p>
								<span class="notification-type secondary-new icon-envelope"></span>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=dashboard-openmessage" class="link-to"></a>
								<figure class="user-avatar">
									<img src="images/avatars/avatar_08.jpg" alt="">
								</figure>
								<p class="text-header tiny"><span>GregSpiegel1820</span></p>
								<p class="subject">How to Install the Theme...</p>
								<p class="timestamp">Jan 3rd, 2014</p>
								<span class="notification-type icon-action-undo"></span>
								<a href="index.php?page=dashboard-inbox" class="button secondary">View all Messages</a>
							</li>
							<!-- /DROPDOWN ITEM -->
						</ul>
						<!-- /DROPDOWN NOTIFICATIONS -->
					</div>
					<div class="account-settings-quickview">
						<span class="icon-settings">
							<!-- SVG ARROW -->
							<svg class="svg-arrow">
								<use xlink:href="#svg-arrow"></use>
							</svg>
							<!-- /SVG ARROW -->
						</span>

						<!-- PIN -->
						<span class="pin soft-edged primary"></span>
						<!-- /PIN -->

						<!-- DROPDOWN NOTIFICATIONS -->
						<ul class="dropdown notifications no-hover closed">
							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<div class="dropdown-triangle"></div>
								<a href="index.php?page=author-profile">
									<figure class="user-avatar">
										<img src="images/avatars/avatar_02.jpg" alt="">
									</figure>
								</a>
								<p class="title">
									<a href="index.php?page=author-profile"><span>MeganV.</span></a> added 
									<a href="index.php?page=item-v1"><span>Pixel Diamond Gaming Shop</span></a> to favourites
								</p>
								<p class="timestamp">2 Hours ago</p>
								<span class="notification-type primary-new icon-heart"></span>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=author-profile">
									<figure class="user-avatar">
										<img src="images/avatars/avatar_03.jpg" alt="">
									</figure>
								</a>
								<p class="title">
									<a href="index.php?page=author-profile"><span>Thomas_Ket</span></a> wrote you an 
									<a href="index.php?page=author-reputation"><span>Author’s Reputation</span></a>
								</p>
								<p class="timestamp">17 Hours ago</p>
								<span class="notification-type icon-star"></span>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=author-profile">
									<figure class="user-avatar">
										<img src="images/avatars/avatar_04.jpg" alt="">
									</figure>
								</a>
								<p class="title">
									<a href="index.php?page=author-profile"><span>Red Thunder Graphics</span></a> commented on 
									<a href="index.php?page=item-v1"><span>3D Layers - Web Mockup</span></a>
								</p>
								<p class="timestamp">8 Days Ago</p>
								<span class="notification-type primary-new icon-bubble"></span>
							</li>
							<!-- /DROPDOWN ITEM -->

							<!-- DROPDOWN ITEM -->
							<li class="dropdown-item">
								<a href="index.php?page=author-profile">
									<figure class="user-avatar">
										<img src="images/avatars/avatar_05.jpg" alt="">
									</figure>
								</a>
								<p class="title">
									<a href="index.php?page=author-profile"><span>DaBebop</span></a> purchased 
									<a href="index.php?page=item-v1"><span>Miniverse - Hero Image Composer</span></a>
								</p>
								<p class="timestamp">1 Week ago</p>
								<span class="notification-type icon-tag"></span>
								<a href="index.php?page=dashboard-notifications" class="button primary">View all Notifications</a>
							</li>
							<!-- /DROPDOWN ITEM -->
						</ul>
						<!-- /DROPDOWN NOTIFICATIONS -->
					</div>
				</div>
				<!-- /ACCOUNT INFORMATION -->

				<!-- ACCOUNT ACTIONS -->
			<div class="account-actions">
				<?php if(@$_SESSION['user_id']!='' || @$_SESSION['developer_id']!=''){ ?>
				<a href="index.php?page=logout" class="button secondary">logout</a>
				
				<?php }else{?>
				<a href="index.php?page=login" class="button secondary">login</a>
			
				<?php }?>
			</div>
			
			

					<!-- <a href="index.php?page=user-registration" class="button medium primary">user registration</a>

					<a href="index.php?page=developer-registration" class="button medium primary">deeveloper registration</a>
					
					<a href="index.php?page=user-login" class="button secondary">login</a> -->						
				</div>
					
				<!-- /ACCOUNT ACTIONS -->
			</div>
			<!-- /USER BOARD -->
	</div>

<!-- --------------------------------------------------------------------------------------------- -->

	<!-- SIDE MENU -->
	<div id="account-options-menu" class="side-menu right closed">
		<!-- SVG PLUS -->
		<svg class="svg-plus">
			<use xlink:href="#svg-plus"></use>
		</svg>
		<!-- /SVG PLUS -->

		<!-- SIDE MENU HEADER -->
		<div class="side-menu-header">
			<!-- USER QUICKVIEW -->
			<div class="user-quickview">
				<!-- USER AVATAR -->
				<a href="index.php?page=author-profile">
				<div class="outer-ring">
					<div class="inner-ring"></div>
					<figure class="user-avatar">
						<img src="images/avatars/avatar_01.jpg" alt="avatar">
					</figure>
				</div>
				</a>
				<!-- /USER AVATAR -->

				<!-- USER INFORMATION -->
				<p class="user-name">Johnny Fisher</p>
				<p class="user-money">$745.00</p>
				<!-- /USER INFORMATION -->
			</div>
			<!-- /USER QUICKVIEW -->
		</div>
		<!-- /SIDE MENU HEADER -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Your Account</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-notifications">Notifications</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-inbox">Messages</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=cart">Your Cart</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=favourites">Favourites</a>
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->

		<!-- SIDE MENU TITLE -->
		<p class="side-menu-title">Dashboard</p>
		<!-- /SIDE MENU TITLE -->

		<!-- DROPDOWN -->
		<ul class="dropdown dark hover-effect">
			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=author-profile">Profile Page</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-settings">Account Settings</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-purchases">Your Purchases</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-statement">Sales Statement</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-buycredits">Buy Credits</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-withdrawals">Withdrawals</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-uploaditem">Upload Item</a>
			</li>
			<!-- /DROPDOWN ITEM -->

			<!-- DROPDOWN ITEM -->
			<li class="dropdown-item">
				<a href="index.php?page=dashboard-manageitems">Manage Items</a>
			</li>
			<!-- /DROPDOWN ITEM -->
		</ul>
		<!-- /DROPDOWN -->

		<a href="index.php" class="button medium secondary">Logout</a>
		<a href="index.php" class="button medium primary">Become a Seller</a>
	</div>
	<!-- /SIDE MENU -->
