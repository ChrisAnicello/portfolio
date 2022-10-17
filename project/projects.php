<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Projects - Chris Anicello" ;
    $description = "This page hosts links to my projects, with their descriptions" ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>

<section>
    <h2>My Projects</h2>
</section>
<section>
    <ul class="projectContainer">
        <li>
            <h3>Data Structures</h3>
            <p>I have created Single and Double Linked Lists, Binary Search Trees, Heaps and Hashes.</p>
        </li>
        <li>
            <h3>Harvey's HVAC </h3>
            <p>A simple HVAC business website. I made this project for a Web Development Course. I used a combination of HTML, CSS and JS for the site's functionality</p>
        </li>
        <li>
            <h3>Pacman</h3>
            <p>Using HTML, CSS and JS I was able to recreate Pacman on a basic webpage.</p>
        </li>
        <li>
            <h3>Portfolio</h3>
            <p>I created this website to try and find a career in Web development</p>
            <p></p>
        </li>
        <li>
            <h3>Belt Exam</h3>
            <p>I created a fullstack website that has CRUD functionality for basic tasks</p>
        </li>
    </ul>
</section>

<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>