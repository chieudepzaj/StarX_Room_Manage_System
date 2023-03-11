<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('dashboard'); ?></a></li>
        <li class="breadcrumb-item active"><?php echo $this->lang->line('rooms'); ?></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        <a href="<?php echo base_url(); ?>add_room">
            <button type="button" class="btn btn-inverse"><i class="fa fa-plus"></i> <?php echo $this->lang->line('add_room'); ?></button>
        </a>
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
                                <th class="text-nowrap"><?php echo $this->lang->line('number_or_name'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('status'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('daily_rent'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('monthly_rent'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('floor'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('remarks'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('room_status'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('room_type'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('updated_on'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('updated_by'); ?></th>
                                <th class="text-nowrap"><?php echo $this->lang->line('options'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $this->db->order_by('timestamp', 'desc');
                            $rooms = $this->db->get_where('room', array('status' => 0))->result_array();
                            foreach ($rooms as $room) :
                            ?>
                                <tr>
                                    <td width="1%"><?php echo $count++; ?></td>
                                    <td><?php echo html_escape($room['room_number']); ?></td>
                                    <td>
                                        <?php
                                        if ($room['status'])
                                            echo '<span class="badge badge-primary">' . $this->lang->line('occupied') . '</span>';
                                        else
                                            echo '<span class="badge badge-warning">' . $this->lang->line('unoccupied') . '</span>';
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo html_escape(number_format($room['daily_rent'])); ?>
                                        <?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>
                                    </td>
                                    <td>
                                        <?php echo html_escape(number_format($room['monthly_rent'])); ?>
                                        <?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>
                                    </td>
                                    <td><?php echo $room['floor'] ? html_escape($room['floor']) : 'N/A'; ?></td>
                                    <td class="limit-row"><?php echo $room['remarks'] ? html_escape($room['remarks']) : 'N/A'; ?></td>
                                    <td>
                                        <?php 
                                        if($room['room_status'] == 1)
                                        echo '<span class="badge badge-success">' . $this->db->get_where('room_status', array('id_room_status' => $room['room_status']))->row()->name . '</span>'; 
                                        elseif($room['room_status'] == 2)
                                        echo '<span class="badge badge-danger">' . $this->db->get_where('room_status', array('id_room_status' => $room['room_status']))->row()->name . '</span>'; 
                                        if($room['room_status'] == 3)
                                        echo '<span class="badge badge-warning">' . $this->db->get_where('room_status', array('id_room_status' => $room['room_status']))->row()->name . '</span>'; 
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                            $room_type = $this->db->get_where('room_type', array('id_room_type' => $room['room_type']))->row()->content;
                                            echo $room_type? html_escape($room_type) : 'N/A'; 
                                        ?>
                                    </td>
                                    <td><?php echo date('d/m/Y', $room['timestamp']); ?></td>
                                    <td>
                                        <?php
                                        $user_type =  $this->db->get_where('user', array('user_id' => $room['updated_by']))->row()->user_type;
                                        if ($user_type == 1) {
                                            echo 'Admin';
                                        } else {
                                            $person_id = $this->db->get_where('user', array('user_id' => $room['updated_by']))->row()->person_id;
                                            echo html_escape($this->db->get_where('staff', array('staff_id' => $person_id))->row()->name);
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white btn-xs"><?php echo $this->lang->line('action'); ?></button>
                                            <button type="button" class="btn btn-white btn-xs dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/modal_edit_room/<?php echo $room['room_id']; ?>');">
                                                <?php echo $this->lang->line('edit'); ?>
                                                </a>
                                                <?php if ($room['room_status'] == '1') : ?>
                                                <a class="dropdown-item" href="javascript:;" onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/modal_assign_room_to_tenant/<?php echo $room['room_id']; ?>');">
                                                <?php echo $this->lang->line('assign_tenant'); ?>
                                                </a>
                                                <?php endif; ?>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:;" onclick="confirm_modal('<?php echo base_url(); ?>rooms/remove/<?php echo $room['room_id']; ?>');">
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