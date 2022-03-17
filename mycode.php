                <form class="user row" method="post">
                  <div class ="col-md-6">
                      <select class="form-control" name="semister">
                      <option >Choose semister</option>
                        <option class="bg-gradient-success" value="T1">Semister 1</option>
                        <option class="bg-gradient-info"value="T2">Semister 2</option>
                        
                      </select>
                      </div>
                      <div class ="col-md-6">
                      <select class="form-control" name="period">
                      <option>Choose type</option>
                        <option class="bg-gradient-success" value="T1">Test 1</option>
                        <option class="bg-gradient-info"value="T2">Test 2</option>
                        <option class="bg-gradient-success"value="F">Final</option>
                      </select>
                      </div>
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Generate" name="generate">
                      
                      
                      </form>

<?php
$leve = explode(' ', "level 4");
echo end($leve);
echo $leve[1];
?>






                                      <form class="user " method="POST" action="" >
                  <div class ="form-group">
                      <select class="form-control" name="semister">
                      <option >Choose semister</option>
                        <option class="bg-gradient-success" value="1">Semister 1</option>
                        <option class="bg-gradient-info"value="0">Semister 2</option>
                        
                      </select>
                      </div>
                      <div class ="form-group">
                      <select class="form-control" name="period">
                      <option>Choose type</option>
                        <option class="bg-gradient-success" value="T1">Test 1</option>
                        <option class="bg-gradient-info"value="T2">Test 2</option>
                        <option class="bg-gradient-success"value="T3">Final</option>
                      </select>
                      </div>
                      <input type="submit" class="btn btn-primary btn-user btn-block" value="Generate" name="generate">
                      </form>