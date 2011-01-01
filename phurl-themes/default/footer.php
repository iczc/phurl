<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
<div id="footer">
<p>&copy; <?php echo date('Y'); ?> <?php echo $config['site_name']; ?> - <?php echo $lang[4]; ?> <a
	href="http://www.phurlproject.org/">Phurl</a>.</p>
</div>
</div>
</body>
</html>

