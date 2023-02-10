<?php echo form_open_multipart('rooms/update/' . $param2, array('id' => 'edit_room', 'method' => 'post', 'data-parsley-validate' => 'true')); ?>
<div class="form-group">
	<label><?php echo $this->lang->line('room_number_or_name'); ?> *</label>
	<input value="<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->room_number); ?>" type="text" name="room_number" placeholder="<?php echo $this->lang->line('room_number_or_name_placeholder'); ?>" data-parsley-required="true" class="form-control">
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('daily_rent'); ?> (<?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>) *</label>
	<input value="<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->daily_rent); ?>" type="text" data-parsley-required="true" data-parsley-type="number" name="daily_rent" placeholder="<?php echo $this->lang->line('daily_rent_placeholder'); ?>" class="form-control" min="0">
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('monthly_rent'); ?> (<?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>) *</label>
	<input value="<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->monthly_rent); ?>" type="text" data-parsley-required="true" data-parsley-type="number" name="monthly_rent" placeholder="<?php echo $this->lang->line('monthly_rent_placeholder'); ?>" class="form-control" min="0">
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('floor_number'); ?></label>
	<input value="<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->floor); ?>" type="text" name="floor" placeholder="<?php echo $this->lang->line('floor_number_placeholder'); ?>" class="form-control">
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('remarks'); ?></label>
	<textarea style="resize: none" type="text" name="remarks" placeholder="<?php echo $this->lang->line('enter_remarks'); ?>" class="form-control"><?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->remarks); ?></textarea>
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('room_status'); ?></label>
	<div>
		<select style="width: 100%" class="form-control default-select2" name="id_room_status">
			<option value=""><?php echo $this->lang->line('select_status'); ?></option>
			<?php
				$room_status = $this->db->get('room_status')->result_array();
				foreach ($room_status as $rows) :
			?>
			<option <?php if ($rows['id_room_status'] == $this->db->get_where('room', array('room_id' => $param2))->row()->room_status) echo 'selected'; ?> value="<?php echo html_escape($rows['id_room_status']); ?>"><?php echo html_escape($rows['name']); ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>  
<div class="form-group">
	<label><?php echo $this->lang->line('room_type'); ?></label>
	<div>
		<select style="width: 100%" class="form-control default-select2" name="id_room_type">
			<option value=""><?php echo $this->lang->line('select_room_type'); ?></option>
			<?php
				$room_status = $this->db->get('room_type')->result_array();
				foreach ($room_status as $rows) :
			?>
			<option <?php if ($rows['id_room_type'] == $this->db->get_where('room', array('room_id' => $param2))->row()->room_type) echo 'selected'; ?> value="<?php echo html_escape($rows['id_room_type']); ?>"><?php echo html_escape($rows['content']); ?></option>
			<?php endforeach; ?>
		</select>
	</div>
</div>             
<div class="form-group">
	<label><?php echo $this->lang->line('existing_image').' 1'; ?></label>
	<br>
	<?php if (html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->picture_room_1)) : ?>
		<img src="<?php echo base_url(); ?>uploads/rooms/<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->picture_room_1); ?>" alt="Image" class="img-thumbnail thumb128">
	<?php else : ?>
		<p><?php echo $this->lang->line('no_preview_available'); ?>.</p>
	<?php endif; ?>
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('existing_image').' 2'; ?></label>
	<br>
	<?php if (html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->picture_room_2)) : ?>
		<img src="<?php echo base_url(); ?>uploads/rooms/<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->picture_room_2); ?>" alt="Image" class="img-thumbnail thumb128">
	<?php else : ?>
		<p><?php echo $this->lang->line('no_preview_available'); ?>.</p>
	<?php endif; ?>
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('existing_image').' 3'; ?></label>
	<br>
	<?php if (html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->picture_room_3)) : ?>
		<img src="<?php echo base_url(); ?>uploads/rooms/<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->picture_room_3); ?>" alt="Image" class="img-thumbnail thumb128">
	<?php else : ?>
		<p><?php echo $this->lang->line('no_preview_available'); ?>.</p>
	<?php endif; ?>
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('existing_image').' 4'; ?></label>
	<br>
	<?php if (html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->picture_room_4)) : ?>
		<img src="<?php echo base_url(); ?>uploads/rooms/<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->picture_room_4); ?>" alt="Image" class="img-thumbnail thumb128">
	<?php else : ?>
		<p><?php echo $this->lang->line('no_preview_available'); ?>.</p>
	<?php endif; ?>
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('existing_video'); ?></label>
	<br>
	<?php if (html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->room_video)) : ?>
		<embed src="<?php echo base_url(); ?>uploads/rooms/<?php echo html_escape($this->db->get_where('room', array('room_id' => $param2))->row()->room_video); ?>" width="100%" height="640px" class="img-thumbnail thumb128">
	<?php else : ?>
		<p><?php echo $this->lang->line('no_preview_available'); ?>.</p>
	<?php endif; ?>
</div>
<div class="form-group">
	<label><?php echo $this->lang->line('for_new_image'); ?></label>
	<br>
	<img id="image-preview1" width="90px" src="<?php echo base_url('assets/img/tenant.png'); ?>" class="media-object" />
	<img id="image-preview2" width="90px" src="<?php echo base_url('assets/img/tenant.png'); ?>" class="media-object" />
	<img id="image-preview3" width="90px" src="<?php echo base_url('assets/img/tenant.png'); ?>" class="media-object" />
	<img id="image-preview4" width="90px" src="<?php echo base_url('assets/img/tenant.png'); ?>" class="media-object" />
	<br>
	<br>
	<span class="btn btn-primary fileinput-button">
		<i class="fa fa-plus"></i>
		<span><?php echo $this->lang->line('add_file'); ?></span>
		<input onchange="readImageURL1(this);" class="form-control" type="file" name="picture_room_1">
	</span>
	<span class="btn btn-primary fileinput-button">
		<i class="fa fa-plus"></i>
		<span><?php echo $this->lang->line('add_file'); ?></span>
		<input onchange="readImageURL2(this);" class="form-control" type="file" name="picture_room_2">
	</span>
	<span class="btn btn-primary fileinput-button">
		<i class="fa fa-plus"></i>
		<span><?php echo $this->lang->line('add_file'); ?></span>
		<input onchange="readImageURL3(this);" class="form-control" type="file" name="picture_room_3">
	</span>
	<span class="btn btn-primary fileinput-button">
		<i class="fa fa-plus"></i>
		<span><?php echo $this->lang->line('add_file'); ?></span>
		<input onchange="readImageURL4(this);" class="form-control" type="file" name="picture_room_4">
	</span>

</div>
<div class="form-group">
	<label><?php echo $this->lang->line('for_new_video'); ?></label>
	<br>
<span class="btn btn-primary fileinput-button">
		<i class="fa fa-plus"></i>
		<span><?php echo $this->lang->line('add_file'); ?></span>
		<input class="form-control" type="file" name="room_video">
	</span>
</div>

<button type="submit" class="mb-sm btn btn-primary"><?php echo $this->lang->line('update'); ?></button>
<?php echo form_close(); ?>

<script>
	$('#edit_room').parsley();
</script>
<script>
	$('#change_tenant_image').parsley();

	function readImageURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image-preview1')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	function readImageURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image-preview2')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
	function readImageURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image-preview3')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }function readImageURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image-preview4')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>