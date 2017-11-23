<?php
    include_once('./header.inc.php');
    echo $message_flash;
?>

<form method="POST" class=" container center mb-5">
    <div class="form-group">
        <label for="mail">Email</label>
        <input type="text" class="form-control" name="mail" id="mail" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Connection</button>
</form>
