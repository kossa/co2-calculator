<?php

/**
 * @version     1.0.0
 * @package     com_co2
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
// No direct access.
defined('_JEXEC') or die;

jimport('joomla.application.component.modelitem');
jimport('joomla.event.dispatcher');

/**
 * Co2 model.
 */
class Co2ModelCalculator extends JModelItem {

    /*
    |------------------------------------------------------------------------------------
    | Save a new data
    |------------------------------------------------------------------------------------
    */
    public function save($obj)
    {
        return JFactory::getDBO()->insertObject('#__co2_users', $obj);
    }

    /*
    |------------------------------------------------------------------------------------
    | Update existing data in Year
    |------------------------------------------------------------------------------------
    */
    public function updateData($object)
    {
        return JFactory::getDbo()->updateObject('#__co2_users', $object, 'id');
    }

    /*
    |------------------------------------------------------------------------------------
    | Get Data by one year, by default the current year
    |------------------------------------------------------------------------------------
    */
    public function getDataYear($id = 0, $year)
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);        
        $query
            ->select('*')
            ->from($db->quoteName('#__co2_users'))
            ->where($db->quoteName('user_id') . ' = '. $id)
            ->where($db->quoteName('year') . ' = '. $year)
            ;
        
        $db->setQuery($query);
        return $db->loadObjectList();
    }

    public function getAllData($id = 0)
    {
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);        
        $query
            ->select('*')
            ->from($db->quoteName('#__co2_users'))
            ->where($db->quoteName('user_id') . ' = '. $id);
        
        $db->setQuery($query);
        return $db->loadObjectList();
        
    }

}
