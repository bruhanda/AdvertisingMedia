<div class="container">
    <div class="row well well-small">
        <a class="btn" href="<?php echo URL::base(); ?>admin/users/create"><i class=" glyphicon glyphicon-plus"></i> <strong>Добавить пользователя</strong></a>
    </div>
    <div class="row">
        <table class="table table-hover">
            <tr>
                <th class="span1"></th>
                <th class="span5">Email</th>
                <th class="input-block-level">Последний раз был</th>
                <th class="span3"></th>
            </tr>
            <?php foreach($users as $user) : ?>
            <tr>
                <td class="span1"><input type="checkbox" name="pids[]" value="<?php echo $user->id; ?>" /></td>
                <td class="span5"><?php echo $user->email; ?></td>
                <td class="input-block-level"><?php echo date('Y-m-d H:i:s', $user->last_login); ?></td>
                <td class="span3">
                    <a class="btn btn-primary" href="<?php echo URL::base(); ?>admin/users/edit/<?php echo $user->id; ?>"><i class=" glyphicon glyphicon-edit  glyphicon glyphicon-white"></i></a>
                    <a class="btn btn-danger" href="<?php echo URL::base(); ?>admin/users/remove/<?php echo $user->id; ?>"><i class=" glyphicon glyphicon-trash  glyphicon glyphicon-white"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>