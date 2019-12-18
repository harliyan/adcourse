<?php
$meta_title = isset($meta_title) ? $meta_title : "";
$meta_image = isset($meta_image) ? $meta_image : "";
$meta_site_name = isset($meta_site_name) ? $meta_site_name : "";
$meta_desc = isset($meta_desc) ? $meta_desc : "";
?>

<head>
    <meta charset="utf-8" />
    <title>AdCourse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- meta facebook -->
    <meta property="og:title" content="<?php echo $meta_title;?>"/>
    <meta property="og:image" content="<?php echo $meta_image;?>"/>
    <meta property="og:site_name" content="<?php echo $meta_site_name;?>"/>
    <meta property="og:description" content="<?php echo $meta_desc;?>"/> 
    <!-- end meta facebook -->

    <!-- icon -->
  <!--   <link rel="shortcut icon" href="<?php print base_url('Shards-Dashboard'); ?>/favv.ico" type="image/x-icon">
    <link rel="icon" href="<?php print base_url('Shards-Dashboard'); ?>/favv.ico" type="image/x-icon"> -->

    <link href="https://fonts.googleapis.com/css?family=Kalam|Pacifico|Russo+One&display=swap" rel="stylesheet">
    <!-- font -->

    <!-- Custom box css -->
    <link href="<?php print base_url('highfront/admin/'); ?>plugins/custombox/css/custombox.min.css" rel="stylesheet">

    <!-- lightbox -->
    <!-- <link href="<?php print base_url('lightbox'); ?>/dist/css/lightbox.css" rel="stylesheet"> -->

    <!-- DataTables -->
    <link href="<?php print base_url('highfront/admin/'); ?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php print base_url('highfront/admin/'); ?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?php print base_url('highfront/admin/'); ?>/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="<?php print base_url('highfront/admin/horizontal/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php print base_url('highfront/admin/horizontal/'); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php print base_url('highfront/admin/horizontal/'); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/modernizr.min.js"></script>
    <script src="<?php print base_url('highfront/admin/horizontal/'); ?>assets/js/jquery.min.js"></script>
</head>