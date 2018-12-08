<?php
$http_options = stream_context_create([
    'http' => [
        'user_agent' => "Davey Shafik's Browser",
        'max_redirects' => 3
    ]
]);
$file = file_get_contents(
    "http://localhost/", false, $http_options
);
