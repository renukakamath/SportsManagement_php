<?php include 'staffheader.php';
extract($_GET);


if (isset($_POST['cusreg'])) {
	extract($_POST);




$dir = "images/";
	$file = basename($_FILES['imgg']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['imgg']['tmp_name'], $target))
	{
		
	
    
  echo$q1="insert into upload_winner values(null,'$pid','$target',curdate(),'pending') ";
   insert($q1);
   alert('sucessfully');
   return redirect("staff_uploadwinner.php?pid=$pid");

 } else
		{
			echo "file uploading error occured";
		}


}


?>


<div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
              
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <!-- First slide -->
                  <div class="item active deepskyblue" data-ride="carousel" data-interval="5000"  style="height: auto">
                     <div class="carousel-caption">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="slider-contant" data-animation="animated fadeInRight"> 


<center>
<h1  style="color: white"> Upload Winner</h1>
<form method="post" style="" class="ppp"   enctype="multipart/form-data">
	<table class="table" style="width:500px;color: white">


	
		<tr>
			<th>file</th>
			<td><input type="file" required="" class="form-control"    name="imgg"></td>
		</tr>
		
		
		<td align="center" colspan="2"><input type="submit" name="cusreg" value="submit" class="btn btn-success"></td>
	</table>
</form>
</center>



   </div></div></div></div></div></div></div>

						
<center>
	<h1 style="color: black"> view Winner</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
			

			   <th>File</th>
			 
				<th> date</th>
				
				<th> Status</th>
				
			</tr>
			<?php 

     $q="SELECT * FROM `upload_winner`  WHERE participant_id='$pid'";
     $res=select($q);
     $sino=1;

    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><img src="<?php echo $row['file'] ?>"  width="100" height="100"></td>
    		
    		<td><?php echo $row['date'] ?></td>
    		<td><?php echo $row['status'] ?></td>

  
            



    	
    
    			
    			
                  
    	</tr>
    <?php }




			 ?>
		</table>
	</form>
</center>


<?php include 'footer.php' ?>