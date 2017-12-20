<?php

if($this->session->flashdata('upload_error'))
{
	echo  $this->session->flashdata('upload_error');
}

?>