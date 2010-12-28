<h1>Dashboard</h1>
<p>
Welcome to your Phurl Dashboard. The Dashboard forms part of the new administration panel in Phurl 3. From here, you can see the latest news about both your URL shortener and the Phurl Project.
</p>
<table style="width:100%;">
<tr>
<td style="width:50%;">
<h2>Your Phurl Installation</h2>
<p>Installed: <?php echo $current; ?></p>
<p>Latest: <?php echo $version; ?></p>
<p>Status:
<?php
if ($version > $current && $version !== $current) {
echo "<span style=\"color:red;\">Outdated.</span><br/><br/>Advice: Please download the latest version of Phurl from <a href=\"http://www.phurlproject.org/\">http://www.phurlproject.org/</a>.</span>";
} 
elseif ($version < $current && $version !== $current) {
echo "<span style=\"color:blue;\">Prerelease.</span><br/><br/>Advice: Expect Bugs!</span>";
}
else {
echo "<span style=\"color:green;\">Good.</span>";
}
?>
</p>
</td>
<td style="width:50%;">
<h2>Latest Phurl News</h2>
<?php
$phurlnews = file_get_contents("http://feedread.hencogroup.co.uk/?url=http://feeds.feedburner.com/PhurlUpdates&amount=3&container=li&id=56782");
echo $phurlnews;
?>
</td>
</tr>
<tr>
<td style="width:50%;">
<h2>Latest shortened URLs</h2>
<ul>
<li>http://averylongwebsite.com/ http://phu.rl/hd</li>
<li>http://www.ebay.co.uk/WE-LOVE-TO-MAKE-OUR-LINKS-ULTRA-LONG-JUST-TO-ANNOY-EVERYONE/45178928/1728192/LOL-WASTE-OF-TIME http://phu.rl/hc</li>
<li>http://bon.com/ http://phu.rl/longlonglongurl</li>
</ul>
</td>
<td style="width:50%;">
<h2>Latest Phurl Source Commits</h2>
<?php
$commits = file_get_contents("http://feedread.hencogroup.co.uk/?url=http://feeds.feedburner.com/PhurlCommits&amount=3&container=li&id=5267111");
echo $commits;
?>
</td>
</tr>
<tr>
<td style="width:50%;">
<h2>Sample</h2>
One day, something will be here.
</td>
<td style="width:50%;">
<h2>Phurl on Twitter</h2>
<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
  width: 'auto',
  height: 250,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('phurlproject').start();
</script></td>
</tr>
</table>