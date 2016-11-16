<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.
$hi = shell_exec( 'git fetch origin; git rebase origin/master 2>&1' );
var_dump($hi)
?>hi
