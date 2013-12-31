<div class="container">
    <div class="row">
        <form class="form-horizontal" method="post">
            <legend><strong><?php echo $title; ?></strong></legend>
            
            <div class="form-group">
                <label class="form-label">Телефон</label>             
                <input type="text" name="phone" class="form-control" value="<?php echo $phone->value?>"/>          
            </div>
            <div class="form-group">
                <label class="form-label">E-mail</label>             
                <input type="text" name="email" class="form-control" value="<?php echo $email->value?>"/>          
            </div>
            <div class="form-group">
                <label class="form-label">Доставка и гарантия</label>             
                <textarea type="text" name="delivery" class="form-control redactor"><?php echo $delivery->value?></textarea>          
            </div>
            <div class="form-group">
                <a class="btn btn-default" href="<?php echo URL::base(); ?>admin/news"><i class=" glyphicon glyphicon-arrow-left"></i> Назад</a>
                <button name="submit" class="btn btn-primary pull-right"><i class=" glyphicon glyphicon-hdd"></i> Сохранить</button>
            </div>
        </form>
    </div>
</div>