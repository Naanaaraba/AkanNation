<?php
require_once(dirname(__FILE__) . "/../settings/core.php");
require_once(dirname(__FILE__) . "/../functions/get_single_category_fxn.php");
isAdminLoggedIn();
// get category id
$cat_id = $_GET["id"];

// fetch single category
$category = get_single_category_fxn($cat_id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akan Nation | Admin Portal</title>
</head>

<body>
    <div class="category_form">
        <h1>Update Category</h1>
        <form method="post" action="../actions/manageCategoryAction.php">
            <div class="input-group">
                <label for="">Category name</label>
                <input type="text" name="category" value="<?php echo $category["cat_name"] ?>">
                <input type="hidden" name="cat_id" value="<?php echo $category["cat_id"] ?>">
            </div>
            <button name="updateCategory">Update Category</button>
        </form>
    </div>
</body>

</html>