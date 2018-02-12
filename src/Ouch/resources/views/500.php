<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.sans.org/sites/default/files/ouch.png" type="image/x-icon">
    <!-- spectre -->
    <style>
        <?php include ouch_assets('css/spectre.min.css')?>
        <?php include ouch_assets('css/prism.min.css')?>
        <?php include ouch_assets('css/custom.css')?>
    </style>

    <title>Ouch | <?=$ex->class?></title>
</head>
<body>

<header>
    <div class="container grid-lg text-center">
        <!--<h2>Nav here</h2>-->
    </div>

    <section class="text-center error-section">
        <div class="container">
            <h1><?=$ex->class?></h1>
            <h5><?= $ex->message . ' in line: <span class="error-line">'.$ex->line . '</span>' ?></h5>
        </div>
    </section>

</header>

<section class="">
    <div class="container grid-xl">
        <div class="columns">

            <div class="column">

                <div class="text-editor">
                    <h5>Line <?=$ex->line?> in file <?=$ex->file?> : </h5>
                    <pre class="language-php"><code><?=readErrorFile($ex->file, $ex->line)?></code></pre>
                    
                    <?php  if(isset($ex->trace[0])) print_r($ex->trace[0])  ?>
                </div>

            </div>

            <div class="column">
                <div class="server-info">
                  <h5>Server info: </h5>
                  <?php
                    foreach($_SERVER as $key => $val)
                    {
                        echo "<div><b>" . $key . "</b> : " . $val . "</div>";
                    }
                  ?>
                </div>
            </div>

        </div>
    </div>
</section>



<script>
    <?php include ouch_assets('js/prism.min.js')?>
    <?php include ouch_assets('js/custom.js')?>
</script>
</body>
</html>