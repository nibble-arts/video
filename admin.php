<?php

/**
 * Internal Filebrowser -- admin.php
 *
 * @category  CMSimple_XH
 * @package   CALDav Calendar
 * @author    Thomas Winkler <thomas.winkler@iggmp.net>
 * @copyright 2018 nibble-arts <http://www.nibble-arts.org>
 * @license   http://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @link      http://cmsimple-xh.org/
 */

/*
 * Prevent direct access.
 */
if (!defined('CMSIMPLE_XH_VERSION')) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

/*
 * Register the plugin menu items.
 */
if (function_exists('XH_registerStandardPluginMenuItems')) {
    XH_registerStandardPluginMenuItems(true);
}

if (function_exists('video') 
    && XH_wantsPluginAdministration('video') 
    || isset($video) && $video == 'true')
{

    $o .= print_plugin_admin('off');

    switch ($admin) {

        case '':
            $o .= '<h1>Video</h1>';
    		$o .= '<p>Version 0.9</p>';
    		$o .= '<p>Copyright 2018</p>';
            $o .= '<p><a href="http://www.nibble-arts.org" target="_blank">Thomas Winkler</a></p>';
            $o .= "<p>Mit dem Video-Plugin lassen sich Videos von Online-Plattformen einfach an jeder Stelle einer Seite einbetten. Es reicht die Angabe des Platformnamens und des Video-IDs im Pluginaufruf.</p>";

            $o .= "<p>Es werden Vimeo und Youtube unterstützt.</p>";
            $o .= "<p>Mit einem optionalen CSS-Stylestring kann dem Videofenster eine Style-Eigenschaft übergeben werden.</p>";

            $o .= "<p>Durch die Parameter width und height kann die Breite und Höhe des Videofensters vorgegeben werden. Die Angaben werden nur verwendet, wenn beide Werte angegeben werden.</p>";

            $o .= "<h3>Verwendung</h3>";

            $o .= '<p class="code">{{{plugin:video(Platform:vimeoID[,"style","width","height"];}}}</p>';

            break;

        default:
            $o .= plugin_admin_common($action, $admin, $plugin);
    }

}
?>
