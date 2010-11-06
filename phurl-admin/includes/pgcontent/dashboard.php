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
~ blah blah blah demo text
<br/>~ Henco rocks.
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
<ul>
<li>Commit by henry@phurlproject.org :: / (4 files in 3 dirs): (link)<br/>
Used variable 'PHURL' to prevent includes from being run outside of the main script.</li>
<li>Commit by jordan@phurlproject.org :: /includes/ (home.php functions.php): (link)<br/>
Added home.php as a default template for the homepage. Also edited some functions.</li>
<li>Commit by henry@phurlproject.org :: /themes/default/footer.php: (link)<br/>
Updated the footer to get the current year from the php date function.</li>
</ul>
</td>
</tr>
</table>