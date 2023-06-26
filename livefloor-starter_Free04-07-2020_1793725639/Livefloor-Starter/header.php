<?php
function active ($currect_page)
{
	$url_array=explode('/', $_server['REQUEST_URI']);
	$url=end($url_array);
	if($currect_page == $url)
	{
		echo 'active'; //class name in css
	}
}
?>
<!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
        <h1><a class="navbar-brand mr-lg-5" href="index.php">
          <span class="log">Live</span>floor
          </a></h1>
        <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.php">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php active('index.php')?>">
              <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php active('about.php')?>">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item <?php active('services.php')?>">
              <a class="nav-link" href="services">Services</a>
            </li>
            <li class="nav-item <?php active('contact.php')?>">
              <a class="nav-link" href="contact">Contact</a>
			</li>
			<li class="nav-item <?php active('login.php')?>">
              <a class="nav-link" href="login">Login</a>

            </li>
			<li class="nav-item <?php active('signup.php')?>">
              <a class="nav-link" href="signup">Signup</a>

          </ul>
        </div>
        <div class="d-lg-block d-none">
          <a href="contact.php" class="btn btn-style btn-secondary">Get Free Estimate</a>
        </div>
        <!-- toggle switch for light and dark theme -->
        <div class="mobile-position">
          <nav class="navigation">
            <div class="theme-switch-wrapper">
              <label class="theme-switch" for="checkbox">
                <input type="checkbox" id="checkbox">
                <div class="mode-container">
                  <i class="gg-sun"></i>
                  <i class="gg-moon"></i>
                </div>
              </label>
            </div>
          </nav>
        </div>
        <!-- //toggle switch for light and dark theme -->
      </nav>
    </div>
  </header>
  <!-- //header -->
  