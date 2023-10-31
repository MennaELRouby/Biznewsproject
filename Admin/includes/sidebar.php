<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="users.php?id=<?php echo $mid ?>">Users List</a></li>
                    <li><a href="addUser.php?id=<?php echo $mid ?>">Add User</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="addCategory.php?id=<?php echo $mid ?>">Add Category</a></li>
                    <li><a href="categories.php?id=<?php echo $mid ?>">Categories List</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-desktop"></i> News <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="addNews.php?id=<?php echo $mid ?>">Add News</a></li>
                    <li><a href="News.php?id=<?php echo $mid ?>">News List</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>