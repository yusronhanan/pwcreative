<div class="row">
                      <p class="birth"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="day" name="day">
                          <option value="" disabled selected>Day</option>
                          <?php 
                          for($i = 1; $i <31; $i++){
                           ?>
                          <option value="<?php echo $i ?>"><?php echo $i ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select class="form-control" id="month" name="month">
                          <option value="" disabled selected>Month</option>
                          <?php
                          $month = ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Aug","Sept","Oct","Nov","Dec"];
                          $val_month = ["01","02","03","04","05","06","07","08","09","10","11","12"];
                          for($i = 0; $i < count($month); $i++){
                           ?>
                          <option value="<?php echo $val_month[$i] ?>"><?php echo $month[$i] ?></option>
                          <?php } ?>

                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select class="form-control" id="year" name="year">
                          <option value="" disabled selected>Year</option>
	                    <?php
                          $yearnow = (int)date("Y");
                          $yearmax = $yearnow - 3;
                          $yearmin = $yearmax - 100;	
                          for($i = $yearmax; $i > $yearmin; $i--){
                           ?>
                          <option value="<?php echo $i ?>"><?php echo $i ?></option>
                          <?php } ?>
	                    </select>
                      </div>
                    </div>