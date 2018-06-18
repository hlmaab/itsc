<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>

  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>">
  <script src="<?php echo base_url('assets/js/moment.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>

  <!-- ITSC custom made stylesheet & js, replace the href to the version on ilearn -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/itscform.css');?>">

</head>

<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Add New Software(s)
        <small>Control panel</small>
      </h1>
    </section>-->
    
    <section class="content">
    

    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Software Management
        <small>Add A New Software</small>
      </h1>
    </section>

    <br>
    <div class="row">
          <p>Error:</p>
          <p><?php echo validation_errors(); ?></p>
    </div>
    


  <?php echo form_open('insert');?>
	<div class="row">
		<div class="title-bar">ITSC Add Software Form</div>
	</div>
	<div class="row">
		<div class="form-content">
			<!-- <p>Please fill out the form below completely. Missing information will cause a delay in processing your request. Your form will be processed as quickly as possible. All requests should be submitted at least 2 days and less than 2 months in advance of the event. Otherwise, we may not be able to accommodate the requests.</p> -->

			<div class="form-input-content">
				<div class="form-horizontal">

            <!--@Alice 
             call controller insert.php to handle inserting software to database
            -->                                
            <div class="row">
                <label><b>General Information</b></label>
            </div>
				    <div class="row">
                <label class="col-md-2">Software ID<span class="field-mandatory">*</span></label>
                <div class="col-md-3"><input type="text" id="id" name="id" class="form-control" /></div>
            </div>
            <div class="row">
                <label class="col-md-2">Software Name<span class="field-mandatory">*</span></label>
			        	<div class="col-md-4"><input type="text" id="sname" name="sname" class="form-control" /></div>
                <label class="col-md-1">Version</label>
                <div class="col-md-4"><input type="text" id="version" name="version" class="form-control" /></div>
            </div>
            <div class="row">
              <label class="col-md-2">Location<span class="field-mandatory">*</span></label>
              <div class="col-md-4"><input type="text" id="location" name="location" class="form-control" /></div>
              <label class="col-md-1">Category<span class="field-mandatory">*</span></label>
              <div class="col-md-4"><input type="text" id="category" name="category" class="form-control" /></div>
          </div>
            <div class="row">
                <label class="col-md-2">Language<span class="field-mandatory">*</span></label>
                  <div class="col-md-4">
                    <select class="form-control" id="language" name="language">
                      <option>US English</option>
                      <option>UK English</option>
                      <option>Chinese</option>
                      <option>French</option>
                      <option>Spanish</option>
                    </select>
                  </div>
                  <label class="col-md-2">Software Icon<span class="field-mandatory">*</span></label>
                  <div class="col-md-4"><input id="img" name="img" type="file" class="form-control-file"></div>
            </div>


            <div class="row">
                <label><b>Other Information</b></label>
            </div>
            <div class="row">
              <label class="col-md-2">Platform<span class="field-mandatory">*</span></label>
              <div class="col-md-4"><textarea id="platform" name="platform" class="form-control" rows="2"></textarea></div>
              
              <label class="col-md-1">Information</label>
              <div class="col-md-4"><textarea id="information" name="information" class="form-control" rows="2"></textarea></div>
            </div>
            <div class="row">
                <label class="col-md-2">Processor</label>
                <div class="col-md-4"><input id="processor" name="processor" type="text" class="form-control" /></div>

                <label class="col-md-1">Memory</label>
                <div class="col-md-4"><input id="memory" type="text" class="form-control" /></div>

            </div>
            <div class="row">
              <label class="col-md-2">Hardware Requirements</label>
              <div class="col-md-4"><textarea id="hardware_requirement" name="hardware_requirement" class="form-control" rows="2"></textarea></div>
            </div>
            <div class="row">
                <label class="col-md-2">Supplier</label>
                <div class="col-md-5"><input id="supplier" name="supplier" type="text" class="form-control" /></div>
            </div>
            <div class="row">
                <label class="col-md-2">Support By</label>
                <div class="col-md-5"><input id="support_by" name="support_by" type="text" class="form-control" /></div>
            </div>
            <div class="row">
                <label class="col-md-2">Support URL</label>
                <div class="col-md-5"><input id="support_url" name="support_url" type="url" class="form-control" /></div>
            </div>
            <div class="row">
                <label class="col-md-2">Download URL</label>
                <div class="col-md-5"><input type="url" id="download_url" name="download_url" class="form-control" /></div>
            </div>
            <div class="row">
              <label class="col-md-2">Fee</label>
              <div class="col-md-5"><input type="url" id="fee" name="fee" class="form-control" /></div>
          </div>
				    <div class="row">

	              		<label class="col-md-2">Date Created</label>
	              		<div class="col-md-3">
	                		<div class='input-group date' id='dateCreated' name='dateCreated'>
	                    		<input type='text' id="created_date" name="created_date" class="form-control" />
	                    		<span class="input-group-addon">
	                        		<span class="glyphicon glyphicon-calendar"></span>
	                    		</span>
	                		</div>
	              		</div>

                    <label class="col-md-1"></label>

                    <label class="col-md-2">Creator</label>
                    <div class="col-md-3"><input id="creator" name="creator" type="text" class="form-control" /></div>

            </div>
            
            <div class="row">

                    <label class="col-md-2">Last Modified Date</label>
                    <div class="col-md-3">
                      <div class='input-group date' id='dateModified' name='dateModified'>
                          <input type='text' id="last_modified_date" name="last_modified_date" class="form-control" />
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                    </div>

                    <label class="col-md-1"></label>

                    <label class="col-md-2">Last Modified By</label>
                    <div class="col-md-3"><input id="last_modifier" name="last_modifier" type="text" class="form-control" /></div>

            </div>
            <div class="row">
                <label class="col-md-2">Setup Time</label>
                <div class="col-md-5"><input type="text" id="setup_time" name="setup_time"
                 class="form-control" /></div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <label>Setup Instructions</label>
                <textarea id="setup_instruction" name="setup_instruction" class="form-control" rows="4"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <label>Troubleshooting</label>
                <textarea id="troubleshooting" name="troubleshooting" class="form-control" rows="4"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7">
                <label>Remarks</label>
                <textarea id="remark" name="remark" class="form-control" rows="4"></textarea>
              </div>
            </div>
				</div>

			</div>		<!-- end of 1st section -->





      </br>
            <input id="test" name="test" type="hidden"></input>
            <button type="submit" id="submit" class="btn btn-primary" value="Submit" onclick="post();">Submit</button>
            <!--<button type="submit" id="reset" class="btn btn-reset"value="Reset" >Reset</button>-->
            </br>
	        </br>
	        <!-- <hr> -->
          	<!-- <small>
          		<p>A/V Remarks</p>
          		<ul>
          			<li>Please contact ITSC Service Desk at Ext. 6200 for reservation of A/V equipment (e.g. mic, speakers, etc) in advance. Please pick up these reserved equipment in person.</li>
          			<li>Please arrange with FMO Moving Team for transporting of large or heavy A/V equipment (speakers, Televisions, etc) from ITSC Service Desk to the event venue.</li>
          			<li>Should you have any questions or need any assistance from us, please call our Service Desk at Ext. 6200 or email to <a href="#" class="text-alert">cchelp@ust.hk</a></li>
          		</ul>
            </small> -->

            <!--hidden field-->
    </form>
		</div> <!-- end of form content" -->
    
	</div>

	<div class="row">
		<div class="footer">
			<p>Copyright &copy; Information Technology Services Center, HKUST</p>
		</div>
	</div> <!-- end of footer -->



    </section>
</div>

</body>

<script type="text/javascript">

// Date Picker
    $(function () {
        $('#dateCreated').datetimepicker();
        $('#dateCreated').data("DateTimePicker").format('MM/DD/YYYY');   

        $('#dateModified').datetimepicker();
        $('#dateModified').data("DateTimePicker").format('MM/DD/YYYY');           			
    });
</script>


<script type="text/javascript" charset="utf-8">

    /** @Alice 
    * This function concatenates all form attributes and send to controller. 
    */
    function post(){
      var form_data = "sname=" + $('#sname').val()
              + "&version=" + $('#version').val()
              + "&location=" + $('#location').val()
              + "&category="+ $('#category').val()
              + "&information=" + $('#information').val()
              + "&img=" + $('#img').val()
              + "&hardware_requirement=" + $('#hardware_requirement').val()
              + "&language=" + $('#language').val()
              + "&platform=" + $('#platform').val()
              + "&id=" + $('#id').val()
              + "&processor=" + $('#processor').val()
              + "&memory=" + $('#memory').val()
              + "&supplier=" + $('#supplier').val()
              + "&support_by=" + $('#support_by').val()
              + "&support_url=" + $('#support_url').val()
              + "&download_url=" + $('#download_url').val()
              + "&ee=" + $('#fee').val()
              + "&created_date="+ $('#created_date').val()
              + "&creator="+ $('#creator').val()
              + "&last_modified_date="+ $('#last_modified_date').val()
              + "&last_modifier=" + $('#last_modifier').val()
              + "&setup_time="+ $('#setup_time').val()
              + "&setup_instruction="+ $('#setup_instruction').val()
              + "&troubleshooting="+ $('#troubleshooting').val()
              + "&remark="+ $('#remark').val() ;

        //for debugging
        alert(form_data);

        //$.post('insert/insertData', { new_data : form_data});   
        $.post('insert', { new_data : form_data});   
        //document.getElementByID("test").value = form_data;
    }
      
</script>