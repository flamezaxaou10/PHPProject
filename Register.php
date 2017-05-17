<?php include 'header.php' ?>
<div class="container">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input  name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="Username" type="text" class="validate">
          <label for="Username">Username</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="Con-password" type="password" class="validate">
          <label for="Confirm-password">Confirm-password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>

      </div>
      <div class="row center-align">
        <button class="btn waves-effect waves-light #01579b light-blue darken-4" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
        </button>
        <button class="btn waves-effect waves-light #b71c1c red darken-4" type="reset" name="action">Submit
                <i class="material-icons right">settings_backup_restore</i>
        </button>
      </div>
    </form>
  </div>
