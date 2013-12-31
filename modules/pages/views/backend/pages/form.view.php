<ul class="nav nav-tabs">
    <li class="active"><a href="#content" data-toggle="tab"><?php echo __('content') ?></a></li>
    <li><a href="#meta" data-toggle="tab"><?php echo __('meta keywords') ?></a></li>
</ul>
<form class="form-horizontal" method="post">
    <div class="tab-content">
        <div class="tab-pane active" id="content">
            <div class="form-group">
                <label class="form-label">Название</label>
                <div class="controls">
                    <input type="text" name="name" class="form-control" <?php if (isset($page->name)) : ?> value="<?php echo $page->name; ?>" <?php endif; ?>/>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Заголовок</label>
                <div class="controls">
                    <input type="text" name="title" class="form-control" <?php if (isset($page->title)) : ?> value="<?php echo $page->title; ?>" <?php endif; ?>/>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Содержимое</label>
                <div class="controls">
                    <textarea class="form-control" name="content" rows="15"><?php if (isset($page->content)) echo $page->content; ?></textarea>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="meta">
            <legend><strong>Meta данные</strong></legend>
            <div class="form-group">
                <label class="form-label">Description</label>
                <div class="controls">
                    <input type="text" name="description" class="form-control" <?php if (isset($page->description)) : ?> value="<?php echo $page->description; ?>" <?php endif; ?>/>
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">Keywords</label>
                <div class="controls">
                    <input type="text" name="keywords" class="form-control" <?php if (isset($page->keywords)) : ?> value="<?php echo $page->keywords; ?>" <?php endif; ?>/>
                </div>
            </div>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo URL::base(); ?>admin/pages"><i class=" glyphicon glyphicon-arrow-left"></i> Назад</a>
                <button name="submit" class="btn btn-primary pull-right"><i class=" glyphicon glyphicon-hdd"></i> Сохранить</button>
            </div>
        </div>
    </div>
</form>
<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>