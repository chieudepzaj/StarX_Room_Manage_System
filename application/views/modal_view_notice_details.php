<h3><?php echo $this->security->xss_clean($this->db->get_where('notice', array('notice_id' => $param2))->row()->title); ?></h3>
<p>
<?php echo $this->lang->line('published_on'); ?>: <?php echo date('d/m/Y', $this->db->get_where('notice', array('notice_id' => $param2))->row()->created_on); ?> 
&nbsp;&nbsp;&nbsp; 
<?php echo $this->lang->line('last_updated'); ?>: <?php echo date('d/m/Y', $this->db->get_where('notice', array('notice_id' => $param2))->row()->timestamp); ?>
</p>
<hr>
<p><?php echo $this->security->xss_clean($this->db->get_where('notice', array('notice_id' => $param2))->row()->notice); ?></p>
<?php
$this->model->update_notice_seen($param2);
?>