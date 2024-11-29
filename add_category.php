<?php
require_once(dirname(__FILE__) . "/../settings/core.php");
require_once(dirname(__FILE__) . "/../functions/get_categories_fxn.php");

isAdminLoggedIn();
$all_categories = get_categories_fxn();
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
        <h1>Add Category</h1>
        <form method="post" action="../actions/manageCategoryAction.php">
            <div class="input-group">
                <label for="">Category name</label>
                <input type="text" name="category">
            </div>
            <button name="addCategory">Add Category</button>
        </form>
    </div>
    <!-- categories table -->
    <div class="category_table">

        <table>
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($all_categories as $category) {
                ?>
                    <tr>
                        <td> <?php echo htmlspecialchars($category['cat_name']) ?></td>
                        <td>
                            <a href="../admin/edit_category.php?id=<?php echo urlencode($category['cat_id']) ?>">Edit</a>
                            <a href="../actions/manageCategoryAction.php?deleteID=<?php echo urlencode($category['cat_id']) ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>