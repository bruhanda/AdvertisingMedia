<?php

 $_FILES['file']['type']['tmp_name'] = strtolower($_FILES['file']['type']);
        if ($_FILES['file']['type'] == 'image/png' || $_FILES['file']['type'] == 'image/jpg' || $_FILES['file']['type'] == 'image/gif' || $_FILES['file']['type'] == 'image/jpeg'|| $_FILES['file']['type'] == 'image/pjpeg')
        {
                $settings = Kohana::$config->load('settings');
                $directory = $settings->image_path;
                $ext = 'jpg';

                // Генерируем случайное название
               $symbols = '0123456789abcdefghijklmnopqrstuvwxyz';
               $filename = substr(str_shuffle($symbols), 0, 16);
              $im = Image::factory($_FILES['file']['tmp_name']);

                if ($im->width > 150)
                {
                    $im->resize(150, 150, Image::NONE);
                }
                var_dump("$directory.small_images/small_$filename.$ext");die;
                $im->save("$directory.small_imageg/small_$filename.$ext");    

                /*
                $im = Image::factory($file);
                $im->resize(640);
                $im->crop(640, 640);
                $im->resize(NULL, 640);
                $im->crop(640, 640);
*/
                //echo URL::base();die;
             /*  $im->save("$directory$filename.$ext");

                $array = array(
                    'filelink' => "$directory$filename.$ext",
                );
                //var_dump($array);die;

                echo stripslashes(json_encode($array));*/

        }
?>