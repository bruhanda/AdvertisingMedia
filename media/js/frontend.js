/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {

    /* Регистрация */
    $("#registrationForm").submit(function() {
        var form = $(this).serialize();
        $.post('/json/registration', form, function(data) {

            if (data.errors != null) {

                console.log(data.errors);
                $('input').each(function() {
                    $(this).closest('div.form-group').removeClass('has-error');
                    $(this).closest('div.form-group').addClass('has-success');
                    $(this).closest('div.form-group').children('span.help-inline').hide();
                });
                jQuery.each(data.errors, function(i, val) {
                    $('input[name=' + i + ']').closest('div.form-group').removeClass('has-success');
                    $('input[name=' + i + ']').closest('div.form-group').addClass('has-error');
                    $('input[name=' + i + ']').closest('div.form-group').children('span.help-inline').html(val).show();
                });
            }
            else {
                $('#allregistrationForm').hide();
                $('#avtorizationSuccessMsg').show();
                setTimeout(function () { window.location.href="/"; }, 8000);
            }
        }, 'json');
        return false;
    });

    /*
     * прогресбар для пароля
     */
    $('#password').pwstrength();
});