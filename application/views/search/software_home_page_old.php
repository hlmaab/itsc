<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html class="js js no-touch csstransforms3d csstransitions js no-touch csstransforms3d csstransitions webkit chrome mac js sticky-header-enabled" lang="en" dir="ltr" style="">
    <!--<![endif]-->
    <head>
            <!-- Newly added javascript for homepage @Alice -->
            <script src="<?php echo base_url('assets/js/software_home_page.js');?>"></script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            
            <!-- from boostrap -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            
            <!-- Newly added CSS for homepage @Alice -->
            
    </haed>
`    <body>
        <!-- Search bar for software @Alice -->                                    
        <?php echo form_open('keyword',array('method'=>'get')); ?>
        
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                <div class="dropdown-menu">
                    <div class="dropdown-item">
                    <div class="input-group">
                    <label for="location-filter">Location</label>
                    <select class="form-control selectpicker" name="selectedLocation">                           <!--return variable: selectedLocation-->
                        <option value="All" selected>All</option>
                        <option value="Barn A" >Barn A</option>
                        <option value="Barn B">Barn B</option>
                        <option value="Lab 4210">Lab 4210</option>
                        <option value="Lab 4213">Lab 4213</option>
                        <option value="Lab 4214">Lab 4214</option>
                    </select>
                 </div><!--end of form group-->
                    </div>
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Search for the software" name="name"/>   
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Submit</button>
            </div>
        </div>

        <div class="input-group mb3" id="adv-search">
            <form>
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</button>
                <div class="input-group">
                    <label for="location-filter">Location</label>
                    <select class="form-control" name="selectedLocation">                           <!--return variable: selectedLocation-->
                        <option value="All" selected>All</option>
                        <option value="Barn A" >Barn A</option>
                        <option value="Barn B">Barn B</option>
                        <option value="Lab 4210">Lab 4210</option>
                        <option value="Lab 4213">Lab 4213</option>
                        <option value="Lab 4214">Lab 4214</option>
                    </select>
                 </div><!--end of form group-->

                <div class="form-group">
                    <label for="cateogry-filter" >Cateogry</label> 
                    <select class="form-control"  name="selectedCategory" >                      <!--return variable: selectedCategory-->
                        <option value="All" selected>All</option>
                        <option value="Common software">Common software</option>
                        <option value="Academic">Academic</option>
                        <option value="Programming">Programming</option>
                    </select>
                </div><!--end of form group-->                                                                
                
                <input type="text" class="form-control" placeholder="Search for the software" name="name"/>             <!-- @Wing return the user input as variable "name" -->
                <button type="submit" class="btn search-icon" style="height:34px"><i class="fas fa-search"></i></button>


            </form> <!--end of form-->
                                                             
        </div>
    </body>
</html>