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
        <script type="text/javascript">
            $(function(){
                $('textarea[name=content]').redactor({ imageUpload: '<?php echo URL::base(); ?>js/images/upload.js' });
                $('#redactor').redactor({ imageUpload: '<?php echo URL::base(); ?>js/images/upload.js' });
            });
        </script>
    </head>

    <body>
        <div class="row">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header">

                    </div>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="col-md-3">
                <?php echo $menu; ?>
            </div>
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <?php if (isset($title)): ?>
                        <div class="panel-heading">
                            <h1><?php echo __($title) ?></h1>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($contents)): ?>
                        <div class="panel-body" style="padding: 20px;">
                            <?php foreach ($contents as $content): ?>
                                <?php echo $content ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($pagination)): ?>
                        <div class="panel-footer">
                            <?php echo $pagination ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </body>
</html>
