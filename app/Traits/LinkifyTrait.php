<?php
// app/Traits/LinkifyTrait.php
namespace App\Traits;

trait LinkifyTrait
{
    public function linkify($text)
    {
        $urlPattern = '/(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i';
        return preg_replace($urlPattern, '<a href="$1" target="_blank">$1</a>', $text);
    }
}
