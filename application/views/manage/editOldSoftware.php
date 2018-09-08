<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$id = '';
$name = '';
$version='';
$location[] = '';
$category = '';
$information='';
$img ='';
$hardware_requirement='';
$language='';
$platform='';
$id='';
$processor='';
$memory='';
$supplier='';
$support_by='';
$support_url='';
$download_url='';
$fee='';
$created_date='';
$creator='';
$last_modified_date='';
$last_modified_by='';
$setup_time='';
$setup_instruction='';
$troubleshooting='';
$remark='';

if(!empty($softwareInfo))
{
    foreach ($softwareInfo as $uf)
    {
        $id = $uf->id;
        $name = $uf->name;
        $version = $uf->version;
        $location[] = $uf->location;
        $category = $uf->category;
        $information=$uf->information;
        $img =$uf->img;
        $hardware_requirement=$uf->hardware_requirement;
        $language=$uf->language;
        $platform=$uf->platform;
        $id=$uf->id;
        $processor=$uf->processor;
        $memory=$uf->memory;
        $supplier=$uf->supplier;
        $support_by=$uf->support_by;
        $support_url=$uf->support_url;
        $download_url=$uf->download_url;
        $fee=$uf->fee;
        $created_date=$uf->created_date;
        $creator=$uf->creator;
        $last_modified_date=$uf->last_modified_date;
        $last_modified_by=$uf->last_modified_by;
        $setup_time=$uf->setup_time;
        $setup_instruction=$uf->setup_instruction;
        $troubleshooting=$uf->troubleshooting;
        $remark=$uf->remark;
    }
}


?>
<head>
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>">
  <script src="<?php echo base_url('assets/js/moment.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>

  <!-- Select Picker Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/form.css');?>">

<!-- Select Picker Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

</head>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-clipboard"></i> Software Management
        <small>Edit Software</small>
      </h1>
    </section>
    <!-- form start -->
                    
    <form role="form" action="<?php echo base_url() ?>information/editSoftware" method="post" id="editSoftware" role="form">
    <div class="col-md-6">
             <br>
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
            
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-11">
              <!-- general form elements -->
                
                
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Edit Software Details</h3>
                    </div><!-- /.box-header -->
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
                                        <input type="text" class="form-control" id="name" placeholder="Software Name" name="name" value="<?php echo $name; ?>" maxlength="100">
                                        <input type="hidden" value="<?php echo $id; ?>" name="id" id="id" />    
                                    </div>
                                </div>
                                <div class="col-md-6">                                
                                  <div class="form-group">
                                      <label for="name">Version</label>
                                      <input type="text" class="form-control" id="version" placeholder="Version" name="version" value="<?php echo $version; ?>"maxlength="100"> 
                                  </div>       
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">                                
                                <div class="form-group">
                                    <label for="name">Location<span class="field-mandatory">*</span></label>
                                    <select class="form-control selectpicker" id="location" name="location[]" multiple="multiple" size="5" value="<?php echo $location; ?>">
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
                              <label for="language">Language<span class="field-mandatory">*</span></label>
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
                              <input id="img" name="img" type="file" class="form-control-file" value="<?php echo $img; ?>">
                              <p>Original image: <?php echo $img; ?></p>
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
                            <textarea id="platform" name="platform" class="form-control" rows="4" ><?php echo $platform; ?></textarea>
                          </div>
                          
                          <div class="form-group">
                            <label for="information">Information</label>
                            <textarea id="information" name="information" class="form-control" rows="6"><?php echo $information; ?></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="processor">Processor</label>
                                <input id="processor" name="processor" type="text" class="form-control" value="<?php echo $processor; ?>"/>
                            </div>       
                          </div>
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="memory">Memory</label>
                              <input id="memory" type="text" class="form-control" value="<?php echo $memory; ?>"/>
                            </div>       
                          </div>
                      </div>

                       <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="requirement">Hardware Requirements</label>
                              <textarea id="hardware_requirement" name="hardware_requirement" class="form-control" rows="6"><?php echo $hardware_requirement; ?></textarea>
                            </div>       
                        
                                
                            <div class="form-group">
                              <label for="supplier">Supplier</label>
                              <input id="supplier" name="supplier" type="text" class="form-control" value="<?php echo $supplier; ?>"/>
                            </div>       
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="support_by">Support By</label>
                                <input id="support_by" name="support_by" type="text" class="form-control" value="<?php echo $support_by; ?>"/>
                            </div>       
                          </div>
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="support_url">Support URL</label>
                              <input id="support_url" name="support_url" type="url" class="form-control" value="<?php echo $support_url; ?>"/>
                            </div>       
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="download">Download URL</label>
                                <input type="url" id="download_url" name="download_url" class="form-control" value="<?php echo $download_url; ?>"/>
                            </div>       
                          </div>
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="fee">Fee</label>
                             <input type="text" id="fee" name="fee" class="form-control" value="<?php echo $fee; ?>"/>
                            </div>       
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                                <label for="created_date">Date Created</label>
                                <div class='input-group date' id='dateCreated' name='dateCreated'>
                                    <input type='text' id="created_date" name="created_date" class="form-control" value="<?php echo $created_date; ?>" size="100" disabled />
                                </div>
                              </div>
                            </div>       

                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="creator">Creator</label>
                              <input id="creator" name="creator" type="text" class="form-control" value="<?php echo $creator; ?>" size="100" disabled/>
                            </div>       
                          </div>
                      </div>

                    
                    <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="last_modified_date">Last Modified Date</label>
                              <div class='input-group date' id='dateModified' name='dateModified'>
                                  <input type='text' id="last_modified_date" name="last_modified_date" class="form-control" value="<?php echo $last_modified_date; ?>"/>
                                  <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>
                              </div>
                            </div>       
        
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="last_modified_by">Last Modified By</label>
                              <input id="last_modified_by" name="last_modified_by" type="text" class="form-control" value="<?php echo $last_modified_by; ?>"/>
                            </div>       
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                            <label for="setup_instruction">Setup Instructions</label>
                              <textarea id="setup_instruction" name="setup_instruction" class="form-control" rows=""><?php echo $setup_instruction; ?></textarea>
                             
                            </div>       
                          </div>
                          <div class="col-md-6">                     
                            <div class="form-group">
                            <label for="setup_time">Setup Time</label>
                              <input type="text" id="setup_time" name="setup_time" class="form-control" value="<?php echo $setup_time; ?>"/>
                            </div>       
                          </div>
                      </div>

                        <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="troubleshooting">Troubleshooting</label>
                               <textarea id="troubleshooting" name="troubleshooting" class="form-control" rows="6"><?php echo $troubleshooting; ?></textarea>
                            </div>
                          </div>
                        </div>

                      <div class="row">
                          <div class="col-md-6">                                
                            <div class="form-group">
                              <label for="remark">Remarks</label>
                              <textarea id="remark" name="remark" class="form-control" rows="4"><?php echo $remark; ?></textarea>
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
        $('#dateModified').data("DateTimePicker").format('DD/MM/YYYY');           			
    });
</script>
<script src="<?php echo base_url(); ?>assets/js/editSoftware.js" type="text/javascript"></script>