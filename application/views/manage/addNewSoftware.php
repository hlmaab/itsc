<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>">
  <script src="<?php echo base_url('assets/js/moment.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>

  <!-- Select Picker Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Select Picker Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-clipboard"></i> Software Management
        <small>Add Software</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-11">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Software Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    
                    <form role="form" action="<?php echo base_url() ?>information/addNewSoftware" method="post" id="addSoftware" role="form">
                        <div class="box-body">
                          <div class="row">
                            <div class="col-md-10">  
                            <h4>General Information</h4>
                            </div>
                          </div>
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="form-group">
                                        <label for="name">Software Name<span class="field-mandatory">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="Software Name" name="name"  maxlength="100">  
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
                                    <select class="form-control selectpicker" id="location" name="location[]" multiple="multiple" size="5">
                                    <option value="Barn A">Barn A</option>
                                    <option value="Barn B">Barn B</option>
                                    <option value="Room 4210">Room 4210</option>
                                    </select>
                                </div>       
                            </div>
                            <div class="col-md-6">                                
                                <div class="form-group">
                                    <label for="name">Category<span class="field-mandatory">*</span></label>
                                    <select class="form-control selectpicker" id="category" name="category[]" multiple="multiple" size="5">
                                    <option value="Graphic">Graphic</option>
                                    <option value="Programming">Programming</option>
                                    <option value="Academic">Academic</option>
                                    </select> 
                                </div>       
                            </div>
                            </div>
                        
                            <div class="row">
                          <div class="col-md-6"> 
                            <div class="form-group">
                              <label for="language">Language</label>
                                <select class="form-control selectpicker" id="language" name="language[]"  multiple="multiple" size="5">
                                  <option value="English">English</option>
                                  <option value="Chinese">Chinese</option>
                                  <option value="French">French</option>
                                  <option value="Spanish">Spanish</option>
                                </select>
                              </div>
                            </div>

                          <div class="col-md-6"> 
                            <div class="form-group">
                              <label for="icon">Software Icon</label>
                              <input id="img" name="img" type="file" class="form-control-file">
                            </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6"> 
  
                            <div class="form-group">
                              <label for="subscrive">Able to Subscribe<span class="field-mandatory">*</span></label><br>
                              <div class="col-md-3"><input type="checkbox" class="radio" id="subscribe" name="subscribe" class="form-control" value="1">Yes </div>
                              <div class="col-md-3"><input type="checkbox" class="radio" id="subscribe" name="subscribe" class="form-control" value="0">No </div>
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
                            <label for="platforn">Platform</label>
                            <textarea id="platform" name="platform" class="form-control" rows="4" ></textarea>
                          </div>
                          
                          <div class="form-group">
                            <label for="information">Information</label>
                            <textarea id="information" name="information" class="form-control" rows="6"></textarea>
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
                              <input id="memory" type="text" class="form-control"/>
                            </div>       
                          </div>
                      </div>

                       <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="requirement">Hardware Requirements</label>
                              <textarea id="hardware_requirement" name="hardware_requirement" class="form-control" rows="6"></textarea>
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
                             <input type="text" id="fee" name="fee" class="form-control" />
                            </div>       
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="created_date">Date Created</label>
                                <div class='input-group date' id='dateCreated' name='dateCreated'>
                                    <input type='text' id="created_date" name="created_date" class="form-control"  size="100"  />
                                </div>
                              </div>
                            </div>       

                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="creator">Creator</label>
                              <input id="creator" name="creator" type="text" class="form-control" size="100" />
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
                              <input id="last_modified_by" name="last_modified_by" type="text" class="form-control" />
                            </div>       
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                            <label for="setup_instruction">Setup Instructions</label>
                              <textarea id="setup_instruction" name="setup_instruction" class="form-control" rows=""></textarea>
                             
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
                               <textarea id="troubleshooting" name="troubleshooting" class="form-control" rows="6"></textarea>
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






                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
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
<script type="text/javascript">

// Date Picker
    $(function () {
        $('#dateModified').datetimepicker();
        $('#dateModified').data("DateTimePicker").format('MM/DD/YYYY');           			
    });
</script>
<script src="<?php echo base_url(); ?>assets/js/addSoftware.js" type="text/javascript"></script>