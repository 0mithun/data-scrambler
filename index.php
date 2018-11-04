<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">  
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <div class="row">
           <div class="column column-60 column-offset-20">
               <h2>Our first form</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sequi dolor magni aspernatur sint repellendus vero beatae asperiores odio. Impedit.</p>
                <?php
                    echo $_GET['fname'] ?? '';
                    echo '<br>';
                    echo $_GET['lname'] ?? '';
                ?>
            </div>
       </div>
       <div class="row">
           <div class="column column-60 column-offset-20">
               <form action="">
                   <label for="fname">First Name:</label>
                   <input type="text" id="fname" name="fname">

                   <label for="lname">last Name:</label>
                   <input type="text" id="lname" name="lname">
                   <button type="submit">Submit</button>
               </form>
           </div>
       </div>
    </div>
</body>
</html>