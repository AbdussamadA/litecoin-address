<?php
namespace LitecoinAddress;
include "libs/ElectrumHelper.php";

#example of how to use this code

$mpk = "xpub661MyMwAqRbcFqRivZCxZJNpMkuVLM65fioS8Yh43Kuyw6h8vJPuNVG7sMG15YUxQMEw3THJ5fbXtJygobARzH2zH3G1Xo6C91tJyNQ2e7d";
$version = 2; //electrum mpk version
$is_change = false;
$index = isset( $argv[ 1 ] ) ? intval( $argv[ 1 ] ): 0 ;

echo ElectrumHelper::mpk_to_lc_address($mpk, $index, $version, $is_change ) . "\n";
