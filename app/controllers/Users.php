<?php

class Users extends Controller
{
    public function __construct()
    {
        $this->usersModel = $this->model('usersModel');
    }
    public function index()
    {
        $membershipProvider = new MembershipProvider();

        $membershipProvider->startSession();

        if($membershipProvider->loggedIn()  && $_SESSION['twofauser']){
            $users_value = $this->usersModel->getUsers();
            $data = [
                'users_key' => $users_value
            ];
            $this->view('Users/users_view', $data);
        }else{
		    session_write_close();
		    header("Location: /mvc/login?redirect=users");
        }
    }

    public function getUsers()
    {
        $users_value = $this->usersModel->getUsers();
        $data = [
            'users_key' => $users_value
        ];
        $this->view('Users/users_view', $data);
    }

    public function getspecificuser($id)
    {
        $user_value = $this->usersModel->getUser($id);
        $data = [
            'user_key' => $user_value
        ];
        $this->view('Users/details', $data);
    }

    public function createUser()
    {
        if (isset($_POST['create'])) {
            $data = [
                'username' => $_POST['username'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'phone' => $_POST['phone']
                 
            ];
            $confirmationData = $this->usersModel->createUser($data);
            if ($confirmationData['created']) {
                echo 'Please wait registering you on the application';
                //echo '<meta http-equiv="Refresh" content="0.2; url=/MVC/Users/getspecificuser/".$confirmationData['id']."">';
                //header('Location: /MVC/Users/getspecificuser/'.$confirmationData["id"].'');
                header('Location: /MVC/Home');
            }
        } else {
            $this->view('Users/createUser');
        }
    }

    public function dropDown()
    {
        $users_value = $this->usersModel->getUsers();
        $data = [
            'users_key' => $users_value
        ];
        $this->view('Users/dropDown', $data);
    }


    public function update($id)
    {
        if (!isset($_POST['update'])) {
            $user_value = $this->usersModel->getUser($id);
            $data = [
                'user_key' => $user_value
            ];
            $this->view('Users/updateUser', $data);
        } else {
            $data = [
                'username' => $_POST['username'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'phone' => $_POST['phone'],
                'id' => $id
            ];
            if ($this->usersModel->updateUser($data)) {
                echo 'Please wait updating the user';
                //echo '<meta http-equiv="Refresh" content="0.2; url=/MVC/Users/getspecificuser/".$confirmationData['id']."">';
                //header('Location: /MVC/Users/getspecificuser/'.$confirmationData["id"].'');
                header('Location: /MVC/Users');
            }
        }
    }

    public function delete($id)
    {
        if ($this->usersModel->deleteUser($id)) {
            echo 'Please wait deleting the user';
            //echo '<meta http-equiv="Refresh" content="0.2; url=/MVC/Users/getspecificuser/".$confirmationData['id']."">';
            //header('Location: /MVC/Users/getspecificuser/'.$confirmationData["id"].'');
            header('Location: /MVC/Users');
        }
    }
}
