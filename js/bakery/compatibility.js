/**
 * @category    ONE
 * @package     KidsPlaza
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

var isBootstrapEvent = false;
if (window.jQuery) {
    jQuery('*').on('hide.bs.popover', function(){ isBootstrapEvent = true; });
    jQuery('*').on('hide.bs.dropdown', function(){ isBootstrapEvent = true; });
    jQuery('*').on('hide.bs.collapse', function(){ isBootstrapEvent = true; });
    jQuery('*').on('hide.bs.modal', function(){ isBootstrapEvent = true; });
}
