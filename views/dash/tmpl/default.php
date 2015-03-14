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

<form action="index.php?option=com_content&view=article&id=3&Itemid=113" method="POST">
    <input type="hidden" name="price" value="<?php echo $current_data->{'total-euro'} + $current_data->{'total-green-euro'}  ?>">
    <input type="submit" name="" value="Buy certicate" class="btn btn-success pull-right">
</form>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">My zero emission account (€) 
        <span class="pull-right">
            <?php echo $current_data->{'total-euro'} + $current_data->{'total-green-euro'} ?> €
        </span>
    </h3>
  </div>
  <div class="panel-body">
    <div id="zero-emission-account" style="height:250px;"></div>
  </div>
</div>

<script type="text/javascript">
        jQuery(document).ready(function($) {
        $("#zero-emission-account").dxChart({
            dataSource: [
            <?php foreach ($Datas as $data): ?>
                { 
                    year: <?php echo $data->year ?>, 
                    total_co2: <?php echo json_decode($data->data)->{'total-euro'} ?>, 
                    total_green_co2: <?php echo json_decode($data->data)->{'total-green-euro'} ?>, 
                },
            <?php endforeach ?>
            ],
            commonSeriesSettings: {
                argumentField: "year"
            },
            series: [
                { valueField: "total_co2", name: "Total-co2", color: "#4DC5F9" },
                { valueField: "total_green_co2", name: "Total-green-co2", color: "#70BA63" },
            ],
            tooltip:{
                enabled: true,
                font: { size: 16 },
                customizeText: function () {
                    return this.seriesName + " : " + this.valueText + "€";
                },
            },
            legend: {
                visible: true
            },
            argumentAxis: {
                type: 'discrete',
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