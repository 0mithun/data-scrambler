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
            <h3>Data Scrumble</h3>
            <p>use this application to scrumble your data</p>
            </div>
       </div>
       <div class="row">
        <div class="column column-60 column-offset-20">
            <a href="scrumbler.php?task=encode">Encode</a> | 
            <a href="scrumbler.php?task=decode">Decode</a> | 
            <a href="scrumbler.php?task=key">Generate Key</a>
        </div>       
       </div>
       <div class="row">
           <div class="column column-60 column-offset-20">
               <form action="scrumbler.php" method="post">
                  <label for="key" >Key</label>
                  <input type="text" name="key" id="key" value="">
                  <label for="data">Data</label>
                  <textarea name="data" id="data" cols="30" rows="15"></textarea>
                  <label for="result">Result</label>
                  <textarea name="result" id="result" cols="30" rows="15"></textarea>
                  <input type="submit" value="Submit">
               </form>
           </div>
       </div>
    </div>
</body>
</html>