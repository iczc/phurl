## Phurl Version 2.4.2 ##
  * Files in the /html directory are now protected so they can only be opened via the main script. This helps prevent further XSS vulnerabilities.
  * This is the last version of Phurl 2. Work has now started on version 3.

## Phurl Version 2.4.1 ##
  * Fixed Cross Site Scripting Vulnerabilities (88,89,90)
  * Corrected a grammatical mistake in on of the error messages.
  * Fixed directory browsing for /assets and /html (86)
  * Added headings to the table of URLs in the admin panel
  * Fixed issues with mailto protocol (71)
  * Fixed Full path disclosure issues (85)


## Phurl Version 2 BETA 4 ##
  * Added new Phurl version notification in admin panel
  * New header added to admin panel
  * Deleted config.php as this file is created during installation.
  * Index page modified to die if install directory exists - for security purposes
  * Phurl.sql deleted - no longer needed as SQL setup is built into installation
  * Installation system added for easy setup (35)


## Phurl Version 2 BETA 3.3 ##
  * Fixed database structure to allow capital letters to work correctly in short urls (61)



## Phurl Version 2 BETA 3.2 ##
  * Fixed minor design issues (66,65,64)
  * Readded admin panel after careless deletion in beta 3.1 (63)
  * Moved all functions to one file (48)
  * Fixed maximum alias length issue (36)




## Phurl Version 2 BETA 3.1 ##
  * Fixed [issue 60](https://code.google.com/p/phurl/issues/detail?id=60)