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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Clients FeedBack</strong>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <?php if(count($manager_feedback)>0) { ?>
                                <?php for ($i = 0; $i < count($manager_feedback); $i++) { ?>
                                    <div class="timeline-item">
                                        <div class="timeline-segment">
                                            <?php echo $i+1;?>
                                        </div>
                                        <div class="timeline-content">
                                            <div class="timeline-row">
                                                <a href="#"><?php echo $manager_feedback[$i]['user']?></a>
                                                <small>(on Project: <b><?php echo $manager_feedback[$i]['project']?></b> at <?php echo date('jS-M, Y g:i a',strtotime($manager_feedback[$i]['date']))?>)</small>
                                            </div>
                                            <div class="timeline-row">
                                                <?php echo $manager_feedback[$i]['feedback']?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>

            <!--edit-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Managers FeedBack</strong>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <ul class="timeline-item" id="nt-example3">
                            <?php if(count($manager_feedback)>0) { ?>
                                <?php for ($i = 0; $i < count($manager_feedback); $i++) { ?>

                                    <li class="timeline-item">

                                        <div class="timeline-segment">
                                            <img class="timeline-media img-circle" width="40" height="40" src="<?php echo base_url(). 'assets/img/0299419341.jpg'; ?>" alt="Harry Jones">
                                        </div>
                                        <!--<div class="timeline-segment">
                                            <?php /*echo $i+1;*/?>
                                        </div>-->
                                        <div class="timeline-content">
                                            <div class="timeline-row">
                                                <a href="#"><?php echo $manager_feedback[$i]['user']?></a>
                                                <small>(on Project: <b><?php echo $manager_feedback[$i]['project']?></b> at <?php echo date('jS-M, Y g:i a',strtotime($manager_feedback[$i]['date']))?>)</small>
                                            </div>
                                            <div class="timeline-row">
                                                <?php echo $manager_feedback[$i]['feedback']?>
                                            </div>
                                        </div>
                                    </li>
                                <?php }
                            }
                            ?>
                            </ul>

                        </div>

                    </div>
                    <button class="btn btn-primary btn-sm btn-block" type="button">See all</button>
                </div>
            </div>
        </div>



        <div class="row">
            <!------------------------------------>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions">

                            <button type="button" class="card-action card-reload" title="Reload"></button>

                        </div>
                        <strong>Team Feedback</strong>
                    </div>
                    <div class="card-body">
                        <div class="timeline">

                            <ul class="timeline-item" id="nt-example2">
                                <?php if(count($feedback)>0) { ?>
                                <?php for ($i = 0; $i < count($feedback); $i++) { ?>


                            <li class="timeline-item">
                                <div class="timeline-segment">
                                    <img class="timeline-media img-circle" width="40" height="40" src="<?php echo base_url(). 'assets/img/0299419341.jpg'; ?>" alt="Harry Jones">
                                </div>
                                <div class="timeline-content">
                                    <div class="timeline-row">
                                        <a href="#"><?php echo $feedback[$i]['user']?></a>
                                        <small>(On Task: <b><?php echo $feedback[$i]['task']?></b> at <?php echo date('jS-M, Y g:i a',strtotime($feedback[$i]['date']))?>)</small>

                                    </div>
                                    <div class="timeline-row">
                                        <?php echo $feedback[$i]['feedback']?>
                                    </div>
                                </div>
                            </li>
                                <?php } } ?>
                            </ul>
                        </div>
                        <button class="btn btn-primary btn-sm btn-block" type="button">See all</button>
                    </div>
                </div>
            </div>

            <!------------------------------------>


            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-actions">

                            <button type="button" class="card-action card-reload" title="Reload"></button>

                        </div>
                        <strong>Activity Log</strong>
                    </div>
                    <div class="card-body">
                        <div class="timeline">
                            <ul class="timeline-item" id="nt-example1">
                                <?php if(count($task_logs)>0) { ?>
                                <?php for ($i = 0; $i < count($task_logs); $i++) { ?>

                            <li class="timeline-item">

                                    <img class="timeline-media img-circle" width="40" height="40" src="<?php echo base_url(). 'assets/img/0299419341.jpg'; ?>" alt="Harry Jones">

                                <div class="timeline-content">
                                    <div class="timeline-row">
                                        <a href="#">Inantiated</a>
                                        <small>(at <?php echo date('jS-M, Y g:i a',strtotime($task_logs[$i]['date']))?>)</small>
                                    </div>
                                    <div class="timeline-row">
                                        <?php echo $task_logs[$i]['content']?>
                                    </div>
                                </div>
                            </li>
                                <?php } } ?>

                        </ul>
                        <a href="<?php echo base_url().'admin/activity_logs'?>" ><button class="btn btn-primary btn-sm btn-block" type="button">See all</button></a>
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>

     <!-- NewsTicker Plugin -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
