<?php include 'staffheader.php' ?>


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
	<h1  style="color: white">view sport</h1>
	<form>
		<table class="table" style="width: 500px">
			<tr>
				<th>sino</th>
			   <th>sport</th>
				<th>Details</th>
				<th>Date</th>
				
			
			

				
			</tr>
			<?php 

     $q="select * from sport  ";
     $res=select($q);
     $sino=1;

    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['sport'] ?></td>
    		<td><?php echo $row['details'] ?></td>
    		<td><?php echo $row['date'] ?></td>
    		
    		
    	<!-- 
    		
                    <td><a  class="btn btn-success" href="?did=<?php echo $row['sport_id'] ?>">Delete</a></td>
    		   <td><a class="btn btn-success" href="?uid=<?php echo $row['sport_id'] ?>">Update</a></td> -->

    
    	</tr>
    <?php }




			 ?>
		</table>
	</form>

</center>

            </div></div></div></div></div></div></div>
<?php include 'footer.php' ?>