
<?php

class S3Storage implements FileStorage
{
    public function put(string $path, string $content): void
    {
        echo "S3 simulation: {$path}\n";
    }
}
