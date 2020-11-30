<?php

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Session\Session;

defined('_JEXEC') or die;

HTMLHelper::_('script', 'com_agregarajax/script.js', array('version' => 'auto', 'relative' => true));
HTMLHelper::_('stylesheet', 'com_agregarajax/style.css', array('version' => 'auto', 'relative' => true));

?>
<div>
    <input id="token" type="hidden" name="<?php echo Session::getFormToken(); ?>" value="1" />
    <ul class="task-list">
        <!-- <li>
            <span>tarea</span>
        </li> -->
    </ul>
    <button id="cargar-tareas" class="btn btn-primary">Cargar Tareas</button>
</div>