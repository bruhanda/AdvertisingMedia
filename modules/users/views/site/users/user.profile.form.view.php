<div>
    <legend>
        Настройки аккаунта.
    </legend>
    <hr>
    <form class="form-horizontal" id="userProfile" enctype="multipart/form-data" method="post">
        <div class="control-group">
            <label class="control-label" for="inputEmail">Email</label>
            <div class="controls">
                <input class="input-large" type="text" name="email" id="inputEmail" placeholder="Email" value="<?php echo $user->email?>" required>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputPassword">Пароль</label>
            <div class="controls">
                <input class="input-large" type="password" name="password" id="inputPassword" placeholder="Пароль" value="<?php echo $user->password?>" required>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="confirmPassword">Повторите пароль</label>
            <div class="controls">
                <input class="input-large" type="password" name="password_confirm" id="confirmPassword" placeholder="Повторите пароль" value="<?php echo $user->password?>" required>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="firstName">Имя</label>
            <div class="controls">
                <input class="input-large" type="text" name="first_name" id="firstName" placeholder="Имя" value="<?php echo $user->first_name?>" required>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="middleName">Отчество</label>
            <div class="controls">
                <input class="input-large" type="text" name="middle_name" id="middleName" placeholder="Отчество" value="<?php echo $user->middle_name?>">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="surname">Фамилия</label>
            <div class="controls">
                <input class="input-large" type="text" name="surname" id="surname" placeholder="Фамилия" value="<?php echo $user->surname?>">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inputEmail">Телефон</label>
            <div class="controls">
                <input class="input-large" id="inputPhone" type="text" name="phone" placeholder="Телефон" value="<?php echo $user->phone?>">
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <button name="submit" class="btn" >Сохранить</button>
            </div>
        </div>
    </form>
</div>
