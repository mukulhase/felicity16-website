<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
$hi = shell_exec( 'ls;git fetch;git reset --hard origin/master 2>&1' );
var_dump($hi)
?>hi