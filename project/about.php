<?php
    // This section defines the variables that will be used to
    // configure the page.
    $title = "About - Chris Anicello" ;
    $description = "This page has a list of reasons on why I think I would make a good employee." ;
    $author = "Christopher Anicello" ;
    $mainheading = "Christopher Anicello: Web Developer" ;
    
    
    
    // This inserts the beginning part of the HTML into the page
    include "includes/header.php" ;

    // This inserts the HTML for the navigation into the page.
    include "includes/nav.php" ;
?>
<section>
    <h2>Reasons To Hire Me</h2>
</section>
<aside>     
    <img src="ChrisAvatar.png" alt="Pic of Chris">
    
    <p class="aboutMeBio"> I am a friendly guy who has a passion for algorithms and challenges. I love to help other people reach their full potential. I would love to find a career working with any type of algorithmic challenges or data structures.  </p>
</aside>
<main>
    <ul>
        <li> 
            <a href="">
            <p>I am great at solving Challenges</p>
            <p>I love any type of algorithm, puzzle or logic test. When I worked at Coding Dojo as a Bootcamp TA, my favorite activity was to run the daily algorithm session for the students.</p>
            </a>
        </li>
        <li>  
            <a href="">
            <p>I have a good understanding of how code works</p>
            <p>Here is a collection of sorting algorithms that I was able to recreate. I am able to explain the big O notation on all of these sorting functions. Additionally, I have been able to recreate the functionality on a host of structures.</p>
            </a>
        </li>
        <li> 
            <a href="">           
            <p>I am passionate about building other people up</p>
            <p>While at Coding Dojo, I created an event that was aimed at promoting racial and gender diversity within software development.
                    This event aimed at connecting students of under-represented communities in software development with developers in the field.</p>
            </a>
        </li>
        <li> <a href="">          
            <p>People enjoy working with me</p>
            <p>No matter where I am, I always try to make people feel happier. I firmly believe that the best workplace is one that you are excited to go to because you enjoy the company of those around you. </p>
            </a> 
        </li>
        
    </ul>

</main>



<?php
    // This inserts the ending of the HTML into the page.
    include "includes/footer.php" ;
?>