# RBS Change Console Tool
This tool replaces the `change.php` command line tool.

## Building the RBS Change Console tool
    > git clone git@github.com:RBSChange/Changecmd.git
    > cd Changecmd
    > curl -s https://getcomposer.org/installer | php
    > cd change/
    > php ../composer.phar install
    > cd ..
    > php build.php
    
Don't forget to set up `phar.readonly = Off` in your php.ini file !
