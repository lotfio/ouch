<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- spectre -->
    <style>
        <?php include assets('css/spectre-exp.min.css')?>
        <?php include assets('css/spectre-icons.min.css')?>
        <?php include assets('css/spectre.min.css')?>
        <?php include assets('css/custom.css')?>
    </style>

    <title>Hello, world!</title>
</head>
<body>

<?php
print_r($ex->getMessage());
echo "<br>";
print_r($ex->getFile());


echo "<br>";
print_r($ex->getLine());
echo "<br>";
print_r($ex->getCode());
echo "<br>";
 echo "<pre>";
print_r(lastWord(get_class($ex), "\\"));
?>

<script>
    <?php include assets('js/custom.js')?>
</script>
</html>