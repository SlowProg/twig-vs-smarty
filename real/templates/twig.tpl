<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title>{{ title }}</title>
	<meta name="keywords" content="keywords" />
	<meta name="description" content="description" />
	<link rel="stylesheet" href="templates/style.css" type="text/css" media="screen, projection" />
	<!--[if lte IE 6]><link rel="stylesheet" href="templates/style_ie.css" type="text/css" media="screen, projection" /><![endif]-->
</head>
<body>
<div id="wrapper">

	<header id="header">
		{% include "twig_header.tpl" %}
	</header><!-- #header-->

	<section id="middle">

		<div id="container">
			<div id="content">
				{% include "twig_content.tpl" %}		
			</div><!-- #content-->
		</div><!-- #container-->

		<aside id="sideRight">
			{% include "twig_sidebar.tpl" %}		
		</aside><!-- #sideRight -->

	</section><!-- #middle-->
	
	<footer id="footer">
		{% include "twig_footer.tpl" %}
	</footer><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>