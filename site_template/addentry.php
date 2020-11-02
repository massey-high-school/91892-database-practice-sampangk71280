     <?php include("topbit.php");

// Get Genre list from database
$genre_sql="SELECT *
FROM `L2_DB_Prac_genre`
ORDER BY `L2_DB_Prac_genre`.`Genre` DESC"
$genre_query=mysqli_query($dbconnect, $genre_sql);
$genre_rs=mysqli_fetch_assoc($genre_query); 

// Initialise from variables 

$app_name = "";
$subtitle = "";
$url = "";
$genreID = "";
$dev_name = "";
$age = "";
$rating = "";
$rate_count = "";
$cost = "";
$inapp = 1;
$description = "";

$has_errors = "no";

// Code below executes when the form is submitted...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "You pushed the button ";
    
    
} // end of button submitted code

?>

        <div class="box main">
            <div class="add-entry">
            <h2>Add an Entry</h2>
                
            <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                
            <!-- App Name (Required) -->
            <input class="add-field" type="text" name="app_name" value="<?php echo $app_name; ?>" required placeholder="App Name (required) ..."/>
                
            <!-- Subtitle (optional) -->
            <input class="add-field" type="text" name="subtitle" size="40"
            value="<?php echo $subtitle; ?>" placeholder="Subtitle (optional)..."/>
                
            <!-- URL (required, must start http://) -->    
            <input class="add-field <?php echo $url_field; ?>" type="text"
            name="url" size="40" value="<?php echo $url; ?>" placeholder="URL (required)"/>
                
            <!-- Genre dropdown (required) -->
            <select class="adv" name="genre">
                <option value="" disabled selected> Genre (Choose something)... </option>
                
                <!-- get options from database -->
                <?php
                
                do {
                    ?>
                <option value="<?php echo $genre_rs['GenreID']; ?>"><?php echo $genre_rs['Genre']; ?></option>
                
                <?php
                } // end genre do loop
                while ($genre_rs=mysqli_fetch_assoc($genre_query))
                ?>
                
            </select>    
                
            <!-- Developer Name (required) --> 
            <input class="add-field <?php echo $dev_field ?>" type="text"
            name="dev_name" value="<?php echo $dev_name; ?>" size="40"
            placeholder="Developer Name (required)..."/>
                
            <!-- Age (set to 0 if left blank) -->
            <input class="add-field" type="text" name="age" value="<?php echo $age; ?>"
            placeholder="Age (0 for all)"/>
                 
            <!-- Rating (Number between 0-5, 1 dp) -->
            <div>
                <input class="add-field" type="number" name="rating" value="<?php echo $rating ?>" required step = "0.1" min=0 max=5 placeholder="Rating (0-5)" />  
            </div>
                
            <!-- # of rating (integer more than 0) -->
            <input class="add-field" type="text" name="count" value="<?php echo $rate_count; ?>" placeholder="# of Ratings"/>
                
            <!-- Cost (Decimal 2dp, must be more than 0)-->
            <input class="add-field" type="text" name="price" value="<?php echo $cost; ?>" placeholder="Cost (number only)"/>
                
            <!-- In App Purchase radio buttons  -->
                
            <!-- Description text area -->
                
            <!-- Submit button -->
            <p>
                <input class="submit advanced-button" type="submit"
                    value="Submit"/>    
            </p>    
            
                
            </form>    

            </div> <!-- / add-entry -->
        </div> <!-- / main -->
        
    <?php include("bottombit.php") ?>