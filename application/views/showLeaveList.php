<?php require_once 'layout/header.php'; ?>
<div class="col-md-10">          
  <div class="content-box-large">         
    <div class="panel-body">
      <div class="container"  style="width:100%">
        <!--leave list code here-->
        <!-- Nav tabs -->
        <left><label style="font-size:27px"> Leave List </label></left>
        <right><label style="font-size:15px;position:absolute;right:5%">DATE : <?php $date=date('d/m/Y'); echo $date; ?></label></right>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
            <a href="#all_list" aria-controls="home" role="tab" data-toggle="tab">All List
            </a>
          </li>
          <li role="presentation">
            <a href="#approved" aria-controls="profile" role="tab" data-toggle="tab">Approved
            </a>
          </li>
          <li role="presentation">
            <a href="#rejected" aria-controls="settings" role="tab" data-toggle="tab">Rejected
            </a>
          </li>
          <li role="presentation">
            <a href="#expired" aria-controls="settings" role="tab" data-toggle="tab">Expired</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" >
         <?php if($this->session->flashdata('accept_msg')){ ?>
         <div class="alert alert-warning alert-dismissible fade in" role="alert"> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button><?php echo $this->session->flashdata('accept_msg'); ?>
        </div>
        <?php
      }
      ?>

      <?php if($this->session->flashdata('reject_msg')){ ?>
      <div class="alert alert-warning alert-dismissible fade in" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button><?php echo $this->session->flashdata('reject_msg'); ?>
    </div>
    <?php
  }
  ?>
  <?php if($this->session->flashdata('delay_msg')) { ?>                
  <div class="alert alert-warning alert-dismissible fade in" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button><?php echo $this->session->flashdata('delay_msg'); ?>
</div>
<?php
}
?>
<div role="tabpanel" class="tab-pane active" id="all_list">

  <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>LEAVE-TYPE</th>
        <th>START DATE</th>
        <th>END DATE</th>
        <th>APPLIED DATE</th>
        <th>COMMENTS</th>
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach($allleaves as $value) 
      {  
        ?>
        <tr>
          <td><?php echo $value->id; ?></td>
          <td><?php echo $value->user_name; ?></td>
          <td><?php echo $value->leave_name; ?></td>
          <td><?php echo date('Y-m-d',strtotime($value->start_date)); ?></td>
          <td><?php echo date('Y-m-d',strtotime($value->end_date)); ?></td>
          <td><?php echo date('Y-m-d',strtotime($value->apply_date)); ?></td>
          <td><?php echo ucwords($value->comments); ?></td>

          <td>
            <a href="<?php echo base_url('user/acceptLeave/').$value->id; ?>">
              <i class="fa fa-check-square-o" aria-hidden="true"> Accept</i>
            </a>
            <a href="<?php echo base_url('user/rejectLeave/').$value->id; ?>">
              <i class="fa fa-window-close" aria-hidden="true"> Reject</i>
            </a>
          </td>
        </tr>

        <?php } ?>    

      </tbody>
    </table>


  </div>
  <div role="tabpanel" class="tab-pane" id="approved">Approved List

    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

      <thead>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>LEAVE-TYPE</th>
          <th>START DATE</th>
          <th>END DATE</th>
          <th>APPLIED DATE</th>
          <th>COMMENTS</th>
          <th>ACTION</th> 
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach($approvedleaves as $value) 
        {  
          ?>
          <tr>
            <td><?php echo $value->id; ?></td>
            <td><?php echo $value->user_name; ?></td>
            <td><?php echo $value->leave_name; ?></td>
            <td><?php echo date('Y-m-d',strtotime($value->start_date)); ?></td>
            <td><?php echo date('Y-m-d',strtotime($value->end_date)); ?></td>
            <td><?php echo date('Y-m-d',strtotime($value->apply_date)); ?></td>
            <td><?php echo ucwords($value->comments); ?></td>
            <td>
              <a href="<?php echo base_url('user/rejectLeave/').$value->id; ?>">
                <i class="fa fa-window-close" aria-hidden="true"> Reject</i>
              </a>
            </td>
            
          </tr>

          <?php } ?>    

        </tbody>
      </table>

    </div>
    <div role="tabpanel" class="tab-pane" id="rejected">Rejected List

      <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

        <thead>
          <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LEAVE-TYPE</th>
            <th>START DATE</th>
            <th>END DATE</th>
            <th>APPLIED DATE</th>
            <th>COMMENTS</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          foreach($rejectedleaves as $value) 
          {  
            ?>
            <tr>
              <td><?php echo $value->id; ?></td>
              <td><?php echo $value->user_name; ?></td>
              <td><?php echo $value->leave_name; ?></td>
              <td><?php echo date('Y-m-d',strtotime($value->start_date)); ?></td>
              <td><?php echo date('Y-m-d',strtotime($value->end_date)); ?></td>
              <td><?php echo date('Y-m-d',strtotime($value->apply_date)); ?></td>
              <td><?php echo ucwords($value->comments); ?></td>
              
            </tr>

            <?php } ?>    

          </tbody>
        </table>

      </div>
      <div role="tabpanel" class="tab-pane" id="expired">
        
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">

          <thead>
            <tr>
              <th>ID</th>
              <th>NAME</th>
              <th>LEAVE-TYPE</th>
              <th>START DATE</th>
              <th>END DATE</th>
              <th>APPLIED DATE</th>
              <th>COMMENTS</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach($expired as $value) 
            {  
              ?>
              <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->user_name; ?></td>
                <td><?php echo $value->leave_name; ?></td>
                <td><?php echo date('Y-m-d',strtotime($value->start_date)); ?></td>
                <td><?php echo date('Y-m-d',strtotime($value->end_date)); ?></td>
                <td><?php echo date('Y-m-d',strtotime($value->apply_date)); ?></td>
                <td><?php echo ucwords($value->comments); ?></td>
                
              </tr>

              <?php } ?>    

            </tbody>
          </table>

        </div>
      </div>

      <!--end of leave list code here-->
    </div>
  </div>
</div>
</div>
<?php require_once 'layout/footer.php'; ?>