<?php

/*
 * AfterLogic Admin Panel by AfterLogic Corp. <support@afterlogic.com>
 *
 * Copyright (C) 2002-2011  AfterLogic Corp. (www.afterlogic.com)
 * Distributed under the terms of the license described in COPYING
 *
 */


	defined('WM_INSTALLER_PATH') || define('WM_INSTALLER_PATH', (dirname(__FILE__).'/'));

	include WM_INSTALLER_PATH.'installer.php';

	$oInstaller = new CInstaller();
	$oInstaller->Run();