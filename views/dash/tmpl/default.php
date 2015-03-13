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

<h1>Dashboard</h1>

    <div id="line-chart" style="height:250px;"></div>


<script type="text/javascript">
    $.noConflict();
        jQuery(document).ready(function($) {
        $("#line-chart").dxChart({
            dataSource: [
            <?php foreach ($Datas as $data): ?>
                { 
                    year: <?php echo $data->year ?>, 
                    europe: <?php echo json_decode($data->data)->{'total-co2'} ?>, 
                    americas: <?php echo json_decode($data->data)->{'total-green-co2'} ?>, 
                },
            <?php endforeach ?>
            ],
            commonSeriesSettings: {
                argumentField: "year"
            },
            series: [
                { valueField: "europe", name: "total-co2", color: "#3498DB" },
                { valueField: "americas", name: "total-green-co2", color: "#6AB100" },
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