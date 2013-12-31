
<div class="modal fade" id="loginModal" >
    <div class="modal-dialog" style="width:360px;">
        <div class="well">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <legend style="margin-bottom: 10px;">Авторизация</legend>
            <form enctype="multipart/form-data" method="post" action="" id="loginForm" accept-charset="UTF-8">

                <div class="alert alert-danger" style="display: none;">
                    <button type="button" class="close" aria-hidden="true">×</button>
                    <div id="loginError"></div>
                </div>
                <div class="form-group">
                    <input class="form-control" id="loginFormEmail" placeholder="E-mail" type="text" name="email" required>
                </div>
                <div class="form-group">
                    <input class="form-control" id="loginFormPassword" placeholder="Пароль" type="password" name="password" required>
                </div>
                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" value="1"> Запомнить меня
                    </label>
                </div>
                <button class="btn-info btn" type="submit" name="submit">Вход</button>
            </form>
        </div>
    </div>
</div>

