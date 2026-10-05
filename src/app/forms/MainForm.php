<?php
namespace app\forms;

use std, gui, framework, app;

class MainForm extends AbstractForm
{

    /**
     * @event button.click-Left 
     */
    function doButtonClickLeft(UXMouseEvent $e = null)
    {    

    }

    /**
     * @event buttonAlt.click-Left 
     */
    function doButtonAltClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event label.click-Left 
     */
    function doLabelClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event labelAlt.click-Left 
     */
    function doLabelAltClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event close 
     */
    function doClose(UXWindowEvent $e = null)
    {    
        
    }

    /**
     * @event button4.click-Left 
     */
    function doButton4ClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button5.click-Left 
     */
    function doButton5ClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event slider.click-Left 
     */
    function doSliderClickLeft(UXMouseEvent $e = null)
    {    
        $this->player->position = $this->slider->value;
    }

    /**
     * @event button6.click-Left 
     */
    function doButton6ClickLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button6.mouseEnter 
     */
    function doButton6MouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event button6.mouseExit 
     */
    function doButton6MouseExit(UXMouseEvent $e = null)
    {    
        
    }


    /**
     * @event sliderVolume.click-Left 
     */
    function doSliderVolumeClickLeft(UXMouseEvent $e = null)
    {    
        $this->player->volume = $this->sliderVolume->value / 100;
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {
$showTips = app()->module('MainModule')->ini->get('show_tips', 'Main', '1');

if (!file_exists('config.ini')) {
    app()->module('MainModule')->ini->set('show_tips', '1', 'Main');
}

if ($showTips == '1') {
    app()->showForm('DayTip');
}

    }
    }

