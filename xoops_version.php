<?php
/**
* SmartMail version infomation
*
* This file holds are the configuration information of this module
*
* @copyright	http://smartfactory.ca The SmartFactory
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @since		1.0
* @author		http://inboxinternational.com INBOX International inc.
* @version		$Id$
*/

if (!defined("XOOPS_ROOT_PATH")) die("Root path not defined");

// if ImpressCMS...
if (defined("ICMS_ROOT_PATH")) {
	/**
	 * For now, let's manually include icms_version.php. In ImpressCMS 1.2, this shall be done automatically of course :-)'
	 */
	//global $modversion;
	include(dirname( __FILE__ ) . '/icms_version.php');
} else{
	$modversion['name'] = _NL_MI_NAME;
	$modversion['version'] = 0.81;
	$modversion['description'] = _NL_MI_DESC;
	$modversion['author'] = "The SmartFactory [www.smartfactory.ca]";
	$modversion['credits'] = "This module is based on the Newsletter module originally developed by <a href='http://www.cusix.dk'>Jan Keller Pedersen</a>. SmartMail was made possible by the sponsorship of <a href='http://www.ampersandesign.net/'>Ampersand Design</a>, <a href='http://inboxinternational.com'>INBOX Solutions</a>, American Killfish Association, Crispin Moorey and Jereco Marketing.";
	$modversion['help'] = "";
	$modversion['license'] = "GPL see XOOPS LICENSE";
	$modversion['official'] = 0;
	$modversion['image'] = "images/module_logo.gif";
	$modversion['dirname'] = "smartmail";

	$modversion['image'] = "images/module_logo.gif";
	$modversion['iconsmall'] = "images/icon_small.png";
	$modversion['iconbig'] = "images/icon_big.png";
	// for backward compatibility
	$modversion['image'] = $modversion['iconbig'];


	// Added by marcan for the About page in admin section
	$modversion['developer_website_url'] = "http://smartfactory.ca";
	$modversion['developer_website_name'] = "The SmartFactory";
	$modversion['developer_email'] = "info@smartfactory.ca";
	$modversion['status_version'] = "Beta 1";
	$modversion['status'] = "Beta";
	$modversion['date'] = "Unreleased";

	$modversion['people']['developers'][] = "marcan (Marc-Andr� Lanciault)";
	$modversion['people']['developers'][] = "Mithrandir (Jan Keller Pedersen)";
	$modversion['people']['developers'][] = "Sudhaker (Sudhaker Raj)";

	$modversion['people']['testers'][] = "Andy Cleff";

	//$modversion['people']['translators'][] = "translator 1";

	//$modversion['people']['documenters'][] = "documenter 1";

	//$modversion['people']['other'][] = "other 1";

	$modversion['warning'] = _CO_SOBJECT_WARNING_BETA;

	$modversion['demo_site_url'] = "http://inboxfactory.net/smartmail";
	$modversion['demo_site_name'] = "SmartMail Sandbox";
	$modversion['support_site_url'] = "http://smartfactory.ca/modules/newbb/viewforum.php?forum=27";
	$modversion['support_site_name'] = "SmartMail Community Support Forum";
	$modversion['submit_bug'] = "http://dev.xoops.org/modules/xfmod/tracker/?group_id=1352&atid=1562";
	$modversion['submit_feature'] = "http://dev.xoops.org/modules/xfmod/tracker/?group_id=1352&atid=1565";

	$modversion['author_word'] = "";

	$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

	$modversion['onInstall'] = "include/onupdate.inc.php";
	$modversion['onUpdate'] = "include/onupdate.inc.php";

	$modversion['css'] = "css/newsletter.css";

	//$modversion['onUpdate'] = "include/update.php";

	// Tables created by sql file (without prefix!)
	$modversion['tables'][] = "smartmail_rule";
	$modversion['tables'][] = "smartmail_dispatch";
	$modversion['tables'][] = "smartmail_block";
	$modversion['tables'][] = "smartmail_subscriber";
	$modversion['tables'][] = "smartmail_newsletter";
	$modversion['tables'][] = "smartmail_job";
	$modversion['tables'][] = "smartmail_recipient";
	$modversion['tables'][] = "smartmail_jobattachment";

	// Admin things
	$modversion['hasAdmin'] = 1;
	$modversion['adminindex'] = "admin/newsletter.php";
	$modversion['adminmenu'] = "admin/menu.php";

	$modversion['hasMain'] = 1;

	$modversion['blocks'][1] = array('file' => "subscription_block.php",
	                                'name' => _NL_MI_B_NEWSLETTER,
	                                'description' => "Subscribe/unsubscribe to/from newsletters",
	                                'show_func' => "b_subscription_show",
	                                'edit_func' => "b_subscription_edit",
	                                'template' => 'smartmail_subscription_block.html');

	$modversion['blocks'][2] = array('file' => "custom.php",
									'name' => _NL_MI_B_CUSTOM,
	                                'description' => "Add custom content",
	                                'show_func' => "b_smartmail_custom_show",
	                                'edit_func' => "b_smartmail_custom_edit",
	                                'options' => "|1",
	                                'template', 'smartmail_custom.html');

	// Templates

	$modversion['templates'][] = array('file' => "smartmail_header.html",
	                                    'description' => "Template header");

	$modversion['templates'][] = array('file' => "smartmail_footer.html",
	                                    'description' => "Template footer");

	$modversion['templates'][] = array('file' => "smartmail_login.html",
	                                    'description' => "Login form");

	$modversion['templates'][] = array('file' => "smartmail_newsletter_list.html",
	                                    'description' => "Newsletter form");

	$modversion['templates'][] = array('file' => "smartmail_admin_list.html",
	                                    'description' => "Newsletter listing");

	$modversion['templates'][] = array('file' => "smartmail_admin_dispatch_list.html",
	                                    'description' => "Newsletter dispatch listing");

	$modversion['templates'][] = array('file' => "smartmail_admin_dispatch_edit.html",
	                                    'description' => "Dispatch edit form");

	$modversion['templates'][] = array('file' => "smartmail_admin_newsletter_details.html",
	                                    'description' => "Newsletter Details");

	$modversion['templates'][] = array('file' => "smartmail_admin_block_list.html",
	                                    'description' => "Newsletter block listing page");

	$modversion['templates'][] = array('file' => "smartmail_subscription.html",
	                                    'description' => "Subscription page");

	$modversion['templates'][] = array('file' => "smartmail_admin_subscriberlist.html",
	                                    'description' => "Subscriber list admin page");

	$modversion['templates'][] = array('file' => "smartmail_admin_dispatch_add_form.html",
	                                    'description' => "Add dispatch form");

	require_once XOOPS_ROOT_PATH."/class/xoopslists.php";
	$templates = XoopsLists::getFileListAsArray(XOOPS_ROOT_PATH."/modules/".$modversion['dirname']."/templates");
	foreach ($templates as $filename) {
	    $nl_prefix = "smartmail_nltpl_";
	    $strlen = strlen($nl_prefix);
	    if (substr($filename, 0, $strlen) == $nl_prefix) {
	        // Template name begins with smartmail_nltpl_
	        $modversion['templates'][] = array('file' => $filename,
	                                            'description' => 'Newsletter template');
	    }
	}
	// Configuration
	$modversion['config'][] = array('name' => 'mssi_url',
	                                'title' => '_NL_MI_MSSI_URL',
	                                'description' => '_NL_MI_MSSI_URL_DESC',
	                                'formtype' => 'textbox',
	                                'valuetype' => 'text',
	                                'default' => XOOPS_URL.'/modules/smartmail/mssi.php');
	$modversion['config'][]= array('name' => 'newsletter_passphrase',
	                                'title' => '_NL_MI_PASSPHRASE',
	                                'description' => '_NL_MI_PASSPHRASE_DESC',
	                                'formtype' => 'textbox',
	                                'valuetype' => 'text',
	                                'default' => "HalloHoy");
	$modversion['config'][]= array('name' => 'allowed_hosts',
	                                'title' => '_NL_MI_ALLOWED_HOSTS',
	                                'description' => '_NL_MI_ALLOWED_HOSTS_DESC',
	                                'formtype' => 'textarea',
	                                'valuetype' => 'text',
	                                'default' => "127.0.0.1");
	$modversion['config'][]= array('name' => 'throttle_max',
	                                'title' => '_NL_MI_THROTTLE',
	                                'description' => '_NL_MI_THROTTLE_DESC',
	                                'formtype' => 'textbox',
	                                'valuetype' => 'text',
	                                'default' => 0);
	$modversion['config'][]= array('name' => 'batch_size',
	                                'title' => '_NL_MI_BATCHSIZE',
	                                'description' => '_NL_MI_BATCHSIZE_DESC',
	                                'formtype' => 'textbox',
	                                'valuetype' => 'text',
	                                'default' => 5000);
	// On Update
	if( ! empty( $_POST['fct'] ) && ! empty( $_POST['op'] ) && $_POST['fct'] == 'modulesadmin' && $_POST['op'] == 'update_ok' && $_POST['dirname'] == $modversion['dirname'] ) {

		// referer check
		$ref = xoops_getenv('HTTP_REFERER');
		if( $ref == '' || strpos( $ref , XOOPS_URL.'/modules/system/admin.php' ) === 0 ) {
			// Keep the values of block's options when module is updated (by nobunobu)
			include dirname( __FILE__ ) . "/include/updateblock.inc.php" ;
		}
	}
}
?>