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

$tab1_title = $params->get('tab1_title');
$tab1_body = $params->get('tab1_body');
$tab2_title = $params->get('tab2_title');
$tab2_body = $params->get('tab2_body');

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

require JModuleHelper::getLayoutPath('mod_ikpkt_tabs', $params->get('layout', 'default'));