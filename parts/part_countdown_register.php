<?php
defined( '_GOOFY' ) or die();

$html        = null;
$bar_title   = "Registration is Officially Closed";

$call_parts  = wed_getSystemValue('CALL_PARTS');
$control     = (isset($call_parts[0])) ? $call_parts[0] : null;
$group       = (isset($call_parts[1])) ? $call_parts[1] : null;

if ( ($control=='register') && (!is_null($group)) )
{
	$ontime      = false;
	$sport       = ucfirst($group);
	$start       = false;
	$end         = false;
	$early       = $sport . '_registration_early';
	$standard    = $sport . '_registration';
	$schedule_db = wed_getDBObject('wed_schedules');
	$title       = 'Deadline is approaching!';
	
	if ( (wed_getMomentInTime(array('schedule' => $early))) && ($schedule_db->getRecordByCode($early)) )
	{
		$start  = $schedule_db->getValue('start');
		$end    = $schedule_db->getValue('end');
		$title  = 'Early Deadline is approaching!';
		$ontime = true;
	}
	elseif ( (wed_getMomentInTime(array('schedule' => $standard))) && ($schedule_db->getRecordByCode($standard)) )
	{
		$start  = $schedule_db->getValue('start');
		$end    = $schedule_db->getValue('end');
		$ontime = true;
	}
	
	if ($ontime)
	{
		$dt_end    = new DateTime($end);
		$end_date  = $dt_end->format("m/d/Y");
		$bar_title = '[countdown title="'.$title.'" date="'.$end_date.'" /]';
	}
}
	
?>

<div id="action_box" data-arrowpos="center">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h4 class="text"><?php echo($bar_title); ?></h4>
			</div>
			<div class="col-md-4 align-center">
				<div class="btn-group">
					<a href="https://www.alagames.com/forms_lib/index.php?form=volun-register2012" ><button type="button" class="btn btn-default">Volunteer</button></a>
					<a href="/support-asff/index.php" ><button type="button" class="btn btn-default">Donate</button></a>
				</div>
			</div>
		</div>
	</div>
</div><!-- end action box -->