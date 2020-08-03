<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageHandler
{
    protected $storage_path = 'public/uploads/';

    public function load_image($path)
    {
        $this->storage_path .= $path;
        return $this;
    }

    public function get_image_link()
    {
        $link_path = Storage::url($this->storage_path);
        return env('APP_URL') . $link_path;
    }

    public function get_image_size()
    {
        return Storage::size($this->storage_path);
    }

    public function remove_image()
    {
        return Storage::delete($this->storage_path);
    }
}
