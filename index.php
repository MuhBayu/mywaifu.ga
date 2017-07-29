<?php
include_once('get.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/" lang="en">
<head>
<title>Siapa waifu kamu ?</title>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<meta property="og:image" content="<?php echo $pict; ?>" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="300" />
<meta property="og:image:height" content="300" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?php echo BASE_URL; ?>" />
<meta property="og:description" content="silahkan coba, siapa waifumu mz.."/>
<meta property="og:site_name" content="mywaifu.ga" />
<style type="text/css">
img {width:inherit;width: 400px;height: 400px;border: solid 4px black;}
.item {top: 0;display: block;text-align: center;}
</style>
</head>
<body>
<div class="item">
<?php 
if(!isset($_REQUEST['you'])) {
	die("<h4>Untuk mendapatkan result silahkan buka <br/><br/>".BASE_URL . 'NamaKamu</h4>');
}
?>
<h1><?php echo $desk; ?></h1>
<center><img src="<?php echo $pict; ?>"></center>
</div>

<div id="disqus_thread"></div>
<script>
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://mywaifu.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>

</body>
</html>