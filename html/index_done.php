<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
ini_set('display_errors', 0);
$pubid=""; //visit https://www.addthis.com/get-addthis look for #pubid and place it between the quotes. may be rolled into settings later
//example $pubid="xa-4e2eb0e525e2286c";
?>
<h2>Short URL has been created!</h2>
<p>Long URL: <strong><?php echo htmlentities($url) ?></strong> (<?php echo strlen($url) ?> characters)</p>
<p>Short URL: <strong><a href="<?php echo htmlentities($short_url) ?>" target="_blank"><?php echo htmlentities($short_url) ?></a></strong> (<?php echo strlen($short_url) ?> characters)<br />
<div id="d_clip_container" style="position:relative">
   <div id="d_clip_button">Copy to Clipboard</div>
</div>
<script type="text/javascript" src="assets/ZeroClipboard.js"></script>
<script type="text/javascript">
var clip = new ZeroClipboard.Client();
        clip.setText( "<?php echo htmlentities($short_url) ?>" );
        clip.glue( 'd_clip_button', 'd_clip_container' );
</script>
<div style="display: none;"><img src="http://api1.thumbalizr.com/?width=250&url=<?php echo htmlentities($url) ?>" /></div>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=xa-4eed36280fdb3100"></script>
<!-- AddThis Button END -->
