<?php

namespace RefrigeratorView;

class RefrigeratorView
{

   public function Dom($out = array())
   {
      ?>

      <link rel="stylesheet" href="Views/css/mine.css">
      <link rel="stylesheet" href="Views/css/app.css">
      <link rel="stylesheet" href="Views/datepicker/jquery-ui.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="Views/js/mine.js"></script>
      <script src="Views/datepicker/jquery-ui.js"></script>

      <div class="form">
      <h4>Add new record (or Update <b>selected from list</b> record)</h4>
      <form name="form_refrigerator" class="form_refrigerator">
      name <input type="text" name="name_title" class="name_title" placeholder="not empty" />
      date of buy <input type="text" name="buy_date" class="buy_date" placeholder="yyyy-mm-dd" />
      date of make <input type="text" name="make_date" class="make_date" placeholder="yyyy-mm-dd" />
      date of limit <input type="text" name="limit_date" class="limit_date" placeholder="yyyy-mm-dd" />
      <button type="button" id="" class="button_add" name="add">Enter</button>
      </form>
      <span class="title_error">&nbsp;</span>
      </div>
      <hr>
      <div class="content">
      <h4>List records (with function updating and removing)</h4>
      <div class="table">
      <div class="table_row title_table center">
      <div class="table_cell">
      name
      </div>
      <div class="table_cell">
      date of buy
      </div>
      <div class="table_cell">
      date of make
      </div>
      <div class="table_cell">
      date of limit
      </div>
      <div class="table_cell color">
      update/remove
      </div>
      </div>
      <?php
      if(is_array($out))
      {
         foreach($out as $key1 => $out1)
         {
            if($out1['limitonnow'] < 0){$colorMarker = 'red';}
            else if($out1['limitonnow'] == 0){$colorMarker = 'orange';}
            else {$colorMarker = 'green';}
            ?>
            <div class="table_row <?php echo $colorMarker; ?>" id="row<?php echo $out1['id']; ?>">
            <div class="table_cell"><?php echo $out1['name']; ?></div>
            <div class="table_cell"><?php echo $out1['datebuy']; ?></div>
            <div class="table_cell"><?php echo $out1['datemake']; ?></div>
            <div class="table_cell"><?php echo $out1['datelimit']; ?></div>
            <div class="table_cell center">
            <button type="button" id="<?php echo $out1['id']; ?>" class="button_update" name="update">update</button>
            <button type="button" id="<?php echo $out1['id']; ?>" class="button_remove">remove</button>
            </div>
            </div>
            <?php
         }
      }
      ?>
      </div>
      </div>
      <?php
   }

}

?>