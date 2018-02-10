<?php include "header.php";?>
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

            	<!-- Фото -->
                <div >
                    <?php foreach ($photos as $photo):?>
                    <div>
                        <img src="<?php echo $photo['image'];?>" alt="<?php echo $photo['alt'];?>">
                    </div>  
                    <?php endforeach; ?>                              
                </div>
        	</div>
<?php include "footer.php";?>