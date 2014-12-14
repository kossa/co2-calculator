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
class Co2ViewCalculator extends JViewLegacy {

    /**
     * Display the view
     */
    public function display($tpl = null) {

        $app = JFactory::getApplication();
        $doc = JFactory::getDocument();
        $user = JFactory::getUser();

        // Add CSS file
        $doc->addStyleSheet(COMPONENT_URL . "assets/css/mb.slider.css");
        $doc->addStyleSheet(COMPONENT_URL . "assets/css/calculator.css");

        // Add JS file
        $doc->addScript(COMPONENT_URL . "assets/js/jquery.js");
        $doc->addScript(COMPONENT_URL . "assets/js/jquery.metadata.js");
        $doc->addScript(COMPONENT_URL . "assets/js/jquery.mb.slider.js");
        $doc->addScript(COMPONENT_URL . "assets/js/calculator.js");

        parent::display($tpl);
    }

}
