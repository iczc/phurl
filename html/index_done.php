<h2>Short URL has been created!</h2>
<p>The following URL:</p>
<p><strong><?php echo htmlentities($url) ?></strong></p>
<p>has been length of <strong><?php echo strlen($url) ?></strong> characters and resulted in the following shortened URL which has a length of <strong><?php echo strlen($short_url) ?></strong> characters:</p>
<p><strong><?php echo htmlentities($short_url) ?></strong><br />
[ <a href="<?php echo $short_url ?>" target="_blank">Open in new window</a> ]</p>
