<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * Класс для получения виджетов
 */

class Exception extends Kohana_Kohana_Exception {

    public static function handler(Exception $e)
    {
        /* Если AJAX запрос, перенаправляем его на Controller_AJAX_Error */
        if (Request::initial() !== NULL AND Request::initial()->is_ajax()) {
            $attributes = array(
                'directory' => 'ajax',
                'controller' => 'error',
                'action' => 'index',
                'id' => rawurlencode($e->getMessage())
            );
            self::_show_error($e, $attributes, 'system');
        }
        /*
         * Если у нас DEVELOPMENT окружение, выводим ошибки как есть для
         * простоты отладки кода
         */
        elseif (Kohana::DEVELOPMENT === Kohana::$environment OR Kohana::$is_cli) {
            parent::handler($e);
        }
        /* Все остальное выводим на странице Controller_Error */
        else {
            $attributes = array(
                'message' => rawurlencode($e->getMessage())
            );

            self::_show_error($e, $attributes);
        }

    }

    protected static function _show_error($error, $attributes, $route = 'error')
    {
        /* Логируем ошибку */
        Kohana::$log->add(Log::ERROR, parent::text($error))->write();
        /* Пытаемся выполнить запрос */
        try {
            echo Request::factory(Route::url($route, $attributes))
                    ->execute()
                    ->send_headers()
                    ->body();
        }
        /* При возникновении Exception выводим возникшую ошибку на экран и логируем */
        catch (Exception $e) {
            /* Clean the output buffer if one exists */
            ob_get_level() and ob_clean();

            /* Display the exception text */
            echo parent::text($e);

            /* Log error */
            Kohana::$log->add(Log::ERROR, parent::text($e))->write();
            /* Exit with an error status */
            exit(1);
        }

    }

}