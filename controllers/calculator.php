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

require_once JPATH_COMPONENT . '/controller.php';

/**
 * Calculator controller class.
 */
class Co2ControllerCalculator extends Co2Controller {

    private $urlCalculator = 'index.php?option=com_co2&view=calculator&Itemid=102';

    
    /*
    |------------------------------------------------------------------------------------
    | Save new DATA
    |------------------------------------------------------------------------------------
    */
    public function save()
    {
        $app             = JFactory::getApplication();
        $user_id         = JFactory::getUser()->id;
        $jinput          = $app->input;
        
        $object          = new stdClass();
        $object->user_id = $user_id;
        $object->year    = $jinput->get('year','', 'STRING');
        $object->data    = json_encode($jinput->get('data','', 'ARRAY'));
        $object->date    = date('Y-m-d h:i:s');
        
        // Get Model and save
        $model = $this->getModel('Calculator');

        $old = $model->getDataYear($user_id, $object->year);
        
        if($old){ // Exists already => updating
            $object->id = $old[0]->id;
            $model->updateData($object);
        }else{// Insert new one
            $model->save($object);
        }

        $app->redirect($this->urlCalculator, 'Registered with success', 'success');
        
        
    }

    /*
    |------------------------------------------------------------------------------------
    | Just for testing 
    |------------------------------------------------------------------------------------
    */
    public function test()
    {
        $model = $this->getModel('Calculator');

        if($model->getDataYear(673, 2010)){
            echo "yes";
        }
    }
    

}
