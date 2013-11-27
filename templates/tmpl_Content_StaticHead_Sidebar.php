<?php
/*
 * Content_StaticHead_Sidebar
 *
 * This template has a content view on the left with a sidebar menu on the right with a static header.
 *
 */
?>

[body]
  
{[parts/part_supportpanel.php]}
{[parts/part_login.php]}

[page_wrapper ]

{[parts/part_header.php]}
{[parts/part_static_header.php]}

[content]

[row]
[grid width="9"]

%CONTENT%

[/grid]

[grid width="3"]
[sidebar type="right" /]
[/grid]
[/row]

{[parts/part_partners_carousel.php]}
[tagline text="We Mentor. We Lead. We Impact." /]

[/content]

{[parts/part_footer.php]}
{[parts/part_bottom_code.php]}

[/page_wrapper]

[/body]