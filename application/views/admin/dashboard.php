<div class="layout-content">
    <div class="layout-content-body">
        <div class="title-bar">
            <h1 class="title-bar-title">
                <?php /*$controller=$this->uri->segment(1);*/?>
                <span class="d-ib">Dashboard</span>
            </h1>
        </div>

        <div class="row gutter-xs">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-middle media-left">
                      <span class="bg-gray sq-64 circle">
                        <span class="icon icon-flag"></span>
                      </span>
                            </div>
                            <div class="media-middle media-body">
                                <h3 class="media-heading">
                                    <span class="fw-l"><?php /*echo $counters['total_tasks']*/?></span>
                                </h3>
                                <small><a href="<?php /*echo base_url(). 'admin/total_tasks'; */?>">Total Tasks</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-middle media-left">
                                <div class="media-chart">
                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#d9230f", "#777"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="64" width="64"></canvas>
                                </div>
                            </div>
                            <div class="media-middle media-body">
                                <h2 class="media-heading">
                                    <span class="fw-l"><?php /*echo $counters['complete']*/?></span>
                                </h2>
                                <small>Tasks Resolved</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-middle media-left">
                                <div class="media-chart">
                                    <canvas data-chart="doughnut" data-animation="false" data-labels='["Resolved", "Unresolved"]' data-values='[{"backgroundColor": ["#777", "#d9230f"], "data": [879, 377]}]' data-hide='["legend", "scalesX", "scalesY", "tooltips"]' height="64" width="64"></canvas>
                                </div>
                            </div>
                            <div class="media-middle media-body">
                                <h2 class="media-heading">
                                    <span class="fw-l"><?php /*echo $counters['incomplete']*/?></span>
                                </h2>
                                <small>Tasks Pending</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-middle media-left">
                          <span class="bg-gray sq-64 circle">
                            <span class="icon icon-gitlab"></span>
                          </span>
                            </div>
                            <div class="media-middle media-body">
                                <h3 class="media-heading">
                                    <span class="fw-l"><?php /*echo $counters['projects']*/?></span>
                                </h3>
                                <small><a href="<?php /*echo base_url().'admin/manage_projects'*/?>">Active Projects </a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-middle media-left">
                                <span class="bg-gray sq-64 circle">
                                    <span class="icon icon-archive"></span>
                                </span>
                            </div>
                            <div class="media-middle media-body">
                                <h2 class="media-heading">
                                    <span class="fw-l"><?php /*echo $counters['completed_projects']*/?></span>
                                </h2>
                                <small><a href="<?php /*echo base_url().'admin/completed_projects'*/?>">Completed Projects </a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-middle media-left">
                                <span class="bg-gray sq-64 circle">
                                    <span class="icon icon-yoast"></span>
                                </span>
                            </div>
                            <div class="media-middle media-body">
                                <h2 class="media-heading">
                                    <span class="fw-l"><?php /*echo $counters['seo_projects']*/?></span>
                                </h2>
                                <small><a href="<?php /*echo base_url().'admin/seo_started_projects'*/?>">SEO Projects </a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-middle media-left">
                                <span class="bg-gray sq-64 circle">
                                    <span class="icon icon-hand-stop-o"></span>
                                </span>
                            </div>
                            <div class="media-middle media-body">
                                <h2 class="media-heading">
                                    <span class="fw-l"><?php /*echo $counters['on_hold']*/?></span>
                                </h2>
                                <small><a href="<?php /*echo base_url().'admin/on_hold_projects'*/?>">On Hold </a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-middle media-left">
                                <span class="bg-gray sq-64 circle">
                                    <span class="icon icon-folder"></span>
                                </span>
                            </div>
                            <div class="media-middle media-body">
                                <h2 class="media-heading">
                                    <span class="fw-l"><?php /*echo $counters['queue']*/?></span>
                                </h2>
                                <small><a href="<?php /*echo base_url().'admin/queue_projects'*/?>">In Queue </a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>



        <div class="row">

        </div>
    </div>

     <!-- NewsTicker Plugin -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
