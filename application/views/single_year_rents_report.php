<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>"><?php echo $this->lang->line('dashboard'); ?></a></li>
        <li class="breadcrumb-item active"><?php echo $this->lang->line('reports'); ?></li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">
    <?php echo $this->lang->line('rents_report_header'); ?> <?php echo $year; ?>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th width="1%">#</th>
                                    <th><?php echo $this->lang->line('month'); ?></th>
                                    <th><?php echo $this->lang->line('year'); ?></th>
                                    <th><?php echo $this->lang->line('amount'); ?></th>
                                    <th><?php echo $this->lang->line('date'); ?></th>
                                    <th><?php echo $this->lang->line('invoice'); ?></th>
                                    <th><?php echo $this->lang->line('tenant'); ?></th>
                                    <th><?php echo $this->lang->line('status'); ?></th>
                                    <th><?php echo $this->lang->line('services'); ?></th>
                                    <th><?php echo $this->lang->line('service_costs'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                $tenant_rents = $this->db->get_where('tenant_rent', array('year' => $year))->result_array();
                                foreach ($tenant_rents as $tenant_rent) :
                                ?>
                                    <tr>
                                        <td><?php echo $count++; ?></td>
                                        <td><?php echo $tenant_rent['month']; ?></td>
                                        <td><?php echo $tenant_rent['year']; ?></td>
                                        <td><?php echo number_format($tenant_rent['amount']); ?></td>
                                        <td><?php echo date('d/m/Y', $tenant_rent['timestamp']); ?></td>
                                        <td><?php echo $this->db->get_where('invoice', array('invoice_id' => $tenant_rent['invoice_id']))->row()->invoice_number; ?></td>
                                        <td><?php echo $this->db->get_where('tenant', array('tenant_id' => $tenant_rent['tenant_id']))->row()->name; ?></td>
                                        <td><?php echo $tenant_rent['status'] ? $this->lang->line('paid') : $this->lang->line('due'); ?></td>
                                        <td>
                                            <?php
                                                $service_names = '';
                                                $service_costs = 0;
                                                $services = $this->db->get_where('invoice_service', array('invoice_id' => $tenant_rent['invoice_id'], 'year' => $year))->result_array();
                                                if (sizeof($services) > 0) {
                                                    foreach ($services as $key => $value) {
                                                        if ($key + 1 != sizeof($services))
                                                            $service_names .= $this->db->get_where('service', array('service_id' => $value['service_id']))->row()->name . ' & ';
                                                        else 
                                                            $service_names .= $this->db->get_where('service', array('service_id' => $value['service_id']))->row()->name;

                                                        $service_costs += $this->db->get_where('service', array('service_id' => $value['service_id']))->row()->cost;
                                                    }
                                                    echo $service_names;
                                                } else 
                                                    echo '-';
                                            ?>
                                        </td>
                                        <td><?php echo $service_costs > 0 ? number_format($service_costs) : '-'; ?></td>
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
        <div class="col-lg-3">
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

                    <button onclick="showSingleYearRentsReport()" type="button" class="mb-sm btn btn-block btn-primary"><?php echo $this->lang->line('show'); ?></button>
                    <hr>
                    <button onclick="DownloadReport()" type="button" class="mb-sm btn btn-block btn-green"><?php echo $this->lang->line('download_report'); ?></button>
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
    function showSingleYearRentsReport() {
        var year = $("#year").val();

        url = "<?php echo base_url(); ?>single_year_rents_report/" + year;

        window.location = url;
    }

    function DownloadReport() {
        var year = $("#year").val();

        url = "<?php echo base_url(); ?>download_rents_report/" + year;

        window.location = url;
    }
</script>