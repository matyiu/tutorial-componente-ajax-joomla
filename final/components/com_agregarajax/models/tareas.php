<?php

use Joomla\CMS\MVC\Model\AdminModel;
use Joomla\CMS\Table\Table;

defined('_JEXEC') or die;

class AgregarajaxModelTareas extends AdminModel
{
    public function getForm($data = array(), $loadData = true)
    {
        
    }

    public function getItems() {
        $db = $this->getDbo();
        $query = $db->getQuery(true);

        $query->select(array('name'))
            ->from('#__agregarajax_tareas');
        $db->setQuery($query);

        return $db->loadAssocList();
    }
}
