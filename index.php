<?php
    class User
    {
        public $name;
        public $username;
        public $email;

        function addFriend($name)
        {
            echo $name. " added a friend.";
        }
        function postStatus($name)
        {
            echo $name. " posted a status.";
        }
    }
        $example = new User();
        echo $example->addFriend('Irish Traqueña');
        echo "<br>";
        echo $example->postStatus('Irish Traqueña');
?>