<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="$ContentLocale"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="$ContentLocale"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="$ContentLocale"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="$ContentLocale"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<% base_tag %>
	<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
	<meta name="viewport" content="width=device-width" />
	$MetaTags(false)
	<% require themedCSS('application') %>
	<link rel="author" href="/humans.txt" />

	<script src="{$ThemeDir}/js/inc/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<% include Header %>

	$Layout

<% include Footer %>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="{$ThemeDir}/js/vendor/selectivizr-1.0.2.min.js"></script>
<![endif]-->

<script type="text/javascript" src="{$ThemeDir}/js/plugins.js"></script>
<script type="text/javascript" src="{$ThemeDir}/js/main.js"></script>

</body>
</html>