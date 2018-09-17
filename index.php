<?php require("logic.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sanchez:400italic,400">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Michaela DeForest</title>
  </head>
  <body>
    <div class="container">
      <h1>Michaela DeForest</h1>
      <img src="images/profile.jpg" alt="Picture of me">
      <section>
        <h2>About Me</h2>
        <p>My name is Michaela DeForest. I currently work as a software developer in Malvern, Pennsylvania and am living in Philadelphia.
           I graduated with a BA in Computer Science in 2017 and am beginning the path of gaining my Master's in Software Engineering.</p>
        <p>While I am taking this class to fulfill a requirement, I chose it in hopes that it helps me in my job.
           I have had to learn a lot about web application development on my own while building a few Ruby on Rails apps for work.
           I am interested in gaining some formal web application development skills.</p>
        <p>My hobbies include playing violin, playing basketball, and attending hackathons.</p>
      </section>
      <section>
        <h2>Random Quote</h2>
        <blockquote>
          <?php echo $csv_array[$rand_num][0]; ?>"
          <footer><?php echo $csv_array[$rand_num][1]; ?></footer>
        </blockquote>
      </section>
    </div>
  </body>  
</html>
