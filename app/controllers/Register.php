<?php

// require_once dirname(dirname(__DIR__)).'/vendor/totp/rfc6238.php';

// require_once dirname(__DIR__).'/providers/MailProvider.php';

use Aws\S3\S3Client;



class Register extends Controller{



    public function __construct(){

      $this->usersModel = $this->model('usersModel');
        
    }

    public function index(){

        $membershipProvider = new MembershipProvider();

        $membershipProvider->startSession();

        $this->view('Login/register');
    }




    public function createUser()
    {

        if (isset($_POST['create'])) {

  // Instantiate an Amazon S3 client.
  $s3Client = new S3Client([
    'version' => 'latest',
    'region'  => 'us-east-1',
    'credentials' => [
    'key'    => 'AKIAUTZKO3SNYPVE6ILQ',
    'secret' => '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
    '
    ]
  ]);
  

  
    // Check if file was uploaded without errors
    echo "post";

    if(isset($_FILES["anyfile"]) && $_FILES["anyfile"]["error"] == 0){
      echo "file set";

      $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
      $filename = $_FILES["anyfile"]["name"];
      $filetype = $_FILES["anyfile"]["type"];
      $filesize = $_FILES["anyfile"]["size"];


      // Validate file extension
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
      if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");


      // Validate file size - 10MB maximum
      $maxsize = 10 * 1024 * 1024;
      if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

      // Validate type of the file
      if(in_array($filetype, $allowed)){
        echo "allowed";
          // Check whether file exists before uploading it
          //dirname give me the path of the parent of provided path(DIR which is controller)
        if(file_exists(dirname(dirname(__DIR__)) . "/public/upload/" . $filename)){
          echo $filename . " is already exists.";
        } 
      else{
        if(move_uploaded_file($_FILES["anyfile"]["tmp_name"],dirname(dirname(__DIR__)) . "/public/upload/" . $filename)){
          $bucket = 'cnkbucket';
          $file_Path = dirname(dirname(__DIR__)) . "/public/upload/" . $filename;
          $key = basename($file_Path);
          try {
            $result = $s3Client->putObject([
            'Bucket' => $bucket,
            'Key'    => $key,
            'Body'   => fopen($file_Path, 'r'),
            // 'ACL'    => 'public-read', // make file 'public'
            ]);
          echo "Image uploaded successfully. Image path is: ". $result->get('ObjectURL');
          } catch (Aws\S3\Exception\S3Exception $e) {
              echo "There was an error uploading the file.\n";
              echo $e->getMessage();
          }
          echo "Your file was uploaded successfully.";
        }         
        else{  
          echo "File is not uploaded";
        }
      } 
      }

      else{
        echo "Error: There was a problem uploading your file. Please try again."; 
      }

      } 
      else{
        echo "Error: " . $_FILES["anyfile"]["error"];
      }


                //data from the form will be pass to this data array

            $data = [
                'username' => $_POST['username'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'phone' => $_POST['phone'],
                
                // 'phone' => "",
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                // 'secretkey' => TokenAuth6238::generateRandomClue(), this is for 2FA
                'active' => true
            ];
            echo "created " . $_POST['username'] ."</br>";
            //we pass the array to createUser method in the usersModel class
            $confirmationData = $this->usersModel->createUser($data);
            if ($confirmationData['created']) {
                echo "created confirm";
                echo 'Please wait registering you on the application';

                // $this->sendConfirmationEmail();

                header("Location: ".URLROOT."/home");
            }
        } 
        
        else {
            $this->view('Login/register');
        }


  }




    private function sendConfirmationEmail(){

        $MailProvider = new MailProvider();

        $user_value = $this->usersModel->getUserbyName( $_POST['username']);

        $data = [
            'to_email' => $user_value->email,
            'totp' => $this->getTOTP($user_value->secretkey)
        ];

        $MailProvider->sendEmail($data);

    }

    private function getTOTP($secretkey){

        $tokens = explode(" # ",TokenAuth6238::getTokenCode($secretkey)); // # 509459 # 732134 # 630327 # 445615 # 613425 # 346399 # 172778

        return $tokens[1];
    }

}

?>