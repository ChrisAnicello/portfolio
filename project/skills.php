<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "Skills - Chris Anicello" ;
    $description = "This page shows what technical skills I have acquired" ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<section>
    <h2>Skills</h2>
</section>
<aside class="skillsAside">
    <p>I feel comfortable working with these technologies, but I enjoy learning new stuff too!</p>
    <p>I love working with any programming language. If you think I would be a good fit for your team, but am missing the skillset, I would happily learn it and send you a demo of my abilities.</p>
</aside>
<main>
    <ul class="skillsList">
        <li>
            <h3>HTML5</h3>
            <img src="img/html-5.png" alt="HTML-5 Logo">
        </li>
        <li>
            <h3>CSS</h3>
            <img src="img/css.png" alt="CSS Logo">
        </li>
        <li>
            <h3>JavaScript</h3>
            <img src="img/Javascripticon.png" alt="JavaScript Logo">
        </li>
        <li>
            <h3>Python</h3>
            <img src="img/pythonImg.png" alt="Python Logo">
        </li>
        <li>
            <h3>Flask</h3>
            <img src="img/flask.png" alt="Flask Logo">
        </li>
        <li>
            <h3>SQL</h3>
            <img src="img/sql-server.png" alt="SQL Server Logo">
        </li>
        <li>
            <h3>MongoDB</h3>
            <img src="img/mongodb.png" alt="MongoDB Logo">
        </li>
        <li>
            <h3>Express</h3>
            <img src="img/express.png" alt="Express Logo">
        </li>
        <li>
            <h3>Adobe Animate</h3>
            <img src="img/adobeCreativeCloud.png" alt="Adobe Logo">
        </li>
        <li>
            <h3>SalesForce</h3>
            <img src="img/salesforce.png" alt="Salesforce Logo">
        </li>
        <li>
            <h3>Angular 2</h3>
            <img src="img/angular" alt="Angular Logo">
        </li>
    </ul>
</main>

<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>