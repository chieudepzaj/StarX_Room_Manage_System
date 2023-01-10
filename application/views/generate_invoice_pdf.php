<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <style>
    * {
        font-family: DejaVu Sans, sans-serif;
    }

    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding-top: 30px;
        /* border: 1px solid #eee; */
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(4) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 24px;
        line-height: 24px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(4) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(4) {
        text-align: left;
    }

    .font-weight {
        font-weight: 600;
    }
    .logo{
        background-image: url(/mars/uploads/website/pdf-icon.png);
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
    }
    </style>
</head>

<body>
    <?php
    $tenant_id = $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->tenant_id;
    $invoice_type = $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->invoice_type;
    $tenant_rents = $this->db->get_where('tenant_rent', array('invoice_id' => $invoice_id))->result_array();

    $invoice_total = 0;
    ?>
    <div class="invoice-box logo">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title font-weight">
                                <?php echo $this->db->get_where('setting', array('name' => 'system_name'))->row()->content. ' - ' .$this->db->get_where('setting', array('name' => 'tagline'))->row()->content; ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <?php echo $this->lang->line('invoice'); ?>:
                                <strong>#<?php echo $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->invoice_number; ?></strong><br>
                                <?php echo $this->lang->line('created_on'); ?>:
                                <b><?php echo date('d/m/Y', $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->created_on); ?></b><br>
                                <?php echo $this->lang->line('due'); ?>:
                                <b><?php echo date('d/m/Y', $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->due_date); ?></b><br>
                                <?php echo $this->lang->line('status'); ?>:
                                <?php echo $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->status ? $this->lang->line('paid') : $this->lang->line('due'); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="4">
                    <table>
                        <tr>
                            <td>
                                <p>Tên người bán:</p>
                                <strong><?php echo html_escape($this->db->get_where('setting', array('name' => 'system_name'))->row()->content); ?></strong>
                                <br>
                                <?php echo $this->db->get_where('setting', array('name' => 'address'))->row()->content; ?>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <p>Tên người mua:</p>
                                <strong><?php echo $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->tenant_name; ?></strong><br>
                                <?php echo $this->db->get_where('tenant', array('tenant_id' => $tenant_id))->row()->work_address; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td><?php echo $this->lang->line('description'); ?></td>
                <?php if ($invoice_type == 0) : ?>
                <td><?php echo $this->lang->line('starting_date'); ?></td>
                <td><?php echo $this->lang->line('ending_date'); ?></td>
                <?php else : ?>
                <td><?php echo $this->lang->line('month'); ?></td>
                <td><?php echo $this->lang->line('year'); ?></td>
                <?php endif; ?>
                <td><?php echo $this->lang->line('row_total'); ?></td>
            </tr>
            <?php if ($invoice_type == 0) : ?>
            <?php // foreach ($tenant_rents as $tenant_rent) : 
                ?>
            <tr class="item">
                <td><?php echo $this->lang->line('date_range_rent'); ?></td>
                <td><?php echo date('d/m/Y', $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->start_date); ?>
                </td>
                <td><?php echo date('d/m/Y', $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->end_date); ?>
                </td>
                <td>
                    <?php
                        $this->db->select_sum('amount');
                        $this->db->from('tenant_rent');
                        $this->db->where('invoice_id', $invoice_id);
                        $query = $this->db->get();

                        $invoice_total += $query->row()->amount;

                        echo number_format($query->row()->amount);
                        ?>
                    <?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>
                </td>
            </tr>
            <?php
				$invoice_services_total = 0;
				$invoice_services = $this->db->get_where('invoice_service', array('invoice_id' => $invoice_id))->result_array();
				foreach ($invoice_services as $invoice_service):
				?>
                <tr class = "item">
                    <td><span class="text-inverse"><?php echo $this->db->get_where('service', array('service_id' => $invoice_service['service_id']))->row()->name; ?></span>
                    </td>
                    <td class="text-center"><?php echo $invoice_service['month'] . ', ' . $invoice_service['year']; ?></td>
                    <td class="text-center"><?php echo $invoice_service['month'] . ', ' . $invoice_service['year']; ?></td>
                    <td class="text-right">
                        <?php echo number_format($this->db->get_where('service', array('service_id' => $invoice_service['service_id']))->row()->cost); ?>
                        <?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>
                        <?php $invoice_services_total += $this->db->get_where('service', array('service_id' => $invoice_service['service_id']))->row()->cost; ?>
                    </td>
                </tr>
            <?php 
				endforeach; 
				?>
                <?php $late_fee = $this->db->get_where('invoice', array('invoice_id' => $invoice_id))->row()->late_fee;?>
                <?php if ($late_fee > 0) : ?>
				<tr class = "item">
					<td><span class="text-inverse"><?php echo $this->lang->line('late_fee'); ?></span></td>
					<td class="text-center">-</td>
					<td class="text-center">-</td>
					<td class="text-right">
						<?php echo number_format($late_fee); ?>
						<?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>
					</td>
					</tr>
				<?php endif; ?>
            <?php // endforeach; 
                ?>
            <?php else : ?>
            <?php foreach ($tenant_rents as $tenant_rent) : ?>
            <tr class="item">
                <td><?php echo $this->lang->line('monthly_rent'); ?></td>
                <td><?php echo $tenant_rent['month']; ?></td>
                <td><?php echo $tenant_rent['year']; ?></td>
                <td>
                    <?php 
                                $invoice_total += $tenant_rent['amount'];
                                echo number_format($tenant_rent['amount']); 
                                ?>
                    <?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>

            <tr class="total">
                <td></td>
                <td></td>
                <td></td>
                <td><?php echo $this->lang->line('total'); ?>:
                    <?php echo number_format($invoice_total + $late_fee + $invoice_services_total) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>