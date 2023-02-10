<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('dashboard'); ?></a></li>
        <li class="breadcrumb-item active"><?php echo $this->lang->line('booking'); ?></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
            <button type="button" class="btn btn-inverse"><i class="fa fa-table"></i> <?php echo $this->lang->line('booking'); ?></button>  
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
                                <th class="text-nowrap"><?php echo $this->lang->line('mobile_number'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('email'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('start'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('end'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('adult'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('child'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('room_type'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('address'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('content'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('status'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center">
                            <?php
                            $count = 1;
                            $booking = $this->db->get('book_room')->result_array();
                            foreach ($booking as $row) :
                                ?>
                                <tr>
                                    <td width="1%"><?php echo $count++; ?></td>
                                    <td><?php echo html_escape($row['name']); ?></td>
                                    <td><?php echo html_escape($row['phone']); ?></td>
                                    <td><?php echo $row['email'] ? html_escape($row['email']) : 'N/A'; ?></td>
                                    <td><?php echo date('d/m/Y', $row['start']); ?></td>
                                    <td><?php echo date('d/m/Y', $row['end']); ?></td>
                                    <td><?php echo html_escape($row['adult']); ?></td>
                                    <td><?php echo html_escape($row['child']); ?></td>
                                    <td><?php echo $this->db->get_where('room_type',array('id_room_type' => $row['room_type_id']))->row()->content;; ?></td>
                                    <td><?php echo $row['address'] ? html_escape($row['address']) : 'N/A'; ?></td>
                                    <td><?php echo $row['content'] ? html_escape($row['content']) : 'N/A'; ?></td>
                                    <td>
                                        <?php if ($row['status'] == 1) : ?>
											<span class="badge badge-warning"><?php echo $this->lang->line('open'); ?></span>
										<?php endif; ?>
									    <?php if ($row['status'] == 0) : ?>
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
                                                <a class="dropdown-item" href="javascript:;" onclick="modal_update_booking('<?php echo base_url(); ?>booking/update/<?php echo $row['id_book_room']; ?>');">
                                                <?php echo $this->lang->line('update'); ?>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>booking/remove/<?php echo $row['id_book_room']; ?>');">
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