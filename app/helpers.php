<?php

function url_to_link($text) {
    // Regex pattern to match URLs
    $urlPattern = '/(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i';
    
    // Replace URLs with anchor tags
    return preg_replace($urlPattern, '<a href="$1" target="_blank">$1</a>', $text);
}
