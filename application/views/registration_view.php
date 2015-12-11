<?php echo validation_errors(); ?>
<?php echo form_open('user/register'); ?>
<fieldset>
    <label>Name</label>
    <input type="text" name="name" maxlength="25" />
    <label>Surname</label>
    <input type="text" name="surname" maxlength="25"/>
    <label>E-mail</label>
    <input type="text" name="email" maxlength="30"/>
    <lable>Password</lable>
    <input type="text" name="password" maxlength="40"/>
    <input type="submit" value="Submit" />
</fieldset>
<?php echo form_close(); ?>