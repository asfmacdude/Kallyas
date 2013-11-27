// Countdown Object that is accessed through shortcodes
var counter = {
	init: function (d,msg)
	{
		jQuery('#Counter').countdown({
			until: new Date(d),
			layout: counter.layout(msg),
			labels: ['years', 'months', 'weeks', 'days', 'hours', 'min', 'sec'],
			labels1: ['year', 'month', 'week', 'day', 'hour', 'nin', 'sec'],
			expiryText: '<li>Expired!</li>'
		});
	},
	layout: function (msg)
	{
		return '<li class="timer_title">' + msg + '</li>' +
					'<li class="timer_clock">{dn}<span> {dl}</span></li>' + 
					'<li class="timer_clock">{hnn}<span> {hl}</span></li>' + 
					'<li class="timer_clock">{mnn}<span> {ml}</span></li>' + 
					'<li class="timer_clock">{snn}<span> {sl}</span></li>';
	}
}

// initialize the counter
// counter.init("<?php echo $end; ?>","Are you ready?");