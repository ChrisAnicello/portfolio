<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Current - Chris Anicello" ;
    $description = "This page lists what im up to currently" ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<section>
    <h2>What I'm up to now</h2>
</section>

<section class="current">
    <p>Currently, I am attending Highline College. I am focused on obtaining a degree while I look for a job </p>
    <p>As far as projects, I am currently developing my portfolio page. </p>
    <p>For my next videos, I plan to make demonstrations of the data structures that I have covered, as well as their common methods.</p>
</section>
<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>