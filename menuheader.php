				<?php
					$url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
					$totalstring = substr_count($url,'/');
					if($totalstring<5){
						$linkhome='';
						$about='about';
						$ourcompany='ourcompany';
						$product='product';
						$galery='galery';
						$career='career';
						$contactus='contactus';
						$linkcek2='';
					}else{
						$linkhome='../';
						$about='../about';
						$ourcompany='../ourcompany';
						$product='../product';
						$galery='../galery';
						$career='../career';
						$contactus='../contactus';
						$linkcek1 =explode('asiapart.com1/',$url);
						$linkcek2 =explode('/',$linkcek1[1]);						
					}
					
				?>
				<ul class="nav navbar-nav">
					<li><a href="<?php echo $linkhome;?>">Home</a></li>
					<li><a class="<?php if($linkcek2[0]=='about'){ $active='active'; }else{ $active=''; } echo $active;?>" href="<?php echo $about;?>">About</a></li>
					<li><a class="<?php if($linkcek2[0]=='ourcompany'){ $active='active'; }else{ $active=''; } echo $active;?>" href="<?php echo $ourcompany;?>">OUR COMPANY</a></li>
					<li><a class="<?php if($linkcek2[0]=='product'){ $active='active'; }else{ $active=''; } echo $active;?>" href="<?php echo $product;?>">PRODUCT</a></li>
					<li><a class="<?php if($linkcek2[0]=='galery'){ $active='active'; }else{ $active=''; } echo $active;?>" href="<?php echo $galery;?>">GALERY</a></li>
					<li><a class="<?php if($linkcek2[0]=='career'){ $active='active'; }else{ $active=''; } echo $active;?>" href="<?php echo $career;?>">CAREER</a></li>
					<li><a class="<?php if($linkcek2[0]=='contactus'){ $active='active'; }else{ $active=''; } echo $active;?>" href="<?php echo $contactus;?>">CONTACT US</a></li>
				</ul>	