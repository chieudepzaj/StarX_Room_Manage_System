<style>
.modal-dialog {
    max-width: 550px !important;
}
</style>
<?php echo form_open('tenants/edit_tenant_account/' . $param2, array('id' => 'edit_tenant_account', 'method' => 'post', 'data-parsley-validate' => 'true')); ?>
<?php
$tenant_info = $this->db->get_where('tenant', array('tenant_id' => $param2))->result_array();
foreach ($tenant_info as $tenant) :
?>
<div class="form-group">
    <label><?php echo $this->lang->line('email'); ?> * (<?php echo $this->lang->line('for_tenant_login'); ?>)</label>
    <?php
				if ($this->db->get_where('user', array('user_type' => 3, 'person_id' => $tenant['tenant_id']))->num_rows() > 0) {
					$tenant_email = $this->db->get_where('user', array('user_type' => 3, 'person_id' => $tenant['tenant_id']))->row()->email;
				} else {
					$tenant_email = '';
				}
				?>
    <input value="<?php echo html_escape($tenant['email']); ?>" type="email" name="email"
        placeholder="<?php echo $this->lang->line('enter_email'); ?>" class="form-control" data-parsley-required="true">
</div>
<div class="form-group">
    <label><?php echo $this->lang->line('password'); ?> *</label>
    <input type="password" placeholder="<?php echo $this->lang->line('enter_password'); ?>" name="new_password"
        id="password-indicator-visible" class="form-control m-b-5 remove_red_eye">
    <div id="passwordStrengthDiv2" class="is0 m-t-5"></div>
</div>
<div class="note note-yellow m-b-15">
    <span><?php echo $this->lang->line('default_password'); ?></span>
</div>
<div class="form-group">
    <label><?php echo $this->lang->line('confirm_password'); ?> *</label>
    <input type="password" name="confirm_password"
        placeholder="<?php echo $this->lang->line('confirm_password_placeholder'); ?>" class="form-control">
</div>

<button type="submit" class="mb-sm btn btn-primary"><?php echo $this->lang->line('update'); ?></button>
<?php endforeach; ?>
<?php echo form_close(); ?>

<script>
$('#edit_tenant_account').parsley();
FormPlugins.init();

$('.modal-dialog').css('max-width', '1080px');

$('select:not(.normal)').each(function() {
    $(this).select2({
        dropdownParent: $(this).parent()
    });
});
</script>