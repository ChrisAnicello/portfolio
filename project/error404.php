<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "404 - Chris Anicello" ;
    $description = "This is the error page for routing errors" ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>

<section>
    <h2>Error 404</h2>
</section>

<section class="error">
    <p>Oops! You werent supposed to do that</p>
</section>

<div class="flexCenter gridCols">
    <picture>
        <source media="(min-width: 60em)" srcset="underConstruction700.png" />
        <source media="(min-width: 40em)" srcset="underConstruction500.png" />
        <source media="(min-width: 20em)" srcset="underConstruction300.png" />
        <img src="underConstruction700.png" alt="Construction Area">
    </picture>
</div>


<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>