<!DOCTYPE HTML>
<title>Tibetan Gift Corner: <?php echo htmlspecialchars($type); ?></title>

<html>
    
<head>
    <div class="col-xs-12">
        <?php include 'header.php'; ?>
    </div>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="215">
    
    <nav class="navbar navbar-inverse navbar-fixed-top" data-spy="affix-top" data-offset-top="165">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Tibetan Gift Corner</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li><a href="../">Home</a></li>
                    <?php foreach ($category as $item): 
                        if($item == $active){
                            $selection = 'active';
                        } else {
                            $selection = "";
                        }
                        ?>
                    <li class="<?php echo htmlspecialchars($selection) ?>">
                        <a href="<?php echo htmlspecialchars($item); ?>">
                        <?php echo htmlspecialchars($item); ?></a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="col-xs-12">
        <img class="img-responsive" src="<?php echo htmlspecialchars($type_img); ?>">
    </div>
    
<?php foreach ($category as $section): ?>    
    <div id="<?php echo htmlspecialchars($section); ?>" class="container-fluid">
        <img class="img-responsive" src="<?php echo htmlspecialchars('/tibetanGiftCorner/images/'.$section.'.png'); ?>">
        <?php foreach ($temp_array as $item): ?>
            <div class="col-xs-2">
                <div class="thumbnail">
                    <a href="#">
                        <img class="img-responsive" alt="Most Popular" src="<?php echo $item ?>">
                    </a>
                </div>
            </div> 
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>
</body>
    

</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

