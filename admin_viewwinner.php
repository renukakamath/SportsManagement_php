<?php include 'adminheader.php';

extract($_GET);




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
	<h1 style="color: white"> view Winner</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
			

			  
			   <th>file</th>
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
    		
    		<td><img src="<?php echo $row['file'] ?>" width="100"  height="100"></td>
    		
    		<td><?php echo $row['date'] ?></td>
    		<td><?php echo $row['status'] ?></td>
    	
    		
    			<!-- <?php 

            if ($row['status']=="pending") {?>


            	<td><a href="?aid=<?php echo $row['book_id'] ?>">Accept</a></td>
            	
       
           	<td><a href="?rid=<?php echo $row['book_id'] ?>">Reject</a></td>

         <?php  }
    			 ?> -->
    			
    			
                  
    	</tr>
    <?php }




			 ?>
		</table>
	</form>
</center>

</div></div></div></div></div></div></div>


<?php include 'footer.php' ?>