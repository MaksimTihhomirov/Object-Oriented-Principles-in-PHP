
<?php

class LocalStorage implements FileStorage
{
    public function put(string $path, string $content): void
    {
        $savePath = __DIR__ . '/storage/' . $path;

        $directory = dirname($savePath);

        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }

        file_put_contents($savePath, $content);

        echo "File saved locally: {$path}\n";
    }
}
