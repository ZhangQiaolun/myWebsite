<?php
    require("config.php")
?>

<!doctype html>
<head>
    <title><?php echo $config_sitename; ?></title>
    <link href="stylesheet.css" rel="stylesheet">
</head>
<body>
    <div id = "header">
    <h1><?php echo $config_sitename;?></h1>
    </div>
    <div id = "menu">
    <a href="<?php echo $config_basedir; ?>">Home</a>
    &bull;
    <a href="<?php echo $config_basedir; ?>about.php">About</a>
    &bull;
    <a href="<?php echo $config_basedir; ?>faq.php">FAQ</a>
    &bull;
    <a href="<?php echo $config_basedir; ?>tech.php">Technical Details</a>
    </div>
    
    <div id = "container">
        <div id="bar">
            <?php
                require("bar.php");
            ?>
        </div>
        
        <div id="main">
