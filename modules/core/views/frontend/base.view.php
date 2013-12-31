<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $site_name ?> | <?php echo $page_title ?></title>
        <meta content="text/html; charset=utf8" http-equiv="content-type">
        <?php foreach ($scripts as $script): ?>
            <?php echo HTML::script($script) ?>
        <?php endforeach; ?>
        <?php foreach ($styles as $style): ?>
            <?php echo HTML::style($style) ?>
        <?php endforeach; ?>
    </head>

    <body>
        <?php if (isset($contents)): ?>
            
                <?php foreach ($contents as $content): ?>
                    <?php echo $content ?>
                <?php endforeach; ?>
            
        <?php endif; ?>
    </body>
</html>
