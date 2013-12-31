<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <?php foreach ($headers as $sort => $title): ?>
            <?php $count = 0; ?>
            <?php foreach ($items as $item): ?>
                <?php if (isset($item['sort']) and $item['sort'] == $sort): ?>
                    <?php if ($count == 0): ?>
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $title; ?>">
                                    <?php echo $title; ?>
                                </a>
                            </h4>
                        </div>
                        <?php $count = 1; ?>
                        <div id="<?php echo $title; ?>" class="panel-collapse collapse <?php if (preg_match($item['regexp'], Request::$initial->url())) : ?>in<?php endif; ?>">
                            <div class="panel-body">
                                <a href="<?php echo URL::base(); ?>admin/<?php echo $item['url']; ?>"><i class="glyphicon glyphicon-<?php echo $item['icon']; ?>"></i> <?php echo $item['name']; ?></a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>
</div>