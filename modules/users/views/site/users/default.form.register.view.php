
<div id="allRegistrationForm" class="" style="margin: 30px 0;">
    <p>
        Если у вас уже есть учетная запись, воспользуйтесь формой авторизации
        <a id="Login" href="#" >Вход</a>
        .
    </p>
    <hr>
    <form class="form-horizontal" role="form" id="register" enctype="multipart/form-data" method="post">
        <div class="form-group">
            <label class="col-lg-2 control-label" for="inputEmail">Email</label>
            <div class="col-lg-5">
                <input class="form-control" type="text" name="email" id="inputEmail" placeholder="Email" required>
                <span class="help-inline text-danger"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="inputPassword">Пароль</label>
            <div class="col-lg-5">
                <input class="form-control" type="password" name="password" id="inputPassword" placeholder="Пароль" required>
                <span class="help-inline text-danger"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="confirmPassword">Повторите пароль</label>
            <div class="col-lg-5">
                <input class="form-control" type="password" value="" name="password_confirm" id="confirmPassword" placeholder="Повторите пароль" required>
                <span class="help-inline text-danger"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="firstName">Имя</label>
            <div class="col-lg-5">
                <input class="form-control" type="text" name="first_name" id="firstName" placeholder="Имя" required>
                <span class="help-inline text-danger"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label" for="inputEmail">Телефон</label>
            <div class="col-lg-5">
                <input class="form-control" id="inputPhone" type="text" name="phone" placeholder="Телефон">
                <span class="help-inline text-danger"></span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-5">
                <button  name="submit" class="btn btn-default" >Регистрация</button>
            </div>
        </div>
    </form>
</div>
<div id="avtorizationSuccessMsg" class="" style="margin: 30px 0; display: none;">
    <p>
        Вы успешно зарегистрировались на сайте. На Ваш E-mail было отправлено письмо с ссылкой для подтверждения регистрации.
    </p>
    <p>
        После подтверждения регистрации Вы можете воспользоваться формой авторизации для входа в панель пользователя.
    </p> 
</div>