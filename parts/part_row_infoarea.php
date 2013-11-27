<?php
defined( '_GOOFY' ) or die();

$img_options['CATEGORY'] = 'gnrl';
$img_options['SIZE']     = '220_156';
$img_obj                 = wed_getImageObject($img_options);

if ( ($img_obj->loadImageDirectory()) && ($img_obj->moveFileListPointer(0)) )
{
	$image_path = $img_obj->getCurrentFilePath();
}


// FAQ Section
$faq = array(
	'faq1' => array(
		'Q' => 'Who can compete?',
		'A' => '<p>A participant must be a resident of the State of Alabama for at least 30 days prior to the day of competition they wish to enter. In addition, out-of-state full-time students who are enrolled in an Alabama college or university are eligible, as are U.S. military personnel and their family members stationed in Alabama.</p><p>Athletes residing in a state adjacent to Alabama who belong to a club based in Alabama and regularly train/compete in Alabama are eligible. Plus, participants in designated individual sports may be eligible to compete.</p><p>The ASF Foundation reserves the right to restrict individuals and/or teams from competing in the Games for the best interest of the event.</p>'),
	'faq2' => array(
		'Q' => 'When and where will the 2013 State Games be held?',
		'A' => '<p>State Games XXXI will be held June 21-23, 2013, in Birmingham, Alabama. Check each specific sport page for times and dates of each event. Opening Ceremonies for all participants will be held Friday, June 21, 2013.</p>'),
	'faq3' => array(
		'Q' => 'How do I register?',
		'A' => '<p>To enter the State Games, carefully read the information concerning your specific sport of interest from www.alagames.com. Follow the step by step registration instructions and submit by entry deadline. Athletes may compete in any number of sports, yet conflicts in scheduling are the responsibility of the athlete.</p>'),
	'faq4' => array(
		'Q' => 'Do I have to provide proof of age?',
		'A' => '<p>Proof of age is required. Copies of Birth Certificate, eligibility list, Military I.D. and/or driver\'s license are acceptable proof-of-age documents. Do not mail or hand-deliver any proof-of-age documents to the ASF Foundation. The coach/participant should have proof-of-age documents on hand at the event site. In case of eligibility disputes, lack of proper documentation may result in disqualification of individual participants and/or team.</p>'),
	'faq5' => array(
		'Q' => 'What are the registration fees and what about the refund policy and weather issues?',
		'A' => '<p>Each sport has its own entry fee requirements. Consult the appropriate sport section of our Web site or the athlete flyer for entry fee amounts. There will be NO REFUNDS of entry fees because of rain or other acts of nature, or if an athlete or team fails to participate. Sports using outdoor sites are weather dependent. Competitions will be conducted unless State Games officials determine otherwise, or if the playing fields would incur significant damage.</p>'),
	'faq6' => array(
		'Q' => 'What type of awards are given?',
		'A' => '<p>State Games medals awarded to 1st, 2nd, and 3rd place in each event. Athletes are responsible for pick-up of awards at the venue on the day of the event.</p>')
);
?>


<div class="gray-area">
	<div class="container">
		<div class="row">
			<div class="span7">
				<h3 class="m_title">[article code="info_welcome_games" return="title" /]</h3>
				<a href="http://www.asffoundation.org" class="hoverBorder pull-right" style="margin-left:20px;"><img src="<?php echo $image_path; ?>" alt=""></a>
				[article code="info_welcome_games" /]
				<!-- end // welcome text -->
			</div>
			<div class="span5">
				<h3 class="m_title">FREQUENTLY ASKED QUESTIONS</h3>
				
				<?php
				$html = '';
				
				foreach ($faq as $key=>$value)
				{
					$html .= '<div class="acc-group default-style">'.LINE1;
					$html .= '<button data-toggle="collapse" data-target="#'.$key.'" class="collapsed">'.$value['Q'].'</button>'.LINE1;
					$html .= '<div id="'.$key.'" class="collapse in">'.LINE1;
					$html .= '<div class="content">'.$value['A'].'</div><!-- end content -->'.LINE1;
					$html .= '</div>'.LINE1;
					$html .= '</div><!-- end acc group -->'.LINE1;
				}
				
				echo $html;
				
				?>
				
				<!-- end // accordion texts  -->
			</div>
		</div><!-- end row // welcome text // acc texts  -->
	</div>
</div>