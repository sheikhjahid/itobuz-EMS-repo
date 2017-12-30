<?php require_once 'layout/header.php'; ?>
<div class="col-md-10">          
  <div class="content-box-large">         
    <div class="panel-body">
      <div class="container">
        <div class="form-container" style="border:groove 2.5px;">
          <?php 
          if($this->session->flashdata('leave_msg'))
          {
            ?>
            <div class="alert alert-warning alert-dismissible fade in" role="alert" id="message" style="background-color:orange">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
              <?php echo $this->session->flashdata('leave_msg'); ?>
            </div>
            <?php
          }
          ?>
          <h1>Leave Application</h1>
          <form method="post" action="<?php echo base_url('user/insertLeaveData'); ?>">
            <label for="start_date" >Start Date:</label> 
            <input type="datetime-local" name="start_date" placeholder="Enter the date to start your leave.. " style="border-radius:3%;border:1px groove grey; padding:8px 8px 8px 8px " required>
            <label for="end_date">End Date:</label> 
            <input type="datetime-local" name="end_date" placeholder="Enter the date to end your leave.. " style="border-radius:3%;border:1px groove grey; padding:8px 8px 8px 8px " required>
            <label for="Type of Leave">Select Type of Leave</label>
            <select name="leave_id" style=" border:none;background-color:grey"  required>
              <option value="0">Nothing Selected</option> 
              <?php foreach($value as $leave) { ?>
              <option value="<?php echo $leave->id; ?>">
                <?php echo $leave->type; } ?>
              </option>
            </select>
            <label for="name">Comments:</label>
            <textarea id="comments" name="comments" rows="10" maxlength="6000" placeholder="Provide reason for your leave here.." required></textarea>
            <input type="submit"  value="Request" style="border:none;background-color:skyblue;width:116px;position:absolute;left:40%">
          </form>
        </div>
      </div>
      <!--end  of leave code-->
    </div>
  </div>
</div>
<?php require_once 'layout/footer.php'; ?>