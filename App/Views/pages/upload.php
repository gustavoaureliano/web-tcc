<?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['img'];
        print_r($file);

        $fileName = $_FILES['img']['name'];
        $fileType = $_FILES['img']['type'];
        $fileTmpName = $_FILES['img']['tmp_name'];
        $fileError = $_FILES['img']['error'];
        $fileSize = $_FILES['img']['size'];
        
        $_SESSION['img'] = $fileTmpName;

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 100000){
                    // $fileNameNew = uniqid('', true).".".$fileActualExt;
                    // $fileDestionation = 'uploads/'.$fileNameNew;
                    // move_uploaded_file($fileTmpName, $fileDestionation);
                    // header('Location: perfil?uploadsuccess');

                } else {
                    echo "Your File is too big!";
                }
            } else{
                echo "There was an error uploading your file!";

            }
        } else{
            echo "you cannot upload files of this type";
        }
    }
?>