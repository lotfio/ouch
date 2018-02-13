<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://www.sans.org/sites/default/files/ouch.png" type="image/x-icon">
    <!-- css style should be included here -->
    <style>
        <?php include ouch_assets('css/spectre.min.css')?>
        <?php include ouch_assets('css/bootstrap.min.css')?>
        <?php include ouch_assets('css/prism.min.css')?>
        <?php include ouch_assets('css/icons.min.css')?>
        <?php include ouch_assets('css/custom.css')?>
    </style>
    <!-- page title based on error type -->
    <title>Ouch | <?=str_last($ex->class)?></title>
</head>
<body>

<!--====== | HEADER SECTION | ======-->
<header>
    <section class="error-section text-center">
        <div class="container">
        
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12">
                    <img src="https://www.sans.org/sites/default/files/ouch.png" alt="logo" class="text-center">
                </div>

                <div class="col-xl-9 col-lg-9 col-sm-12">
                    <h1><?=str_last($ex->class)?></h1>
                    <h5><?= $ex->message . ' in line: <span class="error-line">'.$ex->line . '</span>' ?></h5>
                </div>
            </div>
        </div>
    </section>
</header>

<!--====== | DEBUG SECTION | ======-->
<section class="debug">
    <div class="container">
        <div class="row">

            <div class="col-md-12"> <!-- text editor debug -->

                <div class="text-editor">
                    <h5>Line <?=$ex->line?> in file <?=$ex->file?> : </h5>

                    <pre class="language-php"><code><?=readErrorFile($ex->file, $ex->line)?></code></pre>

                    <!-- debugging helpers -->
                    <div class="help-links">
                        <a href="#"><span class="icon icon-stack"></span></a>
                        <a href="#"><span class="icon icon-reddit"></span></a>
                        <a href="#"><span class="icon icon-google"></span></a>
                    </div>

                    <div class="clear-fix"></div>
                </div>

            </div>

            <div class="col-md-4"> <!-- additional debug information -->
                <div class="server-info">
                <?php  if(isset($ex->trace[0])) print_r($ex->trace[0])  ?>
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