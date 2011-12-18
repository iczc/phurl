<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
ini_set('display_errors', 0);
?>
<?php print_errors() ?>
<div id="create_form">
<form method="get" action="index.php">
<div class="input">
<span class="field">Paste a link to shorten:</span>
<input id="url" type="text" name="url" value="<?php echo htmlentities(@$_GET['url']) ?>" class="text_box" />
</div>
<div class="input">
		<span class="field" onclick="$('#options').slideToggle('slow', function() {});" id="expand">[+] Customize</span>
	</div>
	
	<div id="options">
		<div class="input">
			<span class="field">Add a custom alias (e.g. <?php echo SITE_URL; ?>/bicycles) - May contain alphanumeric characters and underscores only.</span>
			<span class="pre"><?php echo SITE_URL; ?>/</span><input type="text" name="alias" class="text_box_small" /><br/></p>
	</div>
	<div class="clear"></div>
	</div>
<br/><input type="submit" value="Shorten" class="submit_button" />
</form>
</div>
<script type="text/javascript">
//<![CDATA[
if (document.getElementById) {
    document.getElementById('url').focus();
}
//]]>
</script>
