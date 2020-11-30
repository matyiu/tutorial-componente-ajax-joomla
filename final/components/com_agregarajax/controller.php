<?php

use Joomla\CMS\Factory;
use Joomla\CMS\MVC\Controller\BaseController;
use Joomla\CMS\Response\JsonResponse;
use Joomla\CMS\Session\Session;
use Joomla\CMS\Language\Text;

defined('_JEXEC') or die;

class AgregarajaxController extends BaseController {
    public function __construct($config = array())
    {
        parent::__construct($config);
    }

    public function loadTasks() {
        if (!Session::getFormToken()) {
            echo new JsonResponse(false, Text::_('JINVALID_TOKEN'), true);
        } else {
            parent::display();
        }
    }
}
