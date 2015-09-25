<?php

echo "<h1>This page was rendered in PHP version ". PHP_VERSION . "</h1>";
echo "<h1>This page uses ZEND VERSION ". zend_version() . "</h1>";
echo "<h1>default_mimetype value: " . ini_get(default_mimetype) . ":</h1>";
