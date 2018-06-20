<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>

  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>">
  <script src="<?php echo base_url('assets/js/moment.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>

</head>

<body>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Software Management
        <small>Add Software</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Software Details</h3>
                    </div><!-- /.box-header -->

            
                    <form role="form" action="<?php echo base_url() ?>information/addNewSoftware" method="post" id="addSoftware" role="form">
                      <div class="box-body">
                      <div class="row">
                        <div class="col-md-10">  
                        <h4>General Information</h4>
                        </div>
                      </div>
                      <br>
                        <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="name">Software Name<span class="field-mandatory">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="Software Name" name="name" maxlength="100"> 
                            </div>       
                          </div>
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="name">Version</label>
                                <input type="text" class="form-control" id="version" placeholder="Version" name="version" maxlength="100"> 
                            </div>       
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="name">Location<span class="field-mandatory">*</span></label>
                                <input type="text" class="form-control" id="location" placeholder="Location" name="location" maxlength="100"> 
                            </div>       
                          </div>
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="name">Category<span class="field-mandatory">*</span></label>
                                <input type="text" class="form-control" id="category" placeholder="Category" name="category" maxlength="100"> 
                            </div>       
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6"> 
                            <div class="form-group">
                              <label for="language">Language<span class="field-mandatory">*</span></label>
                                <select class="form-control" id="language" name="language">
                                  <option>US English</option>
                                  <option>UK English</option>
                                  <option>Chinese</option>
                                  <option>French</option>
                                  <option>Spanish</option>
                                </select>
                              </div>
                            </div>

                          <div class="col-md-6"> 
                            <div class="form-group">
                              <label for="icon">Software Icon<span class="field-mandatory">*</span></label>
                              <input id="img" name="img" type="file" class="form-control-file">
                            </div>
                          </div>
                      </div>

                      <br>
                      <div class="row">
                        <div class="col-md-6">  
                         <h4>Other Information</h4>
                        </div>
                      </div>
                      <br>

                      <div class="row">
                        <div class="col-md-6">  
                          <div class="form-group">
                            <label for="platforn">Platform<span class="field-mandatory">*</span></label>
                            <textarea id="platform" name="platform" class="form-control" rows="2"></textarea>
                          </div>
                          
                          <div class="form-group">
                            <label for="information">Information</label>
                            <textarea id="information" name="information" class="form-control" rows="2"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="processor">Processor</label>
                                <input id="processor" name="processor" type="text" class="form-control" />
                            </div>       
                          </div>
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="memory">Memory</label>
                              <input id="memory" type="text" class="form-control" />
                            </div>       
                          </div>
                      </div>

                       <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="requirement">Hardware Requirements</label>
                              <textarea id="hardware_requirement" name="hardware_requirement" class="form-control" rows="2"></textarea>
                            </div>       
                        
                                
                            <div class="form-group">
                              <label for="supplier">Supplier</label>
                              <input id="supplier" name="supplier" type="text" class="form-control" />
                            </div>       
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="support_by">Support By</label>
                                <input id="support_by" name="support_by" type="text" class="form-control" />
                            </div>       
                          </div>
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="support_url">Support URL</label>
                              <input id="support_url" name="support_url" type="url" class="form-control" />
                            </div>       
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="download">Download URL</label>
                                <input type="url" id="download_url" name="download_url" class="form-control" />
                            </div>       
                          </div>
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="fee">Fee</label>
                             <input type="url" id="fee" name="fee" class="form-control" />
                            </div>       
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="created_date">Date Created</label>
                                <div class='input-group date' id='dateCreated' name='dateCreated'>
                                    <input type='text' id="created_date" name="created_date" class="form-control" />
                                    <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                              </div>
                            </div>       

                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="creator">Creator</label>
                              <input id="creator" name="creator" type="text" class="form-control" />
                            </div>       
                          </div>
                      </div>

                    
                    <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="last_modified_date">Last Modified Date</label>
                              <div class='input-group date' id='dateModified' name='dateModified'>
                                  <input type='text' id="last_modified_date" name="last_modified_date" class="form-control" />
                                  <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>
                              </div>
                            </div>       
        
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="last_modified_by">Last Modified By</label>
                              <input id="last_modifier" name="last_modifier" type="text" class="form-control" />
                            </div>       
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                            <label for="setup_instruction">Setup Instructions</label>
                              <textarea id="setup_instruction" name="setup_instruction" class="form-control" rows="4"></textarea>
                             
                            </div>       
                          </div>
                          <div class="col-md-6">                     
                            <div class="form-group">
                            <label for="setup_time">Setup Time</label>
                              <input type="text" id="setup_time" name="setup_time" class="form-control" />
                            </div>       
                          </div>
                      </div>

                        <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="troubleshooting">Troubleshooting</label>
                               <textarea id="troubleshooting" name="troubleshooting" class="form-control" rows="4"></textarea>
                            </div>
                          </div>
                        </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="remark">Remarks</label>
                              <textarea id="remark" name="remark" class="form-control" rows="4"></textarea>
                            </div>
                          </div>
                        </div>

                    <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" onclick="post();"/>
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                </div>
            </div>

             <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                
                $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
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
      var form_data = "name=" + $('#name').val()
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
        $.post('information/addNewSoftware', { new_data : form_data});   
        //document.getElementByID("test").value = form_data;
    }
      
</script>
<script src="<?php echo base_url(); ?>assets/js/addSoftware.js" type="text/javascript"></script>