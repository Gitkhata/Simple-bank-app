
<?php 
if(!isset($page_title)){
    $page_title ='Staff Area';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NBI-<?php echo h($page_title);?></title>
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css');?>" />
</head>

<body>
    <header>
        <h1>NBI Staff Area</h1>
    </header>

    <navigation>
        <ul>
        <li>User : <?php echo $_SESSION['username'] ?? ''; ?> </li>
            <li><a href="<?php echo url_for('staff/index.php');?>">Menu </a></li>
            <li><a href="<?php echo url_for('staff/logout.php');?>">Logout </a></li>

        </ul>
    </navigation>


<?php echo display_session_message(); ?>