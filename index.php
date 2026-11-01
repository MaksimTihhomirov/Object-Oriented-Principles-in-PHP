
<?php

class Photo
{
    public function display()
    {
        return "This is a photo.";
    }
}

$photo = new Photo();

echo $photo->display();
