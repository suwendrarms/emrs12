
<?php

    
session_start();
    require_once('../../connection/connect.php');
    
    $UserName = $_SESSION["username"];
    $password = $_SESSION["password"];
 
  
    $query ="select * from receptionist_registration where Username='$UserName' and Password ='$password'";


	 $post = isset($_POST) ? $_POST: array();
	 //print_R($post);die;
	 switch($post['action']) {
	  case 'save' :
		saveAvatarTmp();
	  break;
	  default:
		changeAvatar();
		
	 }
	
	 function changeAvatar() {
        $post = isset($_POST) ? $_POST: array();
        $max_width = "500"; 
        $userId = isset($post['hdn-profile-id']) ? intval($post['hdn-profile-id']) :0 ;
        $path = 'images/tmp';

        $valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
        $name = $_FILES['photoimg']['name'];
        $size = $_FILES['photoimg']['size'];
        if(strlen($name))
        {
        list($txt, $ext) = explode(".", $name);
        

        if(isset($_SESSION['username'])){

            $id=$_SESSION['username'];
        if(in_array($ext,$valid_formats))
        {
        if($size<(10000*10000)) 
        {

        $actual_image_name = $id.'.'.$ext;
        $filePath = $path .'/'.$actual_image_name;
        $tmp = $_FILES['photoimg']['tmp_name'];
        
        if(move_uploaded_file($tmp, $filePath))
        {
        $width = getWidth($filePath);
            $height = getHeight($filePath);
           
            if ($width > $max_width){
                $scale = $max_width/$width;
                $uploaded = resizeImage($filePath,$width,$height,$scale);
            }else{
                $scale = 1;
                $uploaded = resizeImage($filePath,$width,$height,$scale);
            }
        /*$res = saveAvatar(array(
                        'userId' => isset($userId) ? intval($userId) : 0,
                                                'avatar' => isset($actual_image_name) ? $actual_image_name : '',
                        ));*/
                        
        //mysql_query("UPDATE users SET profile_image='$actual_image_name' WHERE uid='$session_id'");
        echo "<img id='photo' file-name='".$actual_image_name."' class='' src='".$filePath.'?'.time()."' class='preview'/>";
        }
        else
        echo "failed";
        }
        else
        echo "Image file size max 1 MB"; 
        }
        else
        echo "Invalid file format.."; 
        }
        else
        echo "Please select image..!";
        exit;
        }
        
    }
   
     function saveAvatarTmp() {
        $post = isset($_POST) ? $_POST: array();
        $userId = isset($post['id']) ? intval($post['id']) : 0;
        $path ='\\images\uploads\tmp';
        $t_width = 300; 
        $t_height = 300;   
		
    if(isset($_POST['t']) and $_POST['t'] == "ajax")
    {
        extract($_POST);
        
        //$img = get_user_meta($userId, 'user_avatar', true);
        $imagePath = 'images/tmp/'.$_POST['image_name'];
        $ratio = ($t_width/$w1); 
        $nw = ceil($w1 * $ratio);
        $nh = ceil($h1 * $ratio);
        $nimg = imagecreatetruecolor($nw,$nh);
        $im_src = imagecreatefromjpeg($imagePath);
        imagecopyresampled($nimg,$im_src,0,0,$x1,$y1,$nw,$nh,$w1,$h1);
        imagejpeg($nimg,$imagePath,90);
        
    }
    echo $imagePath.'?'.time();;
    exit(0);    
    }
    
 
    function resizeImage($image,$width,$height,$scale) {
    $newImageWidth = ceil($width * $scale);
    $newImageHeight = ceil($height * $scale);
    $newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
    $source = imagecreatefromjpeg($image);
    imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
    imagejpeg($newImage,$image,90);
    chmod($image, 0777);
    return $image;
}

function getHeight($image) {
    $sizes = getimagesize($image);
    $height = $sizes[1];
    return $height;
}

function getWidth($image) {
    $sizes = getimagesize($image);
    $width = $sizes[0];
    return $width;
}
?>
