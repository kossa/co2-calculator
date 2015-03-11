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



?>
    <div class="container" id="the-calcolator">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#lifestyle" role="tab" data-toggle="tab">my  lifestyle</a></li>
        <li role="presentation"><a href="#travel" role="tab" data-toggle="tab">1. my travel</a></li>
        <li role="presentation"><a href="#home" role="tab" data-toggle="tab">2. my home</a></li>
        <li role="presentation"><a href="#consume" role="tab" data-toggle="tab">3. my consume</a></li>
        <li role="presentation"><a href="#social" role="tab" data-toggle="tab">4. my social</a></li>
      </ul>
      
      <form action="index.php?option=com_co2&task=calculator.save" method="POST">

        <div class="row">
          <div class="col-sm-12">
            <ul class="list-inline pull-right">
              <li>Year :</li>
              <li>
                <select name="year" class="form-control">
                  <?php for ($i = 2015; $i < 2050; $i++): ?>
                    <option value="<?php echo $i ?>" <?php echo ($i==date('Y') ? 'selected' : '') ?>><?php echo $i ?></option>
                  <?php endfor ?>
                  
                </select>
              </li>
              <li><input type="submit" name="" class="btn btn-success" value="Submit"></li>
            </ul>
          </div>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="lifestyle">
            <div class="jumbotron the-total">
              <a href="#" class="reset btn btn-default pull-right">reset</a>
              <section class="total-travel">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my lifestyle</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="ex1">
                            <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                          </div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[total-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[total-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[total-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="mygreen-saving green">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/zero-icon-green.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my zero emission people - lifestyle</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:25000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[total-green-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
        
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[total-green-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[total-green-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div><!-- display-values -->
                  </div>
                </div>
              </section><!-- airplane-section -->
            </div>
          </div>
        
          <div role="tabpanel" class="tab-pane fade" id="travel">
            <div class="jumbotron">
              <a href="#" class="reset btn btn-default pull-right">reset</a>
              <section class="total-travel">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/car-icon.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my travel</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="ex1">
                            <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                          </div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[travel-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[travel-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[travel-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="mygreen-saving green">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/car-icon-green.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my green savings</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:25000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[travel-green-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[travel-green-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[travel-green-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div><!-- display-values -->
                  </div>
                </div>
              </section><!-- airplane-section -->
            </div>
        
            <section class="car-section" data-name="car">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/car-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>car</strong>
                      <p>How many km do you drive per year ?</p>
                      <div class="ex1">
                        <div id="sl_car"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 Km</div>
                      <div class="pull-right">50.000 Km</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_car_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>Km Year</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- car-section -->
        
            <section class="airplane-section" data-name="airplane">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/airplane-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>airplane</strong>
                      <p>How many km do you fly per year ?</p>
                      <div class="ex1">
                        <div id="sl_airplane"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 Km</div>
                      <div class="pull-right">50.000 Km</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_airplane_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>Km Year</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- airplane-section -->
        
            <section class="public-transport-section" data-name="public-transport">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/bus-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>public transport</strong>
                      <p>How much time do you spend in public transport every day?</p>
                      <div class="ex1">
                        <div id="sl_public-transport"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:240 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 min</div>
                      <div class="pull-right">240 min</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_public-transport_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>min day</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- public-transport-section -->
        
            <section class="walk-section green" data-name="walk">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/walk-bike.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>walk or bike</strong>
                      <p>How many km do you walk or bike per day?</p>
                      <div class="ex1">
                        <div id="sl_walk"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:240 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 min</div>
                      <div class="pull-right">240 min</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_walk_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>min day</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- walk-section -->
        
            <section class="electric-bike-section green" data-name="electric-bike">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/electric-bike.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>electric bike</strong>
                      <p>How much time do you bike every day?</p>
                      <div class="ex1">
                        <div id="electric-bike"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:240 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 min</div>
                      <div class="pull-right">240 min</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="electric-bike_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>min day</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- electric-bike-section -->
        
            <section class="electric-car-section green" data-name="electric-car">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/car-icon-green.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>electric car</strong>
                      <p>How many km do you drive per year?</p>
                      <div class="ex1">
                        <div id="electric-car"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 Km</div>
                      <div class="pull-right">50.000 Km</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="electric-car_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>km year</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- electric-car-section -->
          </div>
          
          <div role="tabpanel" class="tab-pane fade" id="home">
            <div class="jumbotron">
              <a href="#" class="reset btn btn-default pull-right">reset</a>
              <section class="total-home">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/home-icon.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my home</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="ex1">
                            <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                          </div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[home-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[home-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[home-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="mygreen-saving green">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/home-icon-green.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my home savings</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:25000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[home-green-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[home-green-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[home-green-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div><!-- display-values -->
                  </div>
                </div>
              </section><!-- airplane-section -->
            </div>
        
            <section class="electricity-section" data-name="electricity">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/electricidad-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>electricity</strong>
                      <p>How much do you pay for power each month?</p>
                      <div class="ex1">
                        <div id="sl_electricity"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:1000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">1.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_electricity_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- electricity-section -->
        
            <section class="heating-section" data-name="heating">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/calefaccion-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>heating</strong>
                      <p>How much do you pay for heating each month?</p>
                      <div class="ex1">
                        <div id="sl_heating"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:1000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">1.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_heating_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- heating-section -->
        
            <section class="mortgage-rent-section" data-name="mortgage-rent">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/home-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>mortgage / rent</strong>
                      <p>How much do you pay for rent/mortgage each month?</p>
                      <div class="ex1">
                        <div id="sl_mortgage-rent"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:5000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">5.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_mortgage-rent_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- mortgage-rent-section -->
        
            <section class="green-power green" data-name="green-power">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/green-power.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>green power</strong>
                      <p>How much do you pay for green power each month?</p>
                      <div class="ex1">
                        <div id="sl_green-power"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:240 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 min</div>
                      <div class="pull-right">240 min</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_green-power_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- green-power -->
        
            <section class="wood-solar-section green" data-name="wood-solar">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/wood-solar.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>wood & solar hot water</strong>
                      <p>How much energy do you get in a year?</p>
                      <div class="ex1">
                        <div id="wood-solar"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 kWh</div>
                      <div class="pull-right">50.000 kWh</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="wood-solar_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>kWh</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- wood-solar-section -->
        
            <section class="home-insulation-section green" data-name="home-insulation">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/home-insulation.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>home insulation</strong>
                      <p>How much heating costs do you save each month?</p>
                      <div class="ex1">
                        <div id="home-insulation"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:500 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">500 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="home-insulation_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- home-insulation-section -->
          </div>
          
          <div role="tabpanel" class="tab-pane fade" id="consume">
            <div class="jumbotron">
              <a href="#" class="reset btn btn-default pull-right">reset</a>
              <section class="total-consume">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/consume-icon.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my consume</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="ex1">
                            <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                          </div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[consume-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[consume-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[consume-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="mygreen-saving green">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/consume-icon-green.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my green consume</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:25000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[consume-green-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[consume-green-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[consume-green-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div><!-- display-values -->
                  </div>
                </div>
              </section><!-- airplane-section -->
            </div>
        
            <section class="food-section" data-name="food">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/food.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>food</strong>
                      <p>how much do you pay for food each week?</p>
                      <div class="ex1">
                        <div id="sl_food"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:1000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">1.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_food_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- food-section -->
        
            <section class="clothes-shoes-section" data-name="clothes-shoes">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/cloches-shoes.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>clothes & shoes</strong>
                      <p>how much do you pay for clothes & shoes each year?</p>
                      <div class="ex1">
                        <div id="sl_clothes-shoes"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:5000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">5.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_clothes-shoes_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- clothes-shoes-section -->
        
            <section class="paper-media-books-section" data-name="paper-media-books">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/paper-media.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>paper media & books</strong>
                      <p>How much do you pay for books & paper media per year?</p>
                      <div class="ex1">
                        <div id="sl_paper-media-books"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:5000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">5.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_paper-media-books_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- paper-media-books-section -->
        
            <section class="electronic-others-section" data-name="electronic-others">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/electronic-others.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>electronics & others</strong>
                      <p>How much do you pay for electronics per year?</p>
                      <div class="ex1">
                        <div id="sl_electronic-others"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:5000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">5.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_electronic-others_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- electronic-others -->
        
            <section class="regional-seasonal-food-section green" data-name="regional-seasonal-food">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/regional-seasonl.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>regional & seasonal food </strong>
                      <p>How much do you pay for food each week?</p>
                      <div class="ex1">
                        <div id="regional-seasonal-food"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:500 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">500 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="regional-seasonal-food_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>kWh</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- regional-seasonal-food-section -->
        
            <section class="organic-food-section green" data-name="organic-food">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/regional-food.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>organic food</strong>
                      <p>How much do you spend on organic food per month?</p>
                      <div class="ex1">
                        <div id="organic-food"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:500 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">500 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="organic-food_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- organic-food-section -->
        
            <section class="second-hand-stuff-section green" data-name="second-hand-stuff">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/second-hand.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>second hand stuff</strong>
                      <p>How much do you spend for second hand stuff per year?</p>
                      <div class="ex1">
                        <div id="second-hand-stuff"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:1000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">1.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="second-hand-stuff_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- second-hand-stuff-section -->
        
            <section class="ebooks-epapers-section green" data-name="ebooks-epapers">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/ebooks-epapers.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>ebooks & epapers</strong>
                      <p>How much time do you spend reading electronic papers & ebooks each day?</p>
                      <div class="ex1">
                        <div id="ebooks-epapers"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:240 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 min</div>
                      <div class="pull-right">240 min</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="ebooks-epapers_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- ebooks-epapers-section -->
          </div>
          
          <div role="tabpanel" class="tab-pane fade" id="social">
            <div class="jumbotron">
              <a href="#" class="reset btn btn-default pull-right">reset</a>
              <section class="total-social">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/social-icon.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my social</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="ex1">
                            <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:50000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                          </div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[social-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[social-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[social-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <section class="mygreen-saving green">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="row">
                      <div class="col-sm-2">
                        <img src="<?php echo COMPONENT_URL ?>assets/img/social-icon-green.png" class="icon-product" alt="">
                      </div>
                      <div class="col-sm-10">
                        <strong>my green social savings</strong>
                        <p>total CO2 per year.</p>
                        <div class="ex1">
                          <div class="sl_total_travel mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:25000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                        </div>
                        <div class="pull-left">0 Km</div>
                        <div class="pull-right">25 000 CO2/Kg</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-7 col-sm-offset-1">
                    <div class="display-values">
                      <div class="row">
                        <div class="col-sm-2">
                          <input class="totalResult1" type="number" min="0" name="data[social-green-co2]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon-green.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult2" type="number" min="0" name="data[social-green-kwh]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt="">
                        </div>
                        <div class="col-sm-2">
                          <input class="totalResult3" type="number" min="0" name="data[social-green-euro]" value="0" placeholder="" readonly>
                        </div>
                        <div class="col-sm-2">
                          <img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt="">
                        </div>
                      </div>
                    </div><!-- display-values -->
                  </div>
                </div>
              </section><!-- airplane-section -->
            </div>
        
            <section class="social-networks-internet-section" data-name="social-networks-internet">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/social-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>social networks & internet</strong>
                      <p>How much time do you spend for social media & internet each day?</p>
                      <div class="ex1">
                        <div id="sl_social-networks-internet"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:12 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 hr</div>
                      <div class="pull-right">12 hrs</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_social-networks-internet_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>hrs</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- social-networks-internet-section -->
        
            <section class="watch-tv-section" data-name="watch-tv">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/watch-tv-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>watch tv</strong>
                      <p>How much time do you watch TV each day? </p>
                      <div class="ex1">
                        <div id="sl_watch-tv"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:12 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 hr</div>
                      <div class="pull-right">12 hrs</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_watch-tv_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>hrs</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- watch-tv-section -->
        
            <section class="hang-out-section" data-name="hang-out">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/hangout-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>hang out with your friends</strong>
                      <p>How much time do hang out with friends per week? </p>
                      <div class="ex1">
                        <div id="sl_hang-out"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:60 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 hr</div>
                      <div class="pull-right">60 hrs</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_hang-out_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>hrs</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- hang-out-section -->
        
            <section class="cafes-restaurants-hotels-section" data-name="cafes-restaurants-hotels">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/cafes-restaurents-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>cafes, restaurants & hotels</strong>
                      <p>How much do you pay for restaurants & cafes per month?</p>
                      <div class="ex1">
                        <div id="sl_cafes-restaurants-hotels"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:1000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">1.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="sl_cafes-restaurants-hotels_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- cafes-restaurants-hotels -->
        
            <section class="birthday-parties-events-section" data-name="birthday-parties-events">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/birthday-parties-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>birthday, parties & events </strong>
                      <p>How much do you pay for parties this year?</p>
                      <div class="ex1">
                        <div id="birthday-parties-events"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:1000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">1000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="birthday-parties-events_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- birthday-parties-events-section -->
        
            <section class="cinema-section" data-name="cinema">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/cinema-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>cinema</strong>
                      <p>How much do you pay for cinemas each month?</p>
                      <div class="ex1">
                        <div id="cinema"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:1000 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 €</div>
                      <div class="pull-right">1.000 €</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="cinema_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>euros</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- cinema-section -->
        
            <section class="workout-sports-section" data-name="workout-sports">
              <div class="row">
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-sm-2">
                      <img src="<?php echo COMPONENT_URL ?>assets/img/workout-icon.png" class="icon-product" alt="">
                    </div>
                    <div class="col-sm-10">
                      <strong>work out & sports</strong>
                      <p>How much time do you work out per week?</p>
                      <div class="ex1">
                        <div id="workout-sports"  class="mb_slider {rangeColor:'#3498db',negativeColor:'#ffcc00',maxVal:60 ,startAt:0, grid:1}" style="display:inline-block;"></div>
                      </div>
                      <div class="pull-left">0 hr</div>
                      <div class="pull-right">60 hrs</div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8">
                  <div class="display-values">
                    <div class="row">
                      <div class="col-sm-2">
                        <span id="workout-sports_val" class="setVal"><input type="number" min="0" class="val" value="0" style="width:50px;"></span>
                      </div>
                      <div class="col-sm-1">
                        <h4>hrs</h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result1" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/footprint-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result2" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/energia-icon.png" alt=""></h4>
                      </div>
                      <div class="col-sm-2">
                        <input type="number" min="0" name="" value="0" placeholder="" class="result3" readonly>
                      </div>
                      <div class="col-sm-1">
                        <h4><img class="icon-product" src="<?php echo COMPONENT_URL ?>assets/img/offset-icon.png" alt=""></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section><!-- workout-sports-section -->
          </div>
        
        </div>
      </form>


      
    </div>
