<?php

include(dirname(__FILE__).'/../../config/config.inc.php');
include(dirname(__FILE__).'/pscleaner.php');

if (!Module::isInstalled('pscleaner')) {
    die('Bad token');
}

$mod = new PSCleaner();

if (Tools::encrypt(_COOKIE_KEY_.$mod->secure_key) != Tools::getValue('secure_key'))
    die('Bad token');

print_r(PSCleaner::cleanAndOptimize());
