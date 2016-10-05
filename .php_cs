<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

$rules = array(
    'psr0' => false,
    '@PSR2' => true,
);

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->finder($finder)
    ->setUsingCache(true);