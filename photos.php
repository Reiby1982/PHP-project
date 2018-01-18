<?php 
$photos = [
    ["image" => '/pictures/Photos/Photo_1.jpg',
     "alt" => 'Photo_1.jpg'],
    ["image" => '/pictures/Photos/Photo_2.jpg',
     "alt" => 'Photo_2.jpg'],
    ["image" => '/pictures/Photos/Photo_3.jpg',
     "alt" => 'Photo_3.jpg'],
    ["image" => '/pictures/Photos/Photo_4.jpg',
     "alt" => 'Photo_4.jpg'],
    ["image" => '/pictures/Photos/Photo_5.jpg',
     "alt" => 'Photo_5.jpg'],
    ["image" => '/pictures/Photos/Photo_6.jpg',
     "alt" => 'Photo_6.jpg'],
    ["image" => '/pictures/Photos/Photo_7.jpg',
     "alt" => 'Photo_7.jpg'],
    ["image" => '/pictures/Photos/Photo_8.jpg',
     "alt" => 'Photo_8.jpg'],
    ["image" => '/pictures/Photos/Photo_9.jpg',
     "alt" => 'Photo_9.jpg'],
    ["image" => '/pictures/Photos/Photo_10.jpg',
     "alt" => 'Photo_10.jpg'],
    ["image" => '/pictures/Photos/Photo_11.jpg',
     "alt" => 'Photo_11.jpg'],

];

    
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Photos</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<div class="wraper">
            <div class="content">
                <!-- Шапка -->
                <div class="bar">
                	<p>Once surf always a Surfer</p>
                </div>
                <div class="logo">
                	<img src="pictures/logo.png" alt="logo">
                </div>
        		<!-- Меню -->
        		<div class="menu">
        			<ul>
        				<li><a href="index.php">MAIN</a></li>
        				<li><a href="news.php">NEWS</a></li>
        				<li><a class="active" href="photos.php">PHOTOS</a></li>
        				<li><a href="contacts.php">CONTACTS</a></li>
        				<li><a href="avtoriz.php">AVTORIZATION</a></li>
        			</ul>
        		</div>
            	<!-- Фото -->
                <div >
                    <?php foreach ($photos as $photo):?>
                    <div>
                        <img src="<?php echo $photo['image'];?>" alt="<?php echo $photo['alt'];?>">
                    </div>  
                    <?php endforeach; ?>                              
                </div>
        	</div>
            <div class="footer">
    		  <p>Don't waste your time!</p>
            </div>
        </div>
	</body>
</html>