<?php

return array(

    'undeployable' 		=> '<strong>Внимание: </strong> Этот актив был помечен как выданный.
                        Если этот статус изменился, необходимо его обновить.',
    'does_not_exist' 	=> 'Актив не существует.',
    'assoc_users'	 	=> 'Этот актив в настоящее время привязан к пользователю и не может быть удален. Пожалуйста сначала снимите привязку, и затем попробуйте удалить снова. ',

    'create' => array(
        'error'   		=> 'Актив не был создан, пожалуйста попробуйте снова. :(',
        'success' 		=> 'Актив успешно создан. :)'
    ),

    'update' => array(
        'error'   			=> 'Актив не был изменен, пожалуйста попробуйте снова',
        'success' 			=> 'Актив успешно изменен.',
        'nothing_updated'	=>  'Поля не выбраны, нечего обновлять.',
    ),

    'restore' => array(
        'error'   		=> 'Актив не был восстановлен, повторите попытку',
        'success' 		=> 'Актив успешно восстановлен.'
    ),
    
    'deletefile' => array(
        'error'   => 'Не удалось удалить файл. Повторите попытку.',
        'success' => 'Файл успешно удален.',
    ),

    'upload' => array(
        'error'   => 'Не удалось загрузить файл(ы). Повторите попытку.',
        'success' => 'Файл(ы) успешно загружены.',
        'nofiles' => 'Не выбраны файлы для загрузки',
        'invalidfiles' => 'Один или несколько ваших файлов слишком большого размера или имеют неподдерживаемый формат. Разрешены только следующие форматы файлов:  png, gif, jpg, doc, docx, pdf, txt.',
    ),


    'delete' => array(
        'confirm'   	=> 'Вы уверены что хотите удалить этот актив?',
        'error'   		=> 'При удалении актива возникла проблема. Пожалуйста попробуйте снова.',
        'success' 		=> 'Актив был успешно удален.'
    ),

    'checkout' => array(
        'error'   		=> 'Актив не был привязан, пожалуйста попробуйте снова',
        'success' 		=> 'Актив успешно привязан.',
        'user_does_not_exist' => 'Этот пользователь является недопустимым. Пожалуйста, попробуйте еще раз.'
    ),

    'checkin' => array(
        'error'   		=> 'Актив не был отвязан, пожалуйста попробуйте снова',
        'success' 		=> 'Актив успешно отвязан.',
        'user_does_not_exist' => 'Этот пользователь является недопустимым. Пожалуйста, попробуйте еще раз.'
    )

);
