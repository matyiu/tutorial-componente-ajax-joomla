<?php

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;

defined('_JEXEC') or die;

$controller = BaseController::getInstance('Agregarajax');
$controller->execute(Factory::getApplication()->input->get('task'));
$controller->redirect();
