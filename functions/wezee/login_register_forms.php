 
<?php Class main_forms {


public function insert_login_form(){

return '
<form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control w-height-50px" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control w-height-50px" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary w_btn-primary btn-block  w-height-50px">login</button>
  </form>
  ';


}

public function insert_registration_form(){


return '
<form>


    <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control w-height-50px" id="name" placeholder="Enter your name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control w-height-50px" id="email" placeholder="Enter email">
    </div>
    

    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="number" class="form-control w-height-50px" id="mobile" placeholder="Enter Mobile Number">
    </div>
    
      
      
    <div class="form-group">
      <label for="dob">DOB:</label>
      <input type="text" class="form-control w-height-50px" id="dob" placeholder="Enter DOB">
    </div>
    
          
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control w-height-50px" id="pwd" placeholder="Enter password">
    </div>
    
    <div class="form-group">
      <label for="pwd1">Password:</label>
      <input type="password" class="form-control w-height-50px" id="pwd1" placeholder="Confirm password">
    </div>
    
    
    <div class="checkbox">
      <label><input type="checkbox" name="student" checked> Are you a student?</label>
    </div>
    
    
    <button type="submit" class="btn btn-primary w_btn-primary btn-block  w-height-50px">Register Now</button>
  </form>
  ';
}


}
?>
