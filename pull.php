<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
//hello


if ( $_POST['payload'] ) {
putenv('PATH=/usr/local/bin');
echo shell_exec("cd /home/admin/web/itdb.biz/public_html && /usr/bin/git pull origin branch1 2>&1");
echo shell_exec('/usr/bin/whoami 2>&1');
}

?>
