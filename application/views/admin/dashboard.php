<div class="container-fluid padded">

	<div class="row-fluid">

        <div class="span30">

            <!-- find me in partials/action_nav_normal -->

            <!--big normal buttons-->

            <div class="action-nav-normal">

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/manage_doctor">

                        <i class="icon-user-md" style="color: #4568DC"></i>

                        <span><?php echo get_phrase('doctor');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/manage_patient">

                        <i class="icon-user" style="color: #B06AB3"></i>

                        <span><?php echo get_phrase('patient');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/manage_nurse">

                        <i class="icon-plus-sign-alt" style=" color: #ee0979;"></i>

                        <span><?php echo get_phrase('nurse');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/manage_pharmacist">

                        <i class="icon-medkit" style="color: #191654"></i>

                        <span><?php echo get_phrase('pharmacist');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/manage_laboratorist">

                        <i class="icon-beaker" style="color: #ff6a00"></i>

                        <span><?php echo get_phrase('laboratorist');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/manage_accountant">

                        <i class="icon-money" style="color: #89253e"></i>

                        <span><?php echo get_phrase('accountant');?></span>

                        </a>

                    </div>

                </div>

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/view_appointment">

                        <i class="icon-exchange" style="color: #f79d00
"></i>

                        <span><?php echo get_phrase('appointment');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/view_payment">

                        <i class="icon-credit-card" style="color: #64f38c"></i>

                        <span><?php echo get_phrase('payment');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/view_blood_bank">

                        <i class="icon-tint" style="color: red;"></i>

                        <span><?php echo get_phrase('blood_bank');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/view_medicine">

                        <i class="icon-medkit" style="color: #fd746c;"></i>

                        <span><?php echo get_phrase('medicine');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/view_report/operation">

                        <i class="icon-reorder " style="color: #4568DC "></i>

                        <span><?php echo get_phrase('operation_report');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/view_report/birth">

                        <i class="icon-github-alt " style="color: #ee0979 "></i>

                        <span><?php echo get_phrase('birth_report');?></span>

                        </a>

                    </div>

                </div>

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/view_report/death">

                        <i class="icon-minus-sign " style="color:  blue "></i>

                        <span><?php echo get_phrase('death_report');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/view_bed_status">

                        <i class="icon-hdd" style="color:  #B06AB3"></i>

                        <span><?php echo get_phrase('bed_allotment');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/manage_noticeboard">

                        <i class="icon-columns" style="color:  #f79d00"></i>

                        <span><?php echo get_phrase('noticeboard');?></span>

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/system_settings">

                        <i class="icon-h-sign" style="color:  red"></i>

                        <span><?php echo get_phrase('settings');?></span>

                        </a>

                    </div>

                   <!--  <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/manage_language">

                        <i class="icon-globe"></i>

                        <span><?php echo get_phrase('language');?></span>

                        </a>

                    </div> -->

                    <div class="span2 action-nav-button">

                        <a href="<?php echo base_url();?>index.php?admin/backup_restore">

                        <i class="icon-download-alt" style="color:  #64f38c"></i>

                        <span><?php echo get_phrase('backup');?></span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!---DASHBOARD MENU BAR ENDS HERE-->

    </div>

    <hr />

    <div class="row-fluid">

    

    	<!-----CALENDAR SCHEDULE STARTS-->

        <div class="span6">

            <div class="box">

                <div class="box-header">

                    <div class="title">

                        <i class="icon-calendar"></i> <?php echo get_phrase('calendar_schedule');?>

                    </div>

                </div>

                <div class="box-content">

                    <div id="schedule_calendar">

                    </div>

                </div>

            </div>

        </div>

    	<!-----CALENDAR SCHEDULE ENDS-->

        

    	<!-----NOTICEBOARD LIST STARTS-->

        <div class="span6">

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="icon-reorder"></i> <?php echo get_phrase('noticeboard');?>

                    </span>

                </div>

                <div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">

                

                    <?php 

					$this->db->order_by('create_timestamp' , 'desc');

                    $notices	=	$this->db->get('noticeboard')->result_array();

                    foreach($notices as $row):

                    ?>

                    <div class="box-section news with-icons">

                        <div class="avatar blue">

                            <i class="icon-tag icon-2x"></i>

                        </div>

                        <div class="news-time">

                            <span><?php echo date('d',$row['create_timestamp']);?></span> <?php echo date('M',$row['create_timestamp']);?>

                        </div>

                        <div class="news-content">

                            <div class="news-title">

                                <?php echo $row['notice_title'];?>

                            </div>

                            <div class="news-text">

                                 <?php echo $row['notice'];?>

                            </div>

                        </div>

                    </div>

                    <?php endforeach;?>

                </div>

            </div>

        </div>

    	<!-----NOTICEBOARD LIST ENDS-->

    </div>

</div>



  

  

  <script>

  $(document).ready(function() {



    // page is now ready, initialize the calendar...



    $("#schedule_calendar").fullCalendar({

            header: {

                left: "prev,next",

                center: "title",

                right: "month,agendaWeek,agendaDay"

            },

            editable: 0,

            droppable: 0,

            events: [

					<?php 

					

                    $notices	=	$this->db->get('noticeboard')->result_array();

                    foreach($notices as $row):

                    ?>

					{

						title: "<?php echo $row['notice_title'];?>",

						start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),

						end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>)  

            		},

					<?php

					endforeach;

					?>

					]

        })



});

  </script>