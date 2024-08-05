<?php
use Illuminate\Support\Str;
function SlugMaker($title)
{
    $slug = Str::slug($title);
    return $slug;
}
