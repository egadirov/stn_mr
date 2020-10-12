<?php
include('./views/parts/header.php');
include 'helpers.php';
$menu_items = json_decode(file_get_contents('./nav_items.json'), true);
?>
<div class="wrapper">
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Acme, Inc.</h3>
        </div>
        <ul class="list-unstyled">
            <?= renderMenuList($menu_items); ?>
        </ul>
    </nav>

    <div id="content">
        <!-- Sidebar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-info btn-gradient">
                    <i class="fas fa-align-left"></i>
                </button>
                <div class="nav navbar-nav ml-auto">
                    <form method="POST" action="./views/login.php">
                        <button type="submit" class="btn btn-info btn-gradient">
                            <i class="fas fa-user"></i>
                            <span class="ml-1">Login</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <section class="p-4">
            <h2>Welcome to the Acme app.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="line"></div>

            <!-- Dropdown Select starts here -->
            <div class="form-group">
                <label for="exampleFormControlSelect1">Class</label>
                <select class="form-control" id="class_select">
                    <option>--</option>
                    <?php foreach ($menu_items as $key => $item):?>
                        <option value="<?= $item['id']; ?>" data-select='<?= json_encode($item['product_types']); ?>'><?= $item['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Product Type</label>
                <select class="form-control" id="product_types_select" disabled>
                    <option>--</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control" id="categories_select" disabled>
                    <option>--</option>
                </select>
            </div>
        </section>
    </div>
</div>
<?php include('./views/parts/footer.php'); ?>