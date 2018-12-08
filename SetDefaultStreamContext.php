<?php
stream_context_set_default([
    'http' => [
        'user_agent' => "Davey Shafik's Browser",
        'max_redirects' => 3
    ]
]);
$file = file_get_contents("http://localhost/");