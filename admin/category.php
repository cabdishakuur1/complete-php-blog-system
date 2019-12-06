<?php include("inc/init-admin.php"); ?>
<?php

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $category = array(
      "name"          => $_POST["name"],
      "description"   => $_POST["desc"],
      "visible"       => $_POST["visible"],
    );

    $sql = $db->prepare("INSERT INTO categories(name,description,status)
    VALUES(:name,:description,:visible)");
    $sql->execute($category);
    if($db->lastInsertId()){
      echo "Category Added successfully";
    }else{
      echo "Failed";
    }
  }

  if(isset($_GET["cat_id"]) && isset($_GET["action"])){
      $cat_id   = intval($_GET["cat_id"]);
      $sql  = $db->prepare("DELETE FROM categories WHERE id = ?");
      $sql->execute([$cat_id]);
      if($sql){
        echo "Category Deleted successfully";
      }

  }

?>
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          <div class="row">
            <div class="col-md-12">
              <ul class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="#">Categories</a></li>
              </ul>
            </div> <!--  end of breadcrumbs -->
            
            <div class="col-md-12">
                <div class="col-md-4">
                     <div class="panel panel-default">
                        <div class="panel panel-heading">   <p>Add Category</p></div>
                        <div class="panel panel-body">
                        <form method="post">
                                <div class="form-group">
                                    <label for="usr">Category Name:</label>
                                     <input type="text" name="name" class="form-control" id="usr">
                                </div>

                                <div class="form-group">
                                    <label for="usr">Desc:</label>
                                     <textarea name="desc" class="form-control" ></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Visible</label>
                                    <label class="radio-inline"><input type="radio" value="1" name="visible" checked>Yes</label>
                                    <label class="radio-inline"><input type="radio" value="0" name="visible">No</label>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Add Category" class="form-control btn-block btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  <div class="col-md-8">
                    <div class="panel panel-default">
                    <div class="panel panel-heading">   <p>Categories</p></div>
                        <div class="panel panel-body">
                        <table class="table table-bordered table-hovered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach(get_all("categories") as $category) {?>
                            <tr>
                                <td><?=  escape(ucfirst($category->name)) ; ?></td>
                                <td><?=  get_status($category->status); ?></td>
                                <td><a href="category.php?cat_id=<?= escape($category->id); ?>">Update</a></td>
                                <td><a href="category.php?cat_id=<?= escape($category->id); ?>&action=del">Delete</a></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                        </div>
                </div>
                </div>
             
             
               

             </div>
            </div> <!--  end of content -->
            

          </div>
        </div>
      </div>
    </div>
<?php include("inc/footer.php"); ?>
