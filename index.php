<!doctype html>
<html lang="es" class="no-js">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invreate Space</title>
    <meta name="description" content="Transforma tu realidad" />
    <meta name="keywords" content="suitecrm, system, icon font, media queries, css3, transition, mobile" />
    <meta name="author" content="danielmo" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
  </head>
  <body>
    <header>
      <a href="#">
        <img src="img/login.png" alt="Invreate Space">
      </a>
    </header>
    <div class="container">
      <h1>
        <?php echo 'SNAD - Integrador de herramientas en la nube'; ?>
        <span><?php echo "A la medida.";?></span>
      </h1>
      <div class="main clearfix">
				<nav id="menu" class="nav">
					<ul>
						<li>
							<a href="https://invreate.com">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span><?php echo 'Invreate'; ?></span>
							</a>
						</li>
						<li>
							<a href="system">
								<span class="icon">
									<i aria-hidden="true" class="icon-services"></i>
								</span>
								<span><?php echo 'Sistema'; ?></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-team"></i>
								</span>
								<span><?php echo 'Vinculado'; ?></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-portfolio"></i>
								</span>
								<span><?php echo 'Acceso Externo'; ?></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-blog"></i>
								</span>
								<span><?php echo 'Cambios'; ?></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-contact"></i>
								</span>
								<span><?php echo 'Contacto'; ?></span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
    </div>
    <script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
    <footer id="footer" class="cryout">
      <a href="https://invreate.com" target="_blank">
        <span>
          <?php echo 'Powered by '; ?>
        </span>
        <img src="img/poweredby_invreate.png" alt="Invreate">
        <span>
          <?php echo '©2019 - '.date('Y'); ?>
        </span>
      </a>
	</footer>
  </body>
</html>
