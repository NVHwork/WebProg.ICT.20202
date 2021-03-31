<?php
require 'Page.php';
?>
<?php
if (isset($_POST["site_name"], $_POST["title"], $_POST["content"], $_POST["year"], $_POST["copyright"])) {
    $site_name = $_POST["site_name"];
    $title = $_POST["title"];
    $year = $_POST["year"];
    $copyright = $_POST["copyright"];
    $content = $_POST["content"];
    $theme_color = $_POST["theme-color"];
    $text_color = $_POST["text-color"];
    $page = new Page(
        $site_name,
        $title,
        $year,
        $copyright,
        $theme_color,
        $text_color
    );
    $page->addContent($content);
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $site_name ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .header,
    footer,
    .navigation {
        background: <?= $theme_color ?>
    }
</style>

<body style="color: <?= $text_color ?>">
    <?php print($page->get()) ?>
</body>

</html>