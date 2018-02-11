<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.sans.org/sites/default/files/ouch.png" type="image/x-icon">
    <!-- spectre -->
    <style>
        <?php include assets('css/spectre.min.css')?>
        <?php include assets('css/prism.min.css')?>
        <?php include assets('css/custom.css')?>
    </style>

    <title>Ouch | <?=$ex->type?></title>
</head>
<body>

<header>
    <div class="container grid-lg text-center">
        <!--<h2>Nav here</h2>-->
    </div>

    <section class="error-section">
        <div class="container grid-lg">
            <h3><?=$ex->type?></h3>
            <?= $ex->message . ' on line: '.$ex->line?>
        </div>
    </section>

</header>

<section class="">
    <div class="container grid-lg">
        <div class="columns">

            <div class="col-4">
                <div class="srv-info">
                <?php 
                        foreach($_SERVER as $key => $val) :
                        echo "<p>" . $key . " : " . $val . "</p>";
                        endforeach;
                    ?>
                </div>
            </div>

            <div class="col-8">
                <pre><code class="language-php"><?=readErrorFile($ex->file, $ex->line)?></code></pre>
            </div>
        </div>
    </div>
</section>



<script>
    <?php include assets('js/prism.min.js')?>
    <?php include assets('js/custom.js')?>
</script>
</body>
</html>