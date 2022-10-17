<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "References - Chris Anicello" ;
    $description = "This page hosts a list of Chris anicello's references" ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>

<section>
    <h2> Here are some of the people who will vouch for me </h2>
</section>

<ul class="references">
    <li>
        <h3>Joshua Lewis, CPA</h3>
        <p>Senior Staff Accountant</p>
        <p>jjl8937@gmail.com</p>
        <p> (585) 362-2142</p>
        <p>Personal Friend</p>
    </li>
    <li>
        <h3>Jeff Brady</h3>
        <p>CS student</p>
        <p>(253)508-6833</p>
        <p>jeff.brady93@gmail.com</p>
        <p>Personal Friend</p>
    </li>
    <li>
        <h3>Deann Steward</h3>
        <p>Senior Account Manager, Martindale-Nolo</p>
        <p>510) 459-2925</p>
        <p>Former Work Colleague at Martindale-Nolo</p>
    </li>

    <li>
        <h3>Vanessa Martin </h3>
        <p>Software Test Engineer, Altair</p>
        <p>(510)355-6877</p>
        <p>Colleague at Coding Dojo</p>
    </li>
    <li>
        <h3>David Chanoine </h3>
        <p>Program Manager, Coding Dojo</p>
        <p>(201)744-1379</p>
        <p>Former Boss at Coding Dojo</p>
    </li>
    <li>
        <h3>Shannon Doell</h3>
        <p>Corporate Recruiter, Martindale-Nolo</p>
        <p>(925)922-1002</p>
        <p>Former Work Colleague at Martindale-Nolo</p>

    </li>
</ul>



<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>