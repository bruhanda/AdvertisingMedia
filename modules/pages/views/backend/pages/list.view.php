<div class="row" style="margin-bottom: 20px;">
    <div class="col-md-3">
        <a href="<?php echo URL::base(); ?>admin/pages/create" class="btn btn-primary pull-left"><i class=" glyphicon glyphicon-plus"></i> <?php echo __('add page') ?></a>
    </div>
    <div class="col-md-9 pull-right">
        <div class="pull-right">
            <input type="text" class="search form-control pull-left" placeholder="Search for pages.."/>
        </div>
    </div>
</div>
<div class="row">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1"></th>
                <th class="">Название</th>
                <th class="col-md-3"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page) : ?>
                <tr>
                    <td class="col-md-1"><input type="checkbox" name="pids[]" value="<?php echo $page->id; ?>" /></td>
                    <td class=""><?php echo $page->name; ?></td>
                    <td class="col-md-3" style="text-align: right;">
                        <a title="<?php echo __('view')?>" class="btn btn-info" href="<?php echo URL::base(); ?>pages/<?php echo $page->slug; ?>"><i class=" glyphicon glyphicon-check  glyphicon glyphicon-white"></i></a>
                        <a title="<?php echo __('edit')?>" class="btn btn-primary" href="<?php echo URL::base(); ?>admin/pages/edit/<?php echo $page->id; ?>"><i class=" glyphicon glyphicon-edit  glyphicon glyphicon-white"></i></a>
                        <a title="<?php echo __('remove')?>" class="btn btn-danger" href="<?php echo URL::base(); ?>admin/pages/remove/<?php echo $page->id; ?>"><i class=" glyphicon glyphicon-trash  glyphicon glyphicon-white"></i></a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
