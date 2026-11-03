
<?php

class Storage
{
    public static function resolve(): FileStorage
    {
        $storageMethod = getenv('FILE_STORAGE') ?: 'local';

        if ($storageMethod === 'local') {
            return new LocalStorage();
        }

        if ($storageMethod === 's3') {
            return new S3Storage();
        }

        throw new Exception('Unknown storage method');
    }
}
