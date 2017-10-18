<?php $this->load->view('header'); ?>
  
<div class="container">
  <h3>This is login Page</h3>
</div>

<?php  
  echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
 ?> 

<div>

<form action="<?php echo base_url('home/login_validation');?>" method="post">

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">username:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
    </div>
  </div>



  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>

<?php $this->load->view('footer'); ?>