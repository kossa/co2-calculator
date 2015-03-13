<?php

/**
 * @version     1.0.0
 * @package     com_co2
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
defined('_JEXEC') or die;

class Co2FrontendHelper {
    
    /*
    |------------------------------------------------------------------------------------
    | Load JS of Chart
    |------------------------------------------------------------------------------------
    */
    public static function loadChartFiles()
    {
        echo '<script src="' . COMPONENT_URL . 'assets/js/jquery.js"></script>';
        echo '<script src="' . COMPONENT_URL . 'assets/js/chart/globalize.min.js"></script>';
        echo '<script src="' . COMPONENT_URL . 'assets/js/chart/dx.chartjs.js"></script>';
    }


    /*
    |------------------------------------------------------------------------------------
    | Get co2 from brut data
    |------------------------------------------------------------------------------------
    */
    

}
