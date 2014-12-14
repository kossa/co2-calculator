<?php
/**
 * @version     1.0.0
 * @package     com_co2
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

// Kossa
define("COMPONENT_URL", JURI::root() . "components/com_co2/");

// Execute the task.
$controller	= JControllerLegacy::getInstance('Co2');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
