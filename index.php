
<?php

require 'FileStorage.php';
require 'LocalStorage.php';
require 'S3Storage.php';
require 'Storage.php';

$storage = Storage::resolve();

$storage->put(
    'one/two/three/test.txt',
    'Hello World!'
);
