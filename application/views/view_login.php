<!DOCTYPE html>
<html>

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <!-- Icon -->
    <div class="fadeIn first">
    <img src="<?php echo base_url()?>assets/img/logo_gorden111.png" alt="Klorofil Logo" > 
    </div>

    <!-- Login Form -->
    <form action="<?php echo base_url() ?>login/masuk?>" method="post">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div></html>