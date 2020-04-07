<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My blog</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Styles -->
    <link href="css/app.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">My Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="index.php">Main Page</a>
      </li>
      
    </ul>
    
  </div>
</nav>


<div class="container">
   <div class="row">
      <div class="col-md-8 offset-md-2">
      <a href="create.php" class="btn btn-success">Add post</a> 
         <table class="table">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">Title</th>
               <th scope="col">Actions</th>
            </tr>
         </thead>
         <tbody>
            <? foreach ($posts as $post): ?>
            <tr>
               <th scope="row"><?echo $post[id]?></th>
               <td><a href="show.php"><?echo $post[title]?></a></td>
               <td>
                  <a href="#" class="btn btn-warning">Edit</a> 
                  <a href="#" class="btn btn-danger">Delete</a> 
               </td>
            </tr>
            <? endforeach; ?>
         </tbody>
         </table>
      </div>  
   </div>     
</div>  

</body>
</html>