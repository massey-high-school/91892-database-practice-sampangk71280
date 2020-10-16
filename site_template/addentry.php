     <?php include("topbit.php");

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
    echo "You pushed the button";
    
    
} // end of button submitted code

?>

        <div class="box main">
            <div class="add-entry">
            <h2>Add an Entry</h2>
                
            <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF ']); ?>">
                
            <!-- App Name (Required) -->
            <input class="add-field" type="text" name="app_name" value="<?php echo $app_name; ?>" required placeholder="App Name (required) ..."/>
                
            <!-- Subtitle (optional) -->
                
            <!-- URL (required, must start http://) -->    
            
            <!-- Genre dropdown (required) -->
                
            <!-- Developer Name (required) --> 
                
            <!-- Age (set to 0 if left blank) -->
                
            <!-- Rating (Number between 0-5, 1 dp) -->
            
            <!-- # of rating (integer more than 0) -->
                
            <!-- Cost (Decimal 2dp, must be more than 0)-->
                
            <!-- In App Purchase radio buttons  -->
                
            <!-- Description text area -->
                
            <!-- Submit button -->
            <p>
                <input class="submit advanced-button" type="submit"
                name="advanced" value="Search &nbsp; &#xf002;" />    
            </p>    
            
                
            </form>    

            </div> <!-- / add-entry -->
        </div> <!-- / main -->
        
    <?php include("bottombit.php") ?>