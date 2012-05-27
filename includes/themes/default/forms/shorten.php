<script>
$('#urlform').submit(function(e){
    e.preventDefault();
    $.get("../../../../api/create.php", {url: $('input').val()}, function(data, status) {
        $('input').val(data);
        $('input').select()
    });
    return false;
})

</script>
<div id="shorten">
	<img src="<?php echo $phurl_config['theme_path']; ?>enter-url-here.png" />
<form id="urlform">	
<div id="url-box">
		<div id="input"><input type="text" id="url" autocomplete="off" /></div>
		<button id="button">Shorten</button>
		<div class="clear"></div>
	</div>
</form>
	
	<div id="show-options" onclick="$('#shorten-options').slideToggle('slow');">[+] Show Shortening Options</div>
	<div id="shorten-options">
		<table>
			<tr>
				<td>Consecutive (Short)</td>
				<td><input type="radio" name="alias-type" value="short" /></td>
			</tr>
			<tr>
				<td>Random (Longer)</td>
				<td><input type="radio" name="alias-type" value="long" /></td>
			</tr>
			<tr>
				<td>Custom</td>
				<td><input type="radio" name="alias-type" value="custom" onclick="showHideCustom();" /></td>
			</tr>
		</table>
	</div>
</div>
