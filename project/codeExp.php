<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "EXP - Chris Anicello" ;
    $description = "This page lists the coding experience that I have acquired, and from where" ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>

<section class="expTable">
        <table>
            <thead>
                <tr>
                    <th>Location:</th>
                    <th>Role</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Highline College</td>
                    <td>Student</td>
                    <td>2020-Current</td>
                </tr>
                <tr>
                    <td>Coding Dojo</td>
                    <td>Teaching Assistant</td>
                    <td> Oct 2018- May 2019</td>
                </tr>
                <tr>
                    <td>Coding Dojo</td>
                    <td>Bootcamp Student</td>
                    <td>June 2018 - Oct 2018</td>
                </tr>
                <tr>
                    <td>Young Wonks Code Academy</td>
                    <td>Student</td>
                    <td>Jan 2018 - May 2018</td>
                </tr>

            </tbody>
        </table>
    </section>

<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>