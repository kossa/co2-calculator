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
    <h3 class="panel-title"> My carbon footprint
        <div class="pull-right">
            <?php echo round(($current_data->{'total-co2'} + $current_data->{'total-green-co2'})/1000, 1) ?> Tons CO2
        </div>
    </h3>
  </div>
  <div class="panel-body">
    <div id="carbon-footprint" style="height:250px;"></div>
  </div>
</div>

<script type="text/javascript">
        jQuery(document).ready(function($) {
        $("#carbon-footprint").dxChart({
                dataSource: [
                    { 
                        state: "My Travel", 
                        co2: <?php echo $current_data->{'travel-co2'} ?>, 
                        co2_green: <?php echo $current_data->{'travel-green-co2'} ?>
                    },
                    { 
                        state: "My Home", 
                        co2: <?php echo $current_data->{'home-co2'} ?>, 
                        co2_green: <?php echo $current_data->{'home-green-co2'} ?>
                    },
                    { 
                        state: "My Consume", 
                        co2: <?php echo $current_data->{'consume-co2'} ?>, 
                        co2_green: <?php echo $current_data->{'consume-green-co2'} ?>
                    },
                    { 
                        state: "My Social", 
                        co2: <?php echo $current_data->{'social-co2'} ?>, 
                        co2_green: <?php echo $current_data->{'social-green-co2'} ?>
                    },

                ],
                commonSeriesSettings: {
                    argumentField: "state",
                    type: "stackedBar"
                },
                series: [
                    { valueField: "co2", name: "CO2",color: '#4DC5F9' },
                    { valueField: "co2_green", name: "CO2 green",color: '#70BA63' },
                ],
                legend: {
                    visible: true
                },
                valueAxis:{
                    grid:{
                        color: '#9D9EA5',
                        width: 0.1
                        }
                },
                tooltip: {
                    enabled: true,
                    customizeText: function () {
                        return this.seriesName + " : " + this.valueText;
                    },
                    font: { size: 16 }
                }
        });
    });
</script>