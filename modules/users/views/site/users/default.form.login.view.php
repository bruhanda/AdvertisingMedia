<div class="row" style="margin-top: 50px;">
    <div class="span4 offset4">
        <div class="well">
            <legend>Авторизация</legend>
            <form method="POST" action="/login" accept-charset="UTF-8">
                <?php if ($errors): ?>
                <?php if(isset($errors) and $errors['0']!=NULL):?>
                    <?php foreach ($errors as $error): ?>
                        <?php if (is_array($error)): ?>
                            <?php foreach ($error as $err): ?>
                                <div class="alert alert-error">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <?php echo $err ?>
                                </div>
                            <?php endforeach ?>
                        <?php else: ?>
                            <div class="alert alert-error">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <?php echo $error ?>
                            </div>
                        <?php endif; ?>
                    <?php endforeach ?>
                <?php endif; ?>
                <?php endif; ?>
                <input class="input-block-level" placeholder="Логин" type="text" name="username">
                <input class="input-block-level" placeholder="Пароль" type="password" name="password">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"> Запомнить меня
                </label>
                <button class="btn-info btn" type="submit" name="submit">Вход</button>
            </form>
        </div>
    </div>
</div>