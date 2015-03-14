<?php
/**
 * @version     1.0.0
 * @package     com_co2
 * @copyright   Copyright (C) 2014. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Kouceyla Hadji <hadjikouceyla@gmail.com> - http://www.behance.net/kossa
 */
// no direct access
defined('_JEXEC') or die;

$Datas = $this->allData;
//var_dump(json_decode($Datas[0]->data)->{'total-co2'});

$current_data = $this->current_data;

?>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">My lifestyle
        <div class="pull-right">
            <?php echo $current_data->{'total-kwh'} + $current_data->{'total-green-kwh'} ?> Kwh
        </div>
    </h3>
  </div>
  <div class="panel-body">
    <div id="lifestyle" style="height:500px;"></div>
  </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#lifestyle").dxPieChart({
            dataSource: [
                { country: "My Travel", medals: <?php echo $current_data->{'travel-kwh'} + $current_data->{'travel-green-kwh'} ?> },
                { country: "My Social", medals: <?php echo $current_data->{'social-kwh'} + $current_data->{'social-green-kwh'} ?> },
                { country: "My Home", medals: <?php echo $current_data->{'home-kwh'} + $current_data->{'home-green-kwh'} ?> },
                { country: "My Consume", medals: <?php echo $current_data->{'consume-kwh'} + $current_data->{'consume-green-kwh'} ?> },

            ],
            legend: {
                visible: true,
                horizontalAlignment: 'center',
                verticalAlignment: 'bottom'
            },
            palette: ["#A49BC4", "#70BA63", "#E9573F", "#4DC5F9", "#EDD655", "#4ECDC4"],
            series: [{
                argumentField: "country",
                valueField: "medals",
                label: {
                    visible: true,
                    font: {
                        size: 12
                    },
                    connector: {
                        visible: true,
                        width: 0.5
                    },
                    position: "columns",
                    customizeText: function(arg) {
                        return arg.valueText + " ( " + arg.percentText + ")";
                    }
                }
            }]
        });
    });
</script>