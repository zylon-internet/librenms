<?php

# Jetdirect compatible

include('includes/polling/os/jetdirect.inc.php');

# Strip off useless brand fields
$hardware = str_replace('OKI ','',$hardware);

?>