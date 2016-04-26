<?php

$hook_version = 1;

$hook_array = Array();

$hook_array['before_save'] = Array();
$hook_array['before_save'][] = Array(1, 'geocode Account', 'custom/modules/Accounts/geocode/geocode.php', 'geoCode', 'geocodeAccount');
