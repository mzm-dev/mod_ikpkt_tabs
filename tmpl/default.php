<?php
/**
 * @version     1.0
 * @package     mod_ikpkt_tabs
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @author      Mohamad Zaki Mustafa <mohdzaki04@gmail.com>
 */
//No Direct Access
defined('_JEXEC') or die;
?>

<div class="panel panel-tab">
    <ul class="nav nav-tabs nav-justified" id="myTab1">
        <li class="active"><a data-toggle="tab" href="#labelTab1"><?php echo $tab1_title; ?></a></li>
        <li class=""><a data-toggle="tab" href="#labelTab2"><?php echo $tab2_title; ?></a></li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div id="labelTab1" class="tab-pane fade active in">
            <?php echo $tab1_body; ?>
        </div>
        <div id="labelTab2" class="tab-pane fade">
            <?php echo $tab2_body; ?>
        </div>
    </div>
</div>
