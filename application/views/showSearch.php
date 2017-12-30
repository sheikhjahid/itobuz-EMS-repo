<?php 
        require_once 'layout/header.php';
?>
<div class="col-md-10">

    <div class="content-box-large">

        <div class="panel-body">

            <div class="container">
                
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                        foreach($row as $r) 
                        {
                            ?>           
                            <div class="col-md-6">
                            </br>
                            <!--  <?php //foreach($user_image as $value){ ?> -->
                            <left><a href="<?php echo base_url('user/profile/').$r->id; ?>"><img src="<?php echo base_url('public/pics/').$r->image_path; ?>" style="width:100px;position:absolute;left:57%;top:7%;border-radius:20%"></a>

                                <div><b>FULLNAME : <?php echo $r->fullname; ?></b></div>
                                <div><b>PHONE : <?php echo $r->phone; ?></b></div>
                                <div><b>ADDRESS : <?php echo $r->address; ?></b></div>
                                <div><b>EMAIL : <?php echo $r->email; ?></b></div>
                                <div><b><a href="<?php echo base_url('user/profile/').$r->id;?>">View Details</a></b></div>
                            </div>
                            <?php 
                        } 
                        ?>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php 
        require_once 'layout/footer.php';
    
?>
            