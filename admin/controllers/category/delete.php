<?php
permission_user();
require_once('admin/models/category.php');
$subcate_id = intval($_GET['subcate_id']);
subcategories_delete($subcate_id);
header('location:admin.php?controller=category');
