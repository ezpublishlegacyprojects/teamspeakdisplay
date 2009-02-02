
GENERAL INFORMATION
===================

Name:                     teamspeakdisplay
Description:              template operator to show infos about (sub-)channels 
                          and actual users in a TS2 server
Developed and tested on:  4.0
Author:                   Mark Simon ( all2e GmbH, http://www.all2e.com )
Mail:                     m.simon@all2e.com
Date of creation:         27th January 2009
Last update:              -
Version:                  1.0


INSTALLATION
============

(1)  Extract the extension into your extension folder ex:"ezrootdir/extensions"

(2)  import the package teamspeakdisplay_contentclass-1.0-1.ezpkg in the base
     directory of the extension. This will install the  content class.

(3)  Activate the extension by adding the following lines to your
     siteaccess settings "settings/siteaccesses/name/site.ini.append.php":

     [ExtensionSettings]
     ActiveAccessExtensions[]=teamspeakdisplay
     
     Remember to clear the cache files after activating the extension.

(3)  FINISHED!
     You can now create an object of class TeamspeakDisplay.
     If you whish to use your own design, override the design templates in your
     design extension per path.


CONFIGURATION
=============

To create an Info page for a Teamspeak Server, just create an Object of the
class teamspeakdisplay.

(1)  Enter the IP or hostname, an the port address.

(2)  The 'Server Query Port' will be 51234 on most servers. So mainly this is
     not neccessary to be changed.

(3)  If you don't want to let all your web users to see all channels, you can
     enter any channel nam of your server in 'Limit Channel'

(4)  'Forbidden Nick Characters' is for coming functionalities. This can be
     ignored in version 1.0


Thank you for using this operator. If you have any problems, bugs, suggestions
or any other feedback, please send me a mail to m.simon@all2e.com or leave a
message on the contribution page on http://ez.no .
