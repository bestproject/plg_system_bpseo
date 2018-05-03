<?php
/**
 * @package     ${package}
 *
 * @copyright   Copyright (C) ${build.date} ${copyrights}, Inc. All rights reserved.
 * @license     ${license.name}; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * System plugin helping webpage system optimization
 */
class PlgSystemBPSeo extends JPlugin
{
	/**
	 * 
	 */
	public function onAfterDispatch()
	{
		// Check that we are in the site application.
		if (JFactory::getApplication()->isClient('administrator'))
		{
			
		}

		return true;
	}
}
