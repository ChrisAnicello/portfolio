<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Videos" ;
    $description = "This page has videos of regarding my coding content" ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>

<section>
    <h2>Personality video</h2>
</section>

<div class="flexCenter gridCols">
<iframe width="560" height="315" src="https://www.youtube.com/embed/U3vFGogJnbU" title="YouTube video player"  allowfullscreen></iframe>
</div>



<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>