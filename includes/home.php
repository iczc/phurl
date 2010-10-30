<?php
if (!empty($_GET['error'])) {
	echo "<div class=\"error\">" . $_GET['error'] . "</div>";
}
?>
<div id="content">
	<div class="input">
		<span class="field">Paste a link to shorten:</span>
		<input type="text" name="long_url" class="text_box" />
	</div>
	
	<div class="input">
		<span class="field" onclick="$('#options').slideToggle('slow', function() {});" id="expand">[+] Customize</span>
	</div>
	
	<div id="options">
		<div class="input">
			<span class="field">Add a custom alias (e.g. <?php echo $config['site_url']; ?>/bicycles) - May contain alphanumeric characters, hyphens and underscores only.</span>
			<span class="pre"><?php echo $config['site_url']; ?>/</span><input type="text" name="custom_alias" class="text_box_small" />
	</div>
	<div class="clear"></div>
	</div>
	
	<div class="input">
		<input type="submit" name="submit_button" class="submit_button" value="Shorten!" />
	</div>
	

</div>

