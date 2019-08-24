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
        <?php include ouch_assets('css/prism.min.css')?>
        <?php include ouch_assets('css/icons.min.css')?>
        <?php include ouch_assets('css/custom.css')?>
        <?php include ouch_assets('css/font.min.css')?>
    </style>

    <!-- page title based on error type -->
    <title>Ouch | <?=str_last($ex->class)?></title>

    <script>
        <?php include ouch_assets('js/prism.min.js')?>
        <?php include ouch_assets('js/custom.js')?>
    </script>
</head>
<body>



 <!-- grid nesting example -->
    <div class="container">
        <div class="columns">
            

            <div class="column col-8">
                
                <div class="code-error">

                    <div><?=$ex->class?></div>
                    <div><?=$ex->message?></div>

                </div>

                <div class="code-holder">
                        <div class="error"> <?=$ex->file?></div>
                    <pre class="language-php"><code><?=readErrorFile($ex->file, $ex->line)?></code></pre>
                    
                    <br>

                    <div class="code-header">

                        <!-- debugging helpers -->
                        <div class="help-links">
                            <a href="https://stackoverflow.com/search?q=PHP <?=$ex->message?>" target="_blank" title="open in stackoverflow">
                                <span class="icon icon-stack"></span>
                            </a>
                            <a href="https://www.reddit.com/search?q=PHP <?=$ex->message?>" target="_blank" title="open in reddit">
                                <span class="icon icon-reddit"></span>
                            </a>
                            <a href="https://www.google.dz/search?q=PHP <?=$ex->message?>" target="_blank" title="open in google">
                                <span class="icon icon-google"></span>
                            </a>
                        </div>
                        <div class="clear-fix"></div>
                        </div> <!-- end code header -->
                    
                </div>

            </div>
            <div class="column col-4">

                    <div class="menu-info">
                            <ul class="trace">
                                <?php if(is_array($_SERVER)):?>
                                    <?php foreach($_SERVER as $trace):?>
                                        <li><?=$trace?></li>
                                    <?php endforeach?>
                               <?php endif?>
                            </ul>
                    </div>
            </div>
        </div>
    </div>

    <!-- grid nesting example -->
    <div class="container">
            <div class="columns">
                <div class="column col-12">
                    <hr>

                    <div class="menu-info">
                            <ul class="server">
                                <?php if(is_array($_SERVER)):?>
                                    <?php foreach($_SERVER as $trace):?>
                                        <li><?=$trace?></li>
                                    <?php endforeach?>
                               <?php endif?>
                            </ul>
                        </div>
                </div>
            </div>
        </div>
</body>
</html>