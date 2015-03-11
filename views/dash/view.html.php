<?php

/**
 * @version     1.0.0
 * @package     com_co2
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * View to edit
 */
class Co2ViewDash extends JViewLegacy {

    /**
     * Display the view
     */
    public function display($tpl = null) {

        $app = JFactory::getApplication();
        $user_id = JFactory::getUser()->id;

        $model   = JModelLegacy::getInstance('Calculator', 'Co2Model');
        var_dump($model->getCurrentYear($user_id));

        parent::display($tpl);
    }

}
