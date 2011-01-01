<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
if (!empty($_GET['error'])) {
	echo "<div class=\"error\">" . $_GET['error'] . "</div>";
}
?>
<div id="content">
	<div class="input">
		<span class="field"><?php echo $p_lang[8]; ?>:</span>
		<input type="text" name="long_url" class="text_box" />
	</div>
	
	<div class="input">
		<span class="field" onclick="$('#options').slideToggle('slow', function() {});" id="expand">[+] <?php echo $p_lang[9]; ?></span>
	</div>
	
	<div id="options">
		<div class="input">
			<span class="field"><?php echo $p_lang[10]; ?> (e.g. <?php echo $config['site_url']; ?>/<?php echo $p_lang[11]; ?>) - <?php echo $p_lang[12]; ?></span>
			<span class="pre"><?php echo $config['site_url']; ?>/</span><input type="text" name="custom_alias" class="text_box_small" />
	</div>
	<div class="clear"></div>
	</div>
	
	<div class="input">
		<input type="submit" name="submit_button" class="submit_button" value="Shorten!" />
	</div>
	

</div>

