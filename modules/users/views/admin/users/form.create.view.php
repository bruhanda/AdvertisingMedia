<div class="container">
    <div class="row">
        <form class="form-horizontal" method="post">
            <legend><strong><?php echo $title; ?></strong></legend>
            <div class="control-group">
                <label class="control-label">Логин</label>
                <div class="controls">
                    <input type="text" name="username" class="span6" <?php if (isset($user->username)) : ?> value="<?php echo $user->username; ?>" <?php endif; ?>/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Имя</label>
                <div class="controls">
                    <input type="text" name="first_name" class="span6" <?php if (isset($user->first_name)) : ?> value="<?php echo $user->first_name; ?>" <?php endif; ?>/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Фамилия</label>
                <div class="controls">
                    <input type="text" name="last_name" class="span6" <?php if (isset($user->last_name)) : ?> value="<?php echo $user->last_name; ?>" <?php endif; ?>/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Email</label>
                <div class="controls">
                    <input type="text" name="email" class="span6" <?php if (isset($user->email)) : ?> value="<?php echo $user->email; ?>" <?php endif; ?>/>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Группа</label>
                <div class="controls">
                    <select name="group">
                        <option value="0">Выберите группу...</option>
                        <?php foreach($groups as $group) : ?>
                        <option value="<?php echo $group->id; ?>"><?php echo $group->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Пароль</label>
                <div class="controls">
                    <input type="text" name="password" class="span6" />
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Подтверждение</label>
                <div class="controls">
                    <input type="text" name="password_confirm" class="span6" />
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="span6">
                        <a class="btn" href="<?php echo URL::base(); ?>admin/users"><i class=" glyphicon glyphicon-arrow-left"></i> Назад</a>
                        <button name="submit" class="btn pull-right"><i class=" glyphicon glyphicon-hdd"></i> Сохранить</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>