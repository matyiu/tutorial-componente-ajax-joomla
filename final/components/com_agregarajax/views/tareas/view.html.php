<?php

use Joomla\CMS\MVC\View\HtmlView;

defined('_JEXEC') or die;

class AgregarajaxViewTareas extends HtmlView
{
    public function display($tpl = null)
    {
        $this->list = [];

        parent::display($tpl);
    }
}
