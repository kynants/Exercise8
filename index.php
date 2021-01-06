<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerise 8</title>
</head>
<body>
    <!-- https://www.php.net/manual/en/function.parse-url.php -->
    <?php

    $url = 'https://www.jw.org/';

    // PHP PRINTS OUT THE URL PARSE BEFORE THE STRINGS; NOT THE INTENDED RESULT
    // parse_url ( string $url , int $component = -1 ) : mixed;
     echo nl2br('<strong>Parse URL:</strong> ' . var_dump(parse_url($url)) . '<br>'),
          nl2br('<strong>Scheme:</strong> ' . var_dump(parse_url($url, PHP_URL_SCHEME)) . '<br />'),
          nl2br('<strong>User:</strong> ' . var_dump(parse_url($url, PHP_URL_USER)) . '<br>'),
          nl2br('<strong>Pass:</strong> ' . var_dump(parse_url($url, PHP_URL_PASS)) . '<br>'),
          nl2br('<strong>Host:</strong> ' . var_dump(parse_url($url, PHP_URL_HOST)) . '<br>'),
          nl2br('<strong>Port:</strong> ' . var_dump(parse_url($url, PHP_URL_PORT)) . '<br>'),
          nl2br('<strong>Path:</strong> ' . var_dump(parse_url($url, PHP_URL_PATH)) . '<br>'),
          nl2br('<strong>Query:</strong> ' . var_dump(parse_url($url, PHP_URL_QUERY)) . '<br>'),
                '<strong>Fragment:</strong> ' . var_dump(parse_url($url, PHP_URL_FRAGMENT));

    ?>
</body>
</html>