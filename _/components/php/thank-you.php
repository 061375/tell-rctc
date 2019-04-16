<?php
define('PDIR','/Applications/MAMP/htdocs/tell-rctc/');
define('PURL','http://tellrctc.localhost');
ini_set('display_errors', 1); 
error_reporting(E_ALL);
/**
 * Tell RCTC Form 2016-?
 * By Geographics
 * For credits please see /humans.txt
 *
 * When developing use the URL: /_/components/php/index.php?dev=true
 *
                                                                                            
                                                                                            
                                   `.,,,,,,,,..`                                            
                            .,,,,,,,,,,,,,,,,,,,,,,,,,.                                     
                       `,,,,,,,,,,,,,,,,,.``        `.,,,,,`                                
                    .:,,,,,,,,,,,,,`                       `,,`                             
                 `,,,,,,,,,,,,,`                                ,`                          
               .,,,,,,,,,,,,`                                      `                        
             .:,,,,,,,,,,.                                                                  
           `,,,,,,,,,,,.                                                                    
          ,:,,,,,,,,,,                                                                      
        `,,,,,,,,,,,.                                                                       
       `,,,,,,,,,,:`                                                                        
      `:,,,,,,,,,,`                                                                         
     `,,,,,,,,,,:`                                                                          
     ,,,,,,,,,,,.                                                                           
    `:,,,,,,,,,,`                                                                           
    ,,,,,,,,,,,.                                                                            
   `,,,,,,,,,,:`                                                                            
   `,,,,,,,,,,:`                                                                            
   .,,,,,,,,,,,                                                                             
   .,,,,,,,,,,:`                         ```````````.............,,,,,,,,,,,,,:`            
   .,,,,,,,,,,:`                         ```````````..............,,,,,,,,,,,,:`            
   `,,,,,,,,,,:.                          ````````````````...............,,,,,,`            
   `,,,,,,,,,,,,`                                                                           
    ,,,,,,,,,,,:.                                                                           
    `:,,,,,,,,,,:`                                                           `              
     .,,,,,,,,,,,,`                                                         ``              
      ,,,,,,,,,,,,:`                                                       `.               
      `,,,,,,,,,,,,,`                                                     `,                
       `,,,,,,,,,,,,,,                                                   .,                 
         ,,,,,,,,,,,,,:.                                               `:.                  
          .:,,,,,,,,,,,,:.                                           `,,`                   
           `,,,,,,,,,,,,,,,,`                                      ,,,,                     
             `,,,,,,,,,,,,,,,,,`                                .,,,,`                      
               `,,,,,,,,,,,,,,,,,,,`                       `.,,,,,,`                        
                  ,:,,,,,,,,,,,,,,,,,,,,,.``        `.,,,,,,,,,,.                           
                    `,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,                              
                        .:,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,`                                 
                             .,:,,,,,,,,,,,,,,,,,,,,,.                                      
                                     ```...```                                              
                                                                                            
                                                                                            
                                                                                            
                   ```...,,,::::::::::::::::::::::::::::,,,..```                            
           ,::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::`                   
               ``.,,,,,::::::::::::::::::::::::::::::::::::::,,,,..`                        
                                                                                                    
                                                                                                    
     
 *
 * */
?>
<!DOCTYPE html>
<html >
  <head>
    <title>Thank You for Submitting - Freeway Service Patrol for Riverside County</title>
    <?php
    // make sure search engines don't compile this file or index it
    if(!isset($_POST['chgfysfuygf54fg'])) {
    $whitelist = array('::1','127.0.0.1');
    
    if(!isset($_SERVER['REMOTE_ADDR']))die('<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">');
    if(!in_array($_SERVER['REMOTE_ADDR'],$whitelist))die('<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">');
    }
    ?>
    <?php include('head.php'); ?>
  </head>
  <body itemscope itemtype="https://schema.org/WebPage">
    <div class="container">
        <img src="/_/assets/TellRCTC_thankyou.jpg?u=<?php echo date('is',strtotime('now')); ?>" alt="Thank You for Submitting from RCTC" class="thank-you" usemap="#thanks" />
        <map name="thanks">
          <area shape="rect" coords="0,250,250,300" target="_blank" rel="noopener" href="http://rebootmycommute.org" alt="#rebootmy commute">
          <area shape="rect" coords="530,280,850,320" target="_blank" rel="noopener" href="http://rebootmycommute.org" alt="rebootmycommute.org">
          <area shape="rect" coords="230,500,440,560" target="_blank" rel="noopener" href="http://rctc.org" alt="rctc.org">
          <area shape="rect" coords="460,500,760,560" target="_blank" rel="noopener" href="http://rebootmycommute.org" alt="rebootmycommute.org">
        </map>  
    </div>
    <!-- SCHEMA -->
    <?php include('schema.org.php'); ?>
    <?php
    /**
     * This script allows Grunt to auto reload the page during development
     * The $_SERVER call is so I could work on the site on my local servr at home
     *
     * - Jeremy
     * */
    ?>
    <script src="http://localhost:35729/livereload.js"></script>
    <!-- All the javascript should be called from this one minified script - use Grunt -->
  </body>
</html>
<?php
// This makes a cURL request to itself and grabs the exported HTML
// The script then minifies the HTML and puts it into the root index.html file
// between this and server-side compression this website should be uber-fast
include('compress.php');
?>