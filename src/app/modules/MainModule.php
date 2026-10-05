<?php
namespace app\modules;

use std, gui, framework, app;


class MainModule extends AbstractModule
{

    /**
     * @event player.error 
     */
    function doPlayerError(ScriptEvent $e = null)
    {    
        $this->toast('Ошибка чтения');
    }

    /**
     * @event player.play 
     */
    function doPlayerPlay(ScriptEvent $e = null)
    {    
        $this->slider->value = $this->player->position;
        
        
    }

    /**
     * @event player.stop 
     */
    function doPlayerStop(ScriptEvent $e = null)
    {    
    
    }

}
