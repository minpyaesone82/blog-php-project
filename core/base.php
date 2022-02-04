<?php 
    $data = ["name" => "minpyaesone", "age" => 22];

    function con(){
       return mysqli_connect("localhost","root","","blog");
    }

    $role = ["admin","editor","user"];

    $url = "http://{$_SERVER["HTTP_HOST"]}/blog-project";

    date_default_timezone_set('Asia/Yangon');