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
        <li class="breadcrumb-item active"><?php echo $this->lang->line('utilities'); ?></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
    <?php echo $this->lang->line('utilities_report_header'); ?> <?php echo $year = date('Y'); ?>
    </h1>
    <!-- end page-header -->

    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-lg-9">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-body -->
                <div class="panel-body">
                    <span class="pull-right hidden-print">
                        <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-white m-b-10 p-l-5 hidden-print">
                            <i class="fa fa-print t-plus-1 fa-fw fa-lg"></i> <?php echo $this->lang->line('print'); ?>
                        </a>
                    </span>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th><?php echo $this->lang->line('month'); ?></th>
                                    <th><?php echo $this->lang->line('year'); ?></th>
                                    <th><?php echo $this->lang->line('amount'); ?></th>
                                    <th><?php echo $this->lang->line('status'); ?></th>
                                    <th><?php echo $this->lang->line('date'); ?></th>
                                    <th><?php echo $this->lang->line('utility_bill_category'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                $utilities = $this->db->get_where('utility_bill', array('year' => $year))->result_array();
                                foreach ($utilities as $utility) :
                                ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td><?php echo $utility['month']; ?></td>
                                        <td><?php echo $utility['year']; ?></td>
                                        <td>
                                            <?php echo html_escape(number_format($utility['amount'])); ?>
                                            <?php echo $this->db->get_where('setting', array('name' => 'currency'))->row()->content; ?>
                                        </td>
                                        <td><?php echo $utility['status'] ? $this->lang->line('paid') : $this->lang->line('due'); ?></td>
                                        <td><?php echo date('d/m/Y', $utility['timestamp']); ?></td>
                                        <td><?php echo $this->db->get_where('utility_bill_category', array('utility_bill_category_id' => $utility['utility_bill_category_id']))->row()->name; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
        <!-- begin col-3 -->
        <div class="col-lg-3 hidden-print">
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

                    <button onclick="showSingleYearUtilitiesReport()" type="button" class="mb-sm btn btn-block btn-primary"><?php echo $this->lang->line('show'); ?></button>
                    <!-- <hr> -->
                    <!-- <button onclick="DownloadReport()" type="button" class="mb-sm btn btn-block btn-green"><?php echo $this->lang->line('download_report'); ?></button> -->
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-3 -->
    </div>
    <!-- end row -->
</div>
<!-- end #content -->

<script>
    function showSingleYearUtilitiesReport() {
        var year = $("#year").val();

        url = "<?php echo base_url(); ?>single_year_utilities_report/" + year;

        window.location = url;
    }

    function DownloadReport() {
        var year = $("#year").val();

        url = "<?php echo base_url(); ?>download_utilities_report/" + year;

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