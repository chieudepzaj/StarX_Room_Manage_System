<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('dashboard'); ?></a></li>
        <li class="breadcrumb-item active"><?php echo $this->lang->line('website_settings'); ?></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
        <?php echo $this->lang->line('website_settings_header'); ?>
 </h1>
    <!-- end page-header -->
    <hr class="no-margin-top">

    <!-- begin row -->
    <div class="row">
        <div class="col-lg-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title"><?php echo $this->lang->line('edit_system_settings'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <?php echo form_open('website_settings/update', array('method' => 'post', 'data-parsley-validate' => 'true')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('system_name'); ?> *</label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'system_name'))->row()->content); ?>" alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content; ?>" type="text" name="system_name" placeholder="Enter system name" class="form-control" data-parsley-required="true">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('tagline'); ?> *</label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'tagline'))->row()->content); ?>" type="text" name="tagline" placeholder="Enter tagline" class="form-control" data-parsley-required="true">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('address'); ?></label>
                        <input name="address_line_1" value="<?php echo html_escape(explode('<br>', $this->db->get_where('setting', array('name' => 'address'))->row()->content)[0]); ?>" type="text" placeholder="Enter address line 1" class="form-control">
                    </div>
                    <div class="form-group">
                        <input name="address_line_2" value="<?php echo html_escape(explode('<br>', $this->db->get_where('setting', array('name' => 'address'))->row()->content)[1]); ?>" type="text" placeholder="Enter address line 2" class="form-control">
                    </div>
                    <!-- <div class="form-group">
						<label><?php echo $this->lang->line('system_font'); ?> *</label>
						<select style="width: 100%" class="form-control default-select2" name="font" data-parsley-required="true">
							<option value=""><?php echo $this->lang->line('select_font'); ?></option>
                            <option <?php if ('Helvetica' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Helvetica">Helvetica</option>
							<option <?php if ('PT Sans Narrow' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="PT Sans Narrow">PT Sans Narrow</option>
							<option <?php if ('Josefin Sans' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Josefin Sans">Josefin Sans</option>
							<option <?php if ('Titillium Web' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Titillium Web">Titillium Web</option>
							<option <?php if ('Mukta' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Mukta">Mukta</option>
							<option <?php if ('PT Sans' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="PT Sans">PT Sans</option>
							<option <?php if ('Rubik' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Rubik">Rubik</option>
							<option <?php if ('Oswald' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Oswald">Oswald</option>
							<option <?php if ('Poppins' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Poppins">Poppins</option>
							<option <?php if ('Open Sans' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Open Sans">Open Sans</option>
							<option <?php if ('Cantarell' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Cantarell">Cantarell</option>
							<option <?php if ('Ubuntu' == $this->security->xss_clean($this->db->get_where('setting', array('name' => 'font_family'))->row()->content)) echo 'selected'; ?> value="Ubuntu">Ubuntu</option>
						</select>
					</div> -->
                    <div class="form-group">
                        <label><?php echo $this->lang->line('currency'); ?> *</label>
                        <div>
                            <select style="width: 100%" class="form-control default-select2" data-parsley-required="true" name="currency">
                                <option value=""><?php echo $this->lang->line('select_currency'); ?></option>
                                <?php
                                $currencies = $this->db->get('currency')->result_array();
                                foreach ($currencies as $currency) :
                                ?>
                                    <option <?php if ($this->db->get_where('setting', array('name' => 'currency'))->row()->content == $currency['code']) echo 'selected'; ?> value="<?php echo html_escape($currency['code']); ?>"><?php echo html_escape($currency['name']); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label>Automatic Late Fee Add Day (of Month)</label>
                        <input value="<?php // echo html_escape($this->db->get_where('setting', array('name' => 'automatic_late_fee_add_day'))->row()->content); 
                                        ?>" type="text" name="automatic_late_fee_add_day" placeholder="i. e. 19" class="form-control">
                    </div> -->
                    <!-- <div class="form-group">
                        <label><?php echo $this->lang->line('language'); ?> * (Website Language)</label>
                        <div>
                            <select style="width: 100%" class="form-control default-select2" data-parsley-required="true" name="language">
                                <option value=""><?php echo $this->lang->line('select_language'); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'vietnamese') echo 'selected'; ?> value="<?php echo html_escape('vietnamese'); ?>"><?php echo html_escape($this->lang->line('vietnamese')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'dutch') echo 'selected'; ?> value="<?php echo html_escape('dutch'); ?>"><?php echo html_escape($this->lang->line('dutch')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'english') echo 'selected'; ?> value="<?php echo html_escape('english'); ?>"><?php echo html_escape($this->lang->line('english')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'french') echo 'selected'; ?> value="<?php echo html_escape('french'); ?>"><?php echo html_escape($this->lang->line('french')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'german') echo 'selected'; ?> value="<?php echo html_escape('german'); ?>"><?php echo html_escape($this->lang->line('german')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'greek') echo 'selected'; ?> value="<?php echo html_escape('greek'); ?>"><?php echo html_escape($this->lang->line('greek')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'icelandic') echo 'selected'; ?> value="<?php echo html_escape('icelandic'); ?>"><?php echo html_escape($this->lang->line('icelandic')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'indonesian') echo 'selected'; ?> value="<?php echo html_escape('indonesian'); ?>"><?php echo html_escape($this->lang->line('indonesian')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'italian') echo 'selected'; ?> value="<?php echo html_escape('italian'); ?>"><?php echo html_escape($this->lang->line('italian')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'japanese') echo 'selected'; ?> value="<?php echo html_escape('japanese'); ?>"><?php echo html_escape($this->lang->line('japanese')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'polish') echo 'selected'; ?> value="<?php echo html_escape('polish'); ?>"><?php echo html_escape($this->lang->line('polish')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'portuguese') echo 'selected'; ?> value="<?php echo html_escape('portuguese'); ?>"><?php echo html_escape($this->lang->line('portuguese')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'spanish') echo 'selected'; ?> value="<?php echo html_escape('spanish'); ?>"><?php echo html_escape($this->lang->line('spanish')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'thai') echo 'selected'; ?> value="<?php echo html_escape('thai'); ?>"><?php echo html_escape($this->lang->line('thai')); ?></option>
                                <option <?php if ($this->db->get_where('setting', array('name' => 'language'))->row()->content == 'turkish') echo 'selected'; ?> value="<?php echo html_escape('turkish'); ?>"><?php echo html_escape($this->lang->line('turkish')); ?></option>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label><?php echo $this->lang->line('copyright'); ?> *</label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'copyright'))->row()->content); ?>" alt="<?php echo $this->db->get_where('setting', array('name' => 'copyright'))->row()->content; ?>" type="text" name="copyright" placeholder="Enter copyright" class="form-control" data-parsley-required="true">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('copyright_url'); ?> *</label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'copyright_url'))->row()->content); ?>" alt="<?php echo $this->db->get_where('setting', array('name' => 'copyright_url'))->row()->content; ?>" type="text" name="copyright_url" placeholder="Enter copyright" class="form-control" data-parsley-required="true">
                    </div>

                    <button type="submit" class="mb-sm btn btn-primary"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
		<div class="col-lg-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title"><?php echo $this->lang->line('edit_login_background'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <?php echo form_open_multipart('website_settings/login_bg', array('method' => 'post', 'data-parsley-validate' => 'true')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('login_bg_preview'); ?> *</label>
                        <br>
                        <img width="100%"  src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('setting', array('name' => 'login_bg'))->row()->content; ?>" alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content; ?>" class="img-responsive">
                    </div>
                    <div class="note note-yellow m-b-15">
                        <span><?php echo $this->lang->line('login_bg_note'); ?></span>
                    </div>
                    <span class="btn btn-primary fileinput-button">
                        <i class="fa fa-plus"></i>
                        <span><?php echo $this->lang->line('add_file'); ?></span>
                        <input class="form-control" type="file" name="login_bg" data-parsley-required="true">
                    </span><br><br>

                    <button type="submit" class="mb-sm btn btn-primary"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->
        <!-- begin col-6 -->
        <div class="col-lg-6">            
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title"><?php echo $this->lang->line('smtp_settings'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <div class="note note-yellow">
                        <ul style="margin-bottom: 0">
                            <li><?php echo $this->lang->line('smtp_note_1'); ?></li>
                            <li><?php echo $this->lang->line('smtp_note_2'); ?>: <a href="https://myaccount.google.com/apppasswords" target="_blank"><?php echo $this->lang->line('smtp_link'); ?> <i class="fa fa-external-link-alt"></i></a></li>
                            <li><?php echo $this->lang->line('smtp_note_3'); ?></li>
                        </ul>
                    </div>
                    <?php echo form_open('website_settings/update_smtp', array('method' => 'post', 'data-parsley-validate' => 'true')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('smtp_email'); ?></label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'smtp_user'))->row()->content); ?>" alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content; ?>" type="text" name="smtp_user" placeholder="<?php echo $this->lang->line('smtp_email_ph'); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('smtp_password'); ?></label>
                        <input value="<?php echo html_escape($this->db->get_where('setting', array('name' => 'smtp_pass'))->row()->content); ?>" type="password" name="smtp_pass" placeholder="<?php echo $this->lang->line('smtp_email_ph'); ?>" class="form-control">
                    </div>

                    <button type="submit" class="mb-sm btn btn-primary"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                    <hr>
                    <?php echo form_open('website_settings/delete_smtp', array('method' => 'post')); ?>
                    <button type="submit" class="mb-sm btn btn-warning"><?php echo $this->lang->line('remove'); ?></button>
                    <?php echo form_close(); ?>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
		<div class="col-lg-6">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title"><?php echo $this->lang->line('edit_favicon'); ?></h4>
				</div>
				<!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <?php echo form_open_multipart('website_settings/update_favicon', array('method' => 'post', 'data-parsley-validate' => 'true')); ?>
                    <div class="form-group">
                        <label><?php echo $this->lang->line('favicon_preview'); ?> *</label>
                        <br>
                        <img style="width: 80px" src="<?php echo base_url(); ?>uploads/website/<?php echo $this->db->get_where('setting', array('name' => 'favicon'))->row()->content; ?>" alt="<?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content; ?>" class="img-responsive">
                    </div>
                    <div class="note note-yellow m-b-15">
                        <span><?php echo $this->lang->line('favicon_note'); ?></span>
                    </div>
                    <span class="btn btn-primary fileinput-button">
                        <i class="fa fa-plus"></i>
                        <span><?php echo $this->lang->line('add_file'); ?></span>
                        <input class="form-control" type="file" name="favicon" data-parsley-required="true">
                    </span><br><br>

                    <button type="submit" class="mb-sm btn btn-primary"><?php echo $this->lang->line('update'); ?></button>
                    <?php echo form_close(); ?>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->          
        </div>
        <!-- end col-6 -->
        
    </div>
    <!-- end row -->
</div>
<!-- end #content -->