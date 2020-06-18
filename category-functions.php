<?php
    function Display_Categories() {
        include("connect.php");
        $select = mysqli_query($mysqli, "SELECT * FROM categories");
		
		while ($row = mysqli_fetch_assoc($select)) {
			echo "<table class='category-table'>";
			echo "<tr><td class='main-category' colspan='2'>".$row['category_title']."</td></tr>";
			Display_Subcategories($row['cat_id']);
			echo "</table>";
		}
    }    

	function Display_Subcategories($parent_id) {
        include("connect.php");
		$select = mysqli_query($con, "SELECT cat_id, subcat_id, subcategory_title, subcategory_desc FROM categories, subcategories 
                                      WHERE ($parent_id = categories.cat_id) AND ($parent_id = subcategories.parent_id)");
                                      
		echo "<tr><th width='90%'>Categories</th><th width='10%'>Topics</th></tr>";
		while ($row = mysqli_fetch_assoc($select)) {
			echo "<tr><td class='category_title'><a href='/forum-tutorial/topics/".$row['cat_id']."/".$row['subcat_id']."'>".$row['subcategory_title']."<br />";
			echo $row['subcategory_desc']."</a></td>";
			echo "<td class='num-topics'>".Topics_Count($parent_id, $row['subcat_id'])."</td></tr>";
		}
    }
    
    function Topics_Count($cat_id, $subcat_id) {
		include("connect.php");
		$select = mysqli_query($con, "SELECT category_id, subcategory_id FROM topics WHERE ".$cat_id." = category_id 
									  AND ".$subcat_id." = subcategory_id");
		return mysqli_num_rows($select);
	}

?>