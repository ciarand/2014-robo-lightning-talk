<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>2014 Robo Lightning Talk</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" media="screen" href="css/dist.css">
    </head>
    <body>
        <div class="deck-container">
            <?php foreach ($slides as $slide): ?>

                <article class="slide">
                    <?php echo Parsedown::instance()->text($slide); ?>
                </article>

            <?php endforeach; ?>

            <p class="deck-status" aria-role="status">
                <span class="deck-status-current"></span>
                /
                <span class="deck-status-total"></span>
            </p>
        </div>
        <script src="js/dist.js"></script>
    </body>
</html>
