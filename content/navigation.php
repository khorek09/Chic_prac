	<div class="navigation">
		
		<?php
        $cat_sql="SELECT * FROM `l3_prac_chic_category`";
        $cat_query=mysqli_query($dbconnect,$cat_sql);
        $cat_rs=mysqli_fetch_assoc($cat_query);
        
        do{?>
        
        <a class="navigation" href="index.php?page=category&categoryID=<?php echo $cat_rs['categoryID'];?>">
            
            <?php echo $cat_rs['catName'];?></a>|
        <?php
            
        }
        
        while($cat_rs=mysqli_fetch_assoc($cat_query))
        
        ?>
					
		<a class="nav" href="admin/admin.php?page=login">Admin</a>
        
		
	</div>	<!-- end navigation -->