<?php /* Smarty version Smarty-3.1.15, created on 2015-03-14 22:39:50
         compiled from "C:\xampp\htdocs\sonnik_new\cadmin\templates\details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173075504aaa6b86687-96323890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a502e95e93f7e9deaad5f563c29f6082cd5d4def' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sonnik_new\\cadmin\\templates\\details.tpl',
      1 => 1425459484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173075504aaa6b86687-96323890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'ev' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5504aaa6d047d2_95223919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5504aaa6d047d2_95223919')) {function content_5504aaa6d047d2_95223919($_smarty_tpl) {?><div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Events <a href="?page=ratings"> << Back </a>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo count($_smarty_tpl->tpl_vars['events']->value['events']);?>
</div>
                                <div>Total Events</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['events']->value['success'];?>
</div>
                                <div> Less than 3 milliseconds </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['events']->value['warning'];?>
</div>
                                <div>Less than 5 milliseconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $_smarty_tpl->tpl_vars['events']->value['danger'];?>
 (<?php echo $_smarty_tpl->tpl_vars['events']->value['groups'];?>
 Groups)</div>
                                <div>More than 5 milliseconds</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <h4><?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['region'];?>
 - <?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['sport'];?>
 - <?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['team1'];?>
 - <?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['team2'];?>
 - <?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['starttime'];?>
 </h4>
                <h5 class="bg-success"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['s_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['s_lname'];?>
 (<?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['s_login'];?>
) </h5>
                <h5 class="bg-info"> <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['operator'];?>
 </h5>
                <h5 class="bg-info"> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <?php echo $_smarty_tpl->tpl_vars['events']->value['game'][0]['model'];?>
 </h5>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped ">
                        <thead class="menu">
                        <tr>
                            <th>DateTime</th>
                            <th>Minute</th>
                            <th>Event</th>
                            <th>Delay</th>
                            <th>Offset</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['ev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ev']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ev']->key => $_smarty_tpl->tpl_vars['ev']->value) {
$_smarty_tpl->tpl_vars['ev']->_loop = true;
?>
                            <?php if (($_smarty_tpl->tpl_vars['ev']->value['offset']<=3000)) {?>
                                <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable('success', null, 0);?>
                            <?php } elseif (($_smarty_tpl->tpl_vars['ev']->value['offset']<=5000)) {?>
                                <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable('warning', null, 0);?>
                            <?php } elseif (($_smarty_tpl->tpl_vars['ev']->value['offset']>5000)) {?>
                                <?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable('danger', null, 0);?>
                            <?php }?>
                            <tr class="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
">
                                <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['dtime'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['eminute'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ev']->value['code'];?>
</td>
                                <td><?php echo round(($_smarty_tpl->tpl_vars['ev']->value['delay']/1000),1);?>
</td>
                                <td><?php echo round(($_smarty_tpl->tpl_vars['ev']->value['offset']/1000),1);?>
</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>

<?php }} ?>
