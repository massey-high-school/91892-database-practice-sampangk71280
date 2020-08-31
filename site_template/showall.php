     <?php include("topbit.php");

        $find_sql = "SELECT *
        FROM `L2_DB_Prac_game_details`
        JOIN L2_DB_Prac_genre ON (L2_DB_Prac_game_details.GenreID = L2_DB_Prac_genre.GenreID)
        JOIN L2_DB_Prac_developer ON (L2_DB_Prac_game_details.DeveloperID = L2_DB_Prac_developer.DeveloperID)



        ";
        $find_query = mysqli_query($dbconnect, $find_sql);
        $find_rs = mysqli_fetch_assoc($find_query);
        $count = mysqli_num_rows($find_query);

?>

        <div class="box main">
            <h2>All Results</h2>
            
            
            <?php
            
            if($count <1 ) {
                
                ?>
            
            <div class="error">
            
                Sorry! There are no results that match your search.
                Please use the search box int he side bar to try again.
            
            </div>      <!-- end error -->
            
            <?php 
            } // end no results if
            
            else {
                do
                {
                    ?>
            
            <!-- Results go here -->
            <div class="results">
                
                <!-- Heading and subtitle -->
                
                <div class="flex-container">
                    <div>
                        <span class="sub_heading">
                            <a href="<?php echo $find_rs['URL']; ?>">
                            <?php echo $find_rs['Name']; ?>
                            </a>
                        </span>
                    </div> <!-- / Title -->
                
                    <?php
                        if($find_rs['Subtitle'] != "")
                        
                        {
                        
                        ?>
                    
                    <div>
                        &nbsp;&nbsp| &nbsp;&nbsp;
                        <?php echo $find_rs['Subtitle'] ?> 
                        
                    </div> <!-- / subtitle -->
                    
                    
                    <?php
                            
                        }
                    
                    ?>
                    
                    
                </div>
                <!-- / Heading and subtitle -->
                
                <!-- Ratings Area-->
                
                <div class="flex-container">
                
                        <!-- Partial Stars Original Source:
                        https://codepen.io/Bluetidepro/pen/GkpEa -->
                        <div class="star-rating-sprite">
                            <span style="width:52%" class="images/star-ratings-sprite-rating"></span>
                    
                        </div> <!-- / star rating div -->
                    
                        <div 0class="actual-rating">
                            (<?php echo $find_rs['User Rating'] ?> rating based on <?php echo number_format ($find_rs['Rating Count']) ?> ratings)
                        </div> <!-- / text rating div -->
                    
                    

                </div> <!-- / ratings flexbox -->
                
                <!-- / Ratings Area -->
                
                <!-- Price -->
                
                <?php 
                    
                    if($find_rs['Price'] == 0 ){
                        ?>
                
                    <p>
                        Free 
                        <?php 
                            if ($find_rs['In App'] == 1) 
                            {
                                ?>
                                    (In App Purchase)
                                <?php
                                
                                
                            } // end In App if
                        ?>
                        
                
                    </p>
                
                    <?php
                    } // end price if
                    
                    else {
                        
                        ?>
                    <b>Price</b>: $<?php echo $find_rs['Price'] ?>
                
                    <?php
                        
                    } // end price else (displays cist)
                    
                ?>
                
            </div> <!-- / results -->
            
            <br />
        
            <?php
                    
                    
                } // end results 'do'
                
            
                while
                    ($find_rs=mysqli_fetch_assoc($find_query));
                
            } // end else
                     
            ?>
            

            
        </div> <!-- / main -->
        
    <?php include("bottombit.php") ?>