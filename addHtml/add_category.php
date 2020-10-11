<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">      
    <link href="../bootstrap/css/custom.css" rel="stylesheet">
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="index.php">Dashboard</a>
            <a class="blog-nav-item" href="add_post.php">Add Post</a>
            <a class="blog-nav-item_a" href="add_category.php">Add Category</a>
            <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
          <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
        </nav>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 blog-main"><br> 
                <h2>Insert New Category</h2><hr>            
                <form action="../addphplogic/add_catsProcess.php" method="POST">                
                    <div class="form-group">
                        <label >Category Name</label>
                        <input type="text" class="form-control"  placeholder="Enter Category" name="cat_name">
                    </div>           
                    <button type="submit" class="btn btn-success" name="submit_cats">Add Category</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </form>    
            </div>
        </div>
    </div>
  </body>
</html>