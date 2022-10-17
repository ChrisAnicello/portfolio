<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Home - Chris Anicello" ;
    $description = "This is the landing page for my website" ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>

<div class="flexCenter gridCols">
    <picture>
        <source media="(min-width: 60em)" srcset="ChrisMediumImg.png" />
        <source media="(min-width: 40em)" srcset="ChrisSMImg.png" />
        <source media="(min-width: 20em)" srcset="ChrisXSimg.png" />
        <img src="chrisMediumImg.png" alt="PicOfMe">
    </picture>
</div>


<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>