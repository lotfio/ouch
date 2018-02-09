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

    <title>500 | Fatal Error</title>
</head>
<body>

<header>
    <div class="container grid-lg text-center">
        <h2>Nav here</h2>
    </div>

    <section class="error-section">
        <div class="container grid-lg">
            <?php
                echo "<h3>CompileErrorException : </h3> <br>";

                print_r($ex['message']);
                //print_r($ex['file']);
                //print_r($ex['line']);
            ?>
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





    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.11.0/prism.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.11.0/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

</body>
</html>