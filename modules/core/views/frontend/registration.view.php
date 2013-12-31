<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default" id="allregistrationForm">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo __('Registration') ?></h3>
                </div>
                <div class="panel-body">
                    <form id="registrationForm" accept-charset="UTF-8" role="form" enctype="multipart/form-data" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="text">
                                <span class="help-inline text-danger"></span>
                            </div>
                            <div class="form-group">
                                <input id="password" class="form-control" placeholder="Password" name="password" type="password" value="">
                                <span class="help-inline text-danger"></span>
                            </div>
                            <div class="col-sm-6 col-sm-offset-2 my-help-text">
                                <span class="pwstrength_viewport_progress"></span> <span class="pwstrength_viewport_verdict"></span>
                            </div>
                            <div class="row">
                                <div id="messages" class="col-sm-12"></div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password Confirm" name="password_confirm" type="password" value="">
                                <span class="help-inline text-danger"></span>
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="submit">
                        </fieldset>
                    </form>


                </div>
            </div>

            <div id="avtorizationSuccessMsg" class="alert alert-success" style="display: none;">
                Вы успешно зарегистрировались на сайте, на ваш емейл было отправлено сообщение для подтверждения регистрации!
            </div>

        </div>
    </div>
</div>