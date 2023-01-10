<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Email_model extends CI_Model
{
    function send_invoice($invoice_id = '')
    {
        $invoice_number         =   $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->invoice_number;
        $system_name            =   $this->db->get_where('setting', array('setting_id' => 1))->row()->content;
        $name                   =   $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->tenant_name;
        $subject                =   'Hóa đơn điện tử số #'. $invoice_number . ' - ' . $system_name . ' kính gửi khách hàng ' .$name;
        $page_name              =   'contact';
        $from                   =   $this->db->get_where('setting', array('setting_id' => 7))->row()->content;
        $to                     =   $this->db->get_where('tenant', array('tenant_id' => $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->tenant_id))->row()->email;
        $message                =   $system_name.' xin trân trọng cảm ơn Qúy khách hàng đã tin tưởng sử dụng dịch vụ của chúng tôi.<br>'.$system_name.' vừa phát hành hóa đơn điện tử số #'. $invoice_number.'<br> Qúy khách vui lòng kiểm tra hóa đơn và thanh toán ( nếu chưa thanh toán ) sớm nhất có thể. Trân trọng/.';

        $data['title']          =   $this->db->get_where('setting', array('setting_id' => 1))->row()->content;
        $data['name']           =   $name;
        $data['message']        =   $message;
        $data['url']            =   base_url();
        $data['copyright']      =   $this->db->get_where('setting', array('setting_id' => 1))->row()->content;

        $body = $this->load->view('email/' . $page_name, $data, TRUE);

        $config['smtp_user']    =     $this->db->get_where('setting', array('setting_id' => 7))->row()->content;
        $config['smtp_pass']    =     $this->db->get_where('setting', array('setting_id' => 8))->row()->content;

        $this->email->initialize($config);

        if ($to) {
            if ($this->email->from($from, $system_name)->reply_to($from)->to($to)->subject($subject)->message($message)->attach('uploads/invoices/' . $invoice_number . '.pdf')->send()) {
                $this->session->set_flashdata('success', $this->lang->line('email_invoice_sent'));

                $email['email'] =   1;

                $this->db->where('invoice_id', $invoice_id);
                $this->db->update('invoice', $email);

                header('Location: ' . base_url('invoices'));
            } else {
                $this->session->set_flashdata('warning', $this->lang->line('email_not_sent'));

                header('Location: ' . base_url('invoices'));
            }
        } else {
            $this->session->set_flashdata('warning', $this->lang->line('email_not_found'));

            header('Location: ' . base_url('invoices'));
        }
    }
}
