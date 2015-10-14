<?php // no direct access

defined('_JEXEC') or die('Restricted access'); ?>


<?php
$unwetter = $params->get('unwetter');
$waldbrand = $params->get('waldbrand');
$grasland = $params->get('grasland');

$bl = $params->get('bl');
$width = $params->get('width');

if($unwetter == "1")
{
echo '<p /><span style="font-size:12px; color:#969696;">&nbsp;&nbsp;&nbsp;<strong>Unwettergefahr</strong></span><br /><div align="center"><a target="_BLANK" href="http://www.dwd.de/DE/wetter/warnungen/warnWetter_node.html"><img src="http://www.dwd.de/DWD/warnungen/warnapp/json/warning_map.png" width="'.$width.'" border="0"></a></div><p>&nbsp;</p>';
}

if($waldbrand == "1")
{
echo '<p /><span style="font-size:12px; color:#969696;">&nbsp;&nbsp;&nbsp;<strong>Waldbrandgefahrenindex WBI</strong></span><br /><div align="center"><a href="http://www.dwd.de/DE/leistungen/waldbrandgef_bl/waldbrandgefbl.html?nn=16102&cl2Categories_Bundesland=wbh_'.$bl.'" target="_blank"><img src="http://www.dwd.de/DWD/warnungen/agrar/wbx/wbx_stationen.png" width="'.$width.'" border="0"></a></div><br />';
}

if($grasland == "1")
{
echo '<p /><span style="font-size:12px; color:#969696;">&nbsp;&nbsp;&nbsp;<strong>Grasland - Feuerindex</strong></span><br /><div align="center"><a href="http://www.dwd.de/DE/leistungen/graslandfi_bl/graslandfibl.html?nn=16102&cl2Categories_Bundesland=glh_'.$bl.'" target="_blank"><img src="http://www.dwd.de/DWD/warnungen/agrar/glfi/glfi_stationen.png" width="'.$width.'" border="0"></a></div><br />';
}

echo '<span style="font-size:9px; color:#969696;">&nbsp;&nbsp;&nbsp;&copy; Deutscher Wetterdienst, (DWD) </a></span>';
?>

