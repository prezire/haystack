<header>
		<div class="logo">
			<a href="<?php echo site_url('main'); ?>">HAYSTACK</a>
      <div class="slogan">Need work experience? Apply for an Internship.</div>
		</div><!-- end logo -->

		<div id="menu_icon"></div>
		<nav>
			<ul>
        <?php 
          if(isLoggedIn())
          {
            $usr = getLoggedUser();
            $roleName = getRoleById($usr->role_id)->row()->name;
            switch($roleName)
            {
              case 'Applicant':
                //Do nothing.
              break;
              case 'Employer':
                echo '<li><a href="' . site_url('internship/readMyPosts') . '">Internships</a></li>';
              break;
              case 'Subscriber':
                //Do nothing.
              break;
            }
            echo '<li><a href="' . site_url('comment') . '">Comments</a></li>';
            echo '<li><a href="' . site_url('user/update/' . getLoggedUser()->id) . '">Profile</a></li>';
            echo '<li><a href="' . site_url('auth/logout') . '">Logout</a></li>';
          }
          else
          {
            echo '<li><a href="' . site_url('auth/login') . '">Login</a></li>';
          }
        ?>
        <li><a href="<?php echo site_url('main/about'); ?>">About</a></li>
				<li><a href="<?php echo site_url('main/faq'); ?>">FAQ</a></li>
				<li><a href="<?php echo site_url('blog'); ?>">Blogs</a></li>
			</ul>
		</nav><!-- end navigation menu -->

		<div class="footer clearfix">
			<div class="rights">
				<p>Copyright &copy; 2014 Simplifie.</p>
			</div><!-- end rights -->
		</div ><!-- end footer -->
	</header><!-- end header -->