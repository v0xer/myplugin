<div class="wrap">
<h1>تنظیمات پلاگین</h1>
<h2>تنظیمات پلاگین</h2>
<form action="" method="post">
<label for="email">
<input type="text" name="email" value= "<?php echo empty($email_input1) ==1 ? '' : $email_input1; ?>"> <br>
</label>
<label for="radio">radio1
    <input type="radio" value="radio1" name="radio" <?php  if ($radio_button=='radio1'){ echo 'checked';} ?> ><br>
    
    </label>
    <label for="radio">radio2
    <input type="radio" value="radio2" name="radio"  <?php  if ($radio_button=='radio2'){ echo 'checked';} ?>  ><br>
    
    </label>
    <label for="radio">radio3
    <input type="radio" value="radio3" name="radio"  <?php  if ($radio_button=='radio3'){ echo 'checked';} ?> ><br>
    
</label>

<input type="submit" name="saveSetting"><br>

</form>


</div>