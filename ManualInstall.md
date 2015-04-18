# Introduction #

Since Phurl 2.4.0 BETA, a simple installation wizard has been included with the script in order to make installing Phurl a 5 minute job. In general, it works perfectly, but there is the odd occasion where a certain hosting company will not work with the installation script.
In this case, you will need to follow the instructions below, to learn how to install Phurl manually.


# Ready? Let's go! #

  * Install and delete - The first and foremost thing you need to do is grab the latest version of Phurl from our downloads page: http://code.google.com/p/phurl/downloads/list (There's a 99% chance that the file at the top of the list will be the latest version of Phurl.) Download and extract the gzipped file in whatever manner necessary so you have them ready to go on the server. Then, you'll need to go ahead and **delete** the install directory. That's right, just get rid of it! You'll then need to get the "Manual Config Package", also available from the downloads page. Save and extract this to your computer.

  * Create the database structure - This part may be tricky for some. Go ahead and get the sql structure file (phurl.sql) from the manual config package. You'll then need to use a tool such as phpmyadmin to either upload the sql file and set up the database that way, or open the sql file locally and paste the contents into the appropriate field on phpmyadmin. The 2nd method usually works if the 1st fails. [This link](http://www.karakas-online.de/EN-Book/phpmyadmin-navigation-bar-sql.html) might be useful if you're stuck.

  * Create the config file - At this stage, it's time to tell Phurl about your new URL shortener. Copy the config.php file from the Manual Config Package over to the root directory where you have Phurl installed on your server. Then you just need to edit it and add the correct info. It's heavily commented, so you shouldn't struggle too much.

  * Visit your URL shortener, try shortening a URL, logging into the admin panel etc. It should all work fine. Please note that versions of Phurl which have been manually installed will not alert you via the admin panel if a new version is available. Instead, you will see a message telling you you are running a prerelease version. Just ignore this!

  * If you need any further help or are having issues with your manual installation, post an issue report on the issues tab here, or join us on IRC at irc.infinityirc.com #phurl.