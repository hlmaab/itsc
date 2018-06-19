<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Software Management
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url().'insert/'; ?>"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Software List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>manage" method="GET" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($result))
                    {	
						$count=1;
                        foreach($result as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $count++; ?></td>
                      <td><?php echo $record['name']; ?></td>
                      <td class="text-center">
                          <a class="btn btn-sm btn-primary" href="<?=base_url().'login-history/'; ?>" title="Login history"><i class="fa fa-history"></i></a> | 
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo 1; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>

