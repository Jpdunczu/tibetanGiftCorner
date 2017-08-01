<!DOCTYPE HTML>
<title>Tibetan Gift Corner</title>

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
    <div class="col-xs-12">
        <?php include 'header.php'; ?>
    </div>
</head>
    
    <body>
    	<div class="col-xs-12">
            
            <nav class="navbar navbar-inverse" data-spy="affix-top" data-offset-top="165">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Tibetan Gift Corner</a>
        	
        	<div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
	        	<li class="active"><a href="#">Home</a></li>
	        	<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                Womens Clothing<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Summer Wear</li>
                                    <li><a href="./merch?type=summerWear&active=Tops&gender=1">Tops</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Pants</a></li>
                                    <li><a href="#">Shorts</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Winter Wear</li>
                                    <li><a href="#">Tops</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Pants</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mens Clothing
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Summer Wear</li>
                                    <li><a href="#">Tops</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Pants</a></li>
                                    <li><a href="#">Shorts</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Winter Wear</li>
                                    <li><a href="#">Tops</a></li>
                                    <li><a href="#">Jackets</a></li>
                                    <li><a href="#">Pants</a></li>
                                </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clothing Accessories
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Womens</li>
                                    <li><a href="#">Hats</a></li>
                                    <li><a href="#">Scarfs/Shawls</a></li>
                                    <li><a href="#">Gloves</a></li>
                                    <li><a href="#">Sun Glasses</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Mens</li>
                                    <li><a href="#">Hats</a></li>
                                    <li><a href="#">Scarfs/Shawls</a></li>
                                    <li><a href="#">Gloves</a></li>
                                    <li><a href="#">Sun Glasses</a></li>
                                </ul>
                        </li>
	        	<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Jewelery
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Womens</li>
                                    <li><a href="#">Rings</a></li>
                                    <li><a href="#">Bracelets/Anklets</a></li>
                                    <li><a href="#">Necklaces/Chokers</a></li>
                                    <li><a href="#">Watches</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Mens</li>
                                    <li><a href="#">Rings</a></li>
                                    <li><a href="#">Necklaces</a></li>
                                    <li><a href="#">Watches</a></li>
                                </ul>
                        </li>
	        	<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gifts
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">For Her</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">For Him</a></li>
                                </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#aboutUs">About Us</a></li>
                    </ul>
        	</div>
            </nav>
        </div>
        <div class="container-fluid">
            
                <img class="img-responsive" src="/tibetanGiftCorner/images/BS.png">
            
        </div>
        <div class="container-fluid">
            <div class="row">
                
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
        </div>
        <div class="container-fluid">
            
                <img class="img-responsive" src="/tibetanGiftCorner/images/PP.png">
            
        </div>
        <div class="container-fluid">
            <div class="row">
                
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
        </div>
    </body>
    <div class="col-xs-12">
        <?php include 'footer.php'; ?>
    </div>
    
<!-- About Us Modal -->
<div id="aboutUs" class="modal fade" role="dialog">
    <div class="modal-dialog">
        
        <!-- About Us Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <script src="controls/email_list.js"></script>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <img class="img-responsive" src="/tibetanGiftCorner/images/TGC.png">
            </div>
            <div class="modal-body">
                <p>We are a family owned and operated business, our store is 
                    located in the historic <b>Haight and Ashbury</b> district of San Francisco, CA.</p>
                <p>
                In Addition to our store front, you can often find us at festivals and trade shows.
                If you would like to be notified of which shows we will be at in your area,
                you can <b>join our mailing list</b> by clicking the "Join Mailing list" at the bottom.</p>
                <p>Thanks for visiting our site!</p>
                <a type="link" class="btn btn-primary btn-block" role="button"
                        href="https://www.google.com/maps/place/Tibetan+Gift+Corner/@37.7699621,-122.4527778,16z/data=!4m5!3m4!1s0x0:0x448669445019c87c!8m2!3d37.7699621!4d-122.4484004!6m1!1e1?hl=en"
                         target="_blank" style="margin-bottom: 15px;">
                    <span class="glyphicon glyphicon-globe"></span>Locate Us!
                </a>
                <form id="email_form" name="email_form" action="#" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <span id="email_address_error" style="color: red;">*</span>
                    </div>
                    <div class="form-group">
                            <input type="button" class="btn btn-info" id="join_list" 
                                value="Join our List">
                    </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
        
    </div>
</div>
</html>
