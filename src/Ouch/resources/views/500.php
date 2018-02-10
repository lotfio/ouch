<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://imghost.io/images/2018/02/09/ouch.png" type="image/x-icon">
    <!-- spectre -->
    <style>
        <?php include assets('css/spectre-exp.min.css')?>
        <?php include assets('css/spectre-icons.min.css')?>
        <?php include assets('css/spectre.min.css')?>
        <?php include assets('css/prism.min.css')?>
        <?php include assets('css/custom.css')?>
    </style>

    <title>Ouch | <?=$ex->type?>r</title>
</head>
<body>

<header>
    <div class="container grid-lg text-center">
        <h2>Nav here</h2>
    </div>

    <section class="error-section">
        <div class="container grid-lg">

            <?php print_r($ex) ?>
        </div>
    </section>

    <section class="">
        <div class="container grid-lg">

        </div>
    </section>

</header>





<pre><code class="language-php">

    <?php echo "hello world" ?>

</code></pre>





<script>
    <?php include assets('js/prism.min.js')?>
    <?php include assets('js/custom.js')?>
</script>
</body>
</html>