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

?>


<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">My lifestyle</h3>
  </div>
  <div class="panel-body">
    <div id="lifestyle" style="height:250px;"></div>
  </div>
</div>

<script type="text/javascript">
        jQuery(document).ready(function($) {
        $("#lifestyle").dxChart({
            dataSource: [
            <?php foreach ($Datas as $data): ?>
                { 
                    year: <?php echo $data->year ?>, 
                    total_co2: <?php echo json_decode($data->data)->{'total-co2'} ?>, 
                    total_green_co2: <?php echo json_decode($data->data)->{'total-green-co2'} ?>, 
                },
            <?php endforeach ?>
            ],
            commonSeriesSettings: {
                argumentField: "year"
            },
            series: [
                { valueField: "total_co2", name: "Total-co2", color: "#3498DB" },
                { valueField: "total_green_co2", name: "Total-green-co2", color: "#6AB100" },
            ],
            tooltip:{
                enabled: true,
                font: { size: 16 }
            },
            legend: {
                visible: true
            },
            valueAxis:{
                grid:{
                    color: "#9D9EA5",
                    width: 0.1
                    }
            }
        });
    });
</script>