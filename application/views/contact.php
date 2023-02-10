<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('dashboard'); ?></a></li>
        <li class="breadcrumb-item active"><?php echo $this->lang->line('contact'); ?></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
            <button type="button" class="btn btn-inverse"><i class="fa fa-table"></i> <?php echo $this->lang->line('contact'); ?></button>  
 </h1>
    <!-- end page-header -->
    <hr class="no-margin-top">

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-body -->
                <div class="panel-body">
                    <table id="data-table-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th class="text-nowrap"><?php echo $this->lang->line('name'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('email'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('address'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('mobile_number'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('content'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('status'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $contacts = $this->db->get('contact')->result_array();
                            foreach ($contacts as $contact) :
                                ?>
                                <tr>
                                    <td width="1%"><?php echo $count++; ?></td>
                                    <td><?php echo html_escape($contact['name']); ?></td>
                                    <td><?php echo html_escape($contact['email']); ?></td>
                                    <td><?php echo html_escape($contact['address']); ?></td>
                                    <td><?php echo html_escape($contact['phone']); ?></td>
                                    <td><?php echo html_escape($contact['content']); ?></td>
                                    <td>
                                        <?php if ($contact['status'] == 1) : ?>
											<span class="badge badge-warning"><?php echo $this->lang->line('open'); ?></span>
										<?php endif; ?>
									    <?php if ($contact['status'] == 0) : ?>
											<span class="badge badge-primary"><?php echo $this->lang->line('closed'); ?></span>
									    <?php endif; ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white btn-xs"><?php echo $this->lang->line('action'); ?></button>
                                            <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:;" onclick="modal_update_confirm('<?php echo base_url(); ?>contact/update/<?php echo $contact['id_contact']; ?>');">
                                                <?php echo $this->lang->line('update'); ?>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>contact/remove/<?php echo $contact['id_contact']; ?>');">
                                                <?php echo $this->lang->line('remove'); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->