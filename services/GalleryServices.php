<?php

namespace app\services;

use app\models\Gallery;

class GalleryServices
{
    /**
     * Get information about gallery
     *
     * @return mixed
     */
    public static function getGallery ()
    {
        return Gallery::findGallery();
    }
}
