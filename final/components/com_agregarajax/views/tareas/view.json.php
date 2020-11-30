<?php

use Joomla\CMS\MVC\View\HtmlView;
use Joomla\CMS\Response\JsonResponse;

defined('_JEXEC') or die;

class AgregarajaxViewTareas extends HtmlView
{
    public function display($tpl = null)
    {
        $this->list = $this->getModel()->getItems();

        echo new JsonResponse($this->list, 'Éxito', false);
    }
}
