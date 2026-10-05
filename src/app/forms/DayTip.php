<?php
namespace app\forms;

use std, gui, framework, app;


class DayTip extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
    $showTips = app()->module('MainModule')->ini->get('show_tips', 'Main', '1');

if ($showTips == '0') {
    $this->checkbox->selected = false;
} else {
    $this->checkbox->selected = true;
}

$tips = [
    'Если хочешь что бы плеер обновлялся чаще? Загляни на DALINK Автора https://dalink.to/expert5_228',
    "Если нажать на название плеера в нижнем правом углу главного окна то вылезет окно О программе",
    "Проверь новые обновления в окне О Программе",
    "Исходный код плеера есть на Github https://github.com/expert5228/Simple.Music.Player",
    "Если навести на правый верхний край рядом с кнопкой ... то вы увидите List в котором можно добавить несколько песен и переключатся между ними",
    "Загляни на сайт разработчика expert5site.tilda.ws",
    "Подпишись на телеграм канал разработчика ему будет приятно @expert5_228"
];

$randomKey = array_rand($tips);

$this->label3->text = $tips[$randomKey];

    }

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event more.click-Left 
     */
    function doMoreClickLeft(UXMouseEvent $e = null)
    {    
    
        $tips = [
            'Если хочешь что бы плеер обновлялся чаще? Загляни на DALINK Автора https://dalink.to/expert5_228',
            "Если нажать на название плеера в нижнем правом углу главного окна то вылезет окно О программе",
            "Проверь новые обновления в окне О Программе",
            "Исходный код плеера есть на Github https://github.com/expert5228/Simple.Music.Player",
            "Если навести на правый верхний край рядом с кнопкой ... то вы увидите List в котором можно добавить несколько песен и переключатся между ними",
            "Загляни на сайт разработчика expert5site.tilda.ws",
            "Подпишись на телеграм канал разработчика ему будет приятно @expert5_228"
        ];

        $randomKey = array_rand($tips);
        $this->label3->text = $tips[$randomKey];
    }

    /**
     * @event checkbox.click-Left 
     */
    function doCheckboxClickLeft(UXMouseEvent $e = null)
    {    
$value = $this->checkbox->selected ? '1' : '0';
app()->module('MainModule')->ini->set('show_tips', $value, 'Main');

    }

}
