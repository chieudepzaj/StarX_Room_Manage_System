<style>
	@page {
		size: A4
	}
</style>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right hidden-print">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('dashboard'); ?></a></li>
        <li class="breadcrumb-item active"><?php echo $this->lang->line('account'); ?></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
    <?php echo $this->lang->line('account_header'); ?> <?php echo $year; ?>
 </h1>
    <!-- end page-header -->
    <hr class="no-margin-top">
    <div class="col-lg-3 hidden-print" style="padding-left: 0;">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-body -->
                <div class="panel-body">
                    <div class="form-group">
                        <label><?php echo $this->lang->line('year'); ?> *</label>
                        <div>
                            <select style="width: 100%" class="form-control default-select2" data-parsley-required="true" name="year" id="year">
                                <option value=""><?php echo $this->lang->line('select_year'); ?></option>
                                <option <?php if ($year  == (date('Y') - 4)) echo 'selected'; ?> value="<?php echo date('Y') - 4; ?>"><?php echo date('Y') - 4; ?></option>
                                <option <?php if ($year  == (date('Y') - 3)) echo 'selected'; ?> value="<?php echo date('Y') - 3; ?>"><?php echo date('Y') - 3; ?></option>
                                <option <?php if ($year  == (date('Y') - 2)) echo 'selected'; ?> value="<?php echo date('Y') - 2; ?>"><?php echo date('Y') - 2; ?></option>
                                <option <?php if ($year  == (date('Y') - 1)) echo 'selected'; ?> value="<?php echo date('Y') - 1; ?>"><?php echo date('Y') - 1; ?></option>
                                <option <?php if ($year  == (date('Y'))) echo 'selected'; ?> value="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></option>
                                <option <?php if ($year  == (date('Y') + 1)) echo 'selected'; ?> value="<?php echo date('Y') + 1; ?>"><?php echo date('Y') + 1; ?></option>
                                <option <?php if ($year  == (date('Y') + 2)) echo 'selected'; ?> value="<?php echo date('Y') + 2; ?>"><?php echo date('Y') + 2; ?></option>
                                <option <?php if ($year  == (date('Y') + 3)) echo 'selected'; ?> value="<?php echo date('Y') + 3; ?>"><?php echo date('Y') + 3; ?></option>
                                <option <?php if ($year  == (date('Y') + 4)) echo 'selected'; ?> value="<?php echo date('Y') + 4; ?>"><?php echo date('Y') + 4; ?></option>
                            </select>
                        </div>
                    </div>

                    <button onclick="showSingleYearAccount()" type="button" class="mb-sm btn btn-block btn-primary"><?php echo $this->lang->line('show'); ?></button>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-12">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-body -->
                <div class="panel-body">
                     <span class="pull-right hidden-print">
                        <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5 hidden-print">
                            <i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> <?php echo $this->lang->line('print'); ?>
                        </a>
                    </span>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th width="1%">#</th>
                                <th><?php echo $this->lang->line('month'); ?></th>
                                <th><?php echo $this->lang->line('total_rents'); ?></th>
                                <th><?php echo $this->lang->line('paid_rents'); ?></th>
                                <th><?php echo $this->lang->line('due_rents'); ?></th>
                                <th><?php echo $this->lang->line('staff_salary'); ?></th>
                                <th><?php echo $this->lang->line('utility_bills'); ?></th>
                                <th><?php echo $this->lang->line('expenses'); ?></th>
                                <th><?php echo $this->lang->line('balance'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            $balance = 0;
                            $months = ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'];
                            foreach ($months as $month) :
                            ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo html_escape($this->lang->line($month)); ?></td>
                                    <td>
                                        <?php
                                        $this->db->select_sum('amount');
                                        $this->db->from('tenant_rent');
                                        $this->db->where('month', $month);
                                        $this->db->where('year', $year);

                                        $overall_amount = $this->db->get()->row()->amount;
                                        echo $overall_amount > 0 ? number_format($overall_amount) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->select_sum('amount');
                                        $this->db->from('tenant_rent');
                                        $this->db->where('status', 1);
                                        $this->db->where('month', $month);
                                        $this->db->where('year', $year);

                                        $paid_amount = $this->db->get()->row()->amount;
                                        echo $paid_amount > 0 ? number_format($paid_amount) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo ($overall_amount - $paid_amount) > 0 ? number_format($overall_amount - $paid_amount) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-'; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->select_sum('amount');
                                        $this->db->from('staff_salary');
                                        $this->db->where('status', 1);
                                        $this->db->where('month', $month);
                                        $this->db->where('year', $year);

                                        $staff_salary = $this->db->get()->row()->amount;
                                        echo $staff_salary > 0 ? number_format($staff_salary) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->select_sum('amount');
                                        $this->db->from('utility_bill');
                                        $this->db->where('status', 1);
                                        $this->db->where('month', $month);
                                        $this->db->where('year', $year);

                                        $utility_bills = $this->db->get()->row()->amount;
                                        echo $utility_bills > 0 ? number_format($utility_bills) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        $this->db->select_sum('amount');
                                        $this->db->from('expense');
                                        $this->db->where('month', $month);
                                        $this->db->where('year', $year);

                                        $expenses = $this->db->get()->row()->amount;
                                        echo $expenses > 0 ? number_format($expenses) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php 
                                        $balance += $paid_amount - $staff_salary - $utility_bills - $expenses;
                                        echo ($paid_amount - $staff_salary - $utility_bills - $expenses) ? number_format($paid_amount - $staff_salary - $utility_bills - $expenses) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-'; 
                                        ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td>#</td>
                                    <td>Tổng</td>
                                    <td>
                                        <?php
                                            $this->db->select_sum('amount');
                                            $this->db->from('tenant_rent');
                                            $this->db->where('year', $year);

                                            $total_tenant_rent = $this->db->get()->row()->amount;
                                            echo $total_tenant_rent > 0 ? number_format($total_tenant_rent) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $this->db->select_sum('amount');
                                            $this->db->from('tenant_rent');
                                            $this->db->where('status', 1);
                                            $this->db->where('year', $year);

                                            $total_tenant_rent_paid = $this->db->get()->row()->amount;
                                            echo $total_tenant_rent_paid > 0 ? number_format($total_tenant_rent_paid) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $this->db->select_sum('amount');
                                            $this->db->from('tenant_rent');
                                            $this->db->where('status', 0);
                                            $this->db->where('year', $year);

                                            $total_tenant_rent_paid = $this->db->get()->row()->amount;
                                            echo $total_tenant_rent_paid > 0 ? number_format($total_tenant_rent_paid) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                    <?php
                                            $this->db->select_sum('amount');
                                            $this->db->from('staff_salary');
                                            $this->db->where('year', $year);

                                            $total_staff_salary = $this->db->get()->row()->amount;
                                            echo $total_staff_salary > 0 ? number_format($total_staff_salary) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $this->db->select_sum('amount');
                                            $this->db->from('utility_bill');
                                            $this->db->where('year', $year);

                                            $total_utility_bill = $this->db->get()->row()->amount;
                                            echo $total_utility_bill > 0 ? number_format($total_utility_bill) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            $this->db->select_sum('amount');
                                            $this->db->from('expense');
                                            $this->db->where('year', $year);

                                            $total_expense = $this->db->get()->row()->amount;
                                            echo $total_expense > 0 ? number_format($total_expense) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content : '-';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo number_format($balance) . ' ' . $this->db->get_where('setting', array('name' => 'currency'))->row()->content;
                                        ?>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
        <!-- begin col-3 -->
        
        <!-- end col-3 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->

<script>
    function showSingleYearAccount() {
        var year = $("#year").val();

        url = "<?php echo base_url(); ?>single_year_account/" + year;

        window.location = url;
    }
</script>

<style>
	@media print {
		.hidden-print {
			display: none;
		}

		.invoice-header {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
		}

		.invoice-to {
			margin-top: 0 !important;
			text-align: center !important;
		}

		.invoice-date {
			margin-top: 0 !important;
			text-align: right !important;
		}

		.invoice-price {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			grid-gap: 10px;
			grid-auto-rows: 100px;
			grid-template-areas:
				"a a a a b b b b"
				"c c c c d d d d";
			align-items: end;
		}

		.invoice-price-left {
			grid-area: b;
		}

		.invoice-price-right {
			grid-area: d;
		}
	}
</style>
