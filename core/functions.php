<?php

    //password wrong alert start
    function wrongalert($data){
        return "<p style='background:#da8f97;padding:6px 0 6px 10px;font-size:10px;font-weight:600;'>$data</p>";
    }
    function alert($data){
        return "<p style='background:var(--info);padding:6px 0 6px 10px;font-size:10px;font-weight:600; '>$data</p>";
    }

    function short($str,$length="30"){
        return substr($str,0,$length).'...';
    }
    // input text mar '',"",/ twe ko sit htote tr pr//
    function textFilter($text){
        $text = trim($text);
        $text= htmlentities($text, ENT_QUOTES);
        $text= stripcslashes($text);
        return $text;
    }

    function runQuery($sql){
        $con = con();
        if(mysqli_query($con,$sql)){
            return true;
        }else{
            die("Query Fail : ".mysqli_error($con));
        }
    }
    //password wrong alert end

    // register start
    function register(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        
        if($password == $cpassword){
            $spass = password_hash($password,PASSWORD_DEFAULT);
            $sql =  "INSERT INTO users(name,email,password) VALUES ('$name','$email','$spass')";
            mysqli_query(con(),$sql);
            
        }else{
           return wrongalert('Password do not match');
        }
    }

    //register end


    //login start
        function login(){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM  users WHERE email= '$email'";
            $query = mysqli_query(con(),$sql);
            $row= mysqli_fetch_assoc($query);

            if(!$row){
                return wrongalert("Email or Password do not match"); 
            }else{
                if(!password_verify($password,$row['password'])){
                    return wrongalert("Email or Password do not match");
                }else{
                    session_start();
                     $_SESSION['users'] = $row; 
                    header("location:dashboard.php"); 
                }
            }
        }
    //login end



    //category start

        function fetchAll($sql){
            $con = con();
            $query = mysqli_query($con,$sql);
            $rows = [];
            while($row = mysqli_fetch_assoc($query)){
               array_push($rows,$row);
            }
            return $rows;
        }

        function fetch($sql){
            $con = con();
            $query = mysqli_query($con,$sql);
           $row = mysqli_fetch_assoc($query);
           return $row;
        }

        function user($id){
            $sql = "SELECT * FROM users WHERE id=$id";
            return fetch($sql);
        }

        function users(){
            $sql ="SELECT * FROM users";
            return fetchAll($sql);
        }
        function categoryAdd(){
            
            $title = $_POST['title'];
            $user_id = $_SESSION['users']['id'];
            $sql = "INSERT INTO categories (title,user_id) VALUES ('$title','$user_id')";
            mysqli_query(con(),$sql);
        }

        function categories(){
            $sql ="SELECT * FROM categories ORDER BY ordering DESC";
            return fetchAll($sql);
           
        }

        function category($id){
            $sql = "SELECT * FROM categories WHERE id=$id";
            return fetch($sql);
        }

        function categoryUpdate(){
            $title = $_POST['title'];
            $id = $_POST['id'];
            $sql = "UPDATE categories SET title ='$title' WHERE id=$id";
            return runQuery($sql);
    }
        function categoryPin($id){
            $sql = "UPDATE categories SET ordering='0'";
            mysqli_query(con(),$sql);

            $sql = "UPDATE categories SET ordering='1' WHERE id=$id";
            return runQuery($sql);
        }
        function categoryRemovePin(){
            $sql = "UPDATE categories SET ordering='0'";
            mysqli_query(con(),$sql);
        }
        
    //category end

    //post start
    function postAdd(){
        $description = textFilter($_POST['description']);     
        $title =textFilter( $_POST['title']);
        $category_id = $_POST['category_id'];
        $user_id = $_SESSION['users']['id'];
        $sql = "INSERT INTO post (title,description,category_id,user_id) VALUES ('$title','$description','$category_id','$user_id')";
         mysqli_query(con(),$sql);
    }

    function posts(){
        if($_SESSION["users"]['role'] ==2 ){
            $current_user_id = $_SESSION['users']['id'];
            $sql ="SELECT * FROM post WHERE user_id = '$current_user_id'" ;
        }else{
            $sql ="SELECT * FROM post";
        }
        
        return fetchAll($sql);
       
    }

    function post($id){
        $sql = "SELECT * FROM post WHERE id=$id";
        return fetch($sql);
    }

    function countTotal($table){
        $sql ="SELECT COUNT(id) FROM $table WHERE 1";
        $total = fetch($sql);
        return $total['COUNT(id)'];
    }
    
    function postUpdate(){
        $description = $_POST['description'];     
        $title = $_POST['title'];
        $category_id = $_POST['category_id'];
        $id = $_POST['id'];
        $sql = "UPDATE post SET title ='$title',description='$description',category_id='$category_id' WHERE id=$id";
        return mysqli_query(con(),$sql);       
}
    //post end


    //front-panel-start
    function fPost ($orderCol="id",$orderType="DESC"){
            $sql ="SELECT * FROM post ORDER BY $orderCol $orderType";
        
        return fetchAll($sql);
    }

    function fCategory(){
        $sql ="SELECT * FROM categories ORDER BY ordering DESC";
    
    return fetchAll($sql);
}
    //Relative Post//
    function fPostByCat($category_id,$limit="1111",$post_id=0){
        $sql ="SELECT * FROM post WHERE category_id='$category_id'AND id!=$post_id  ORDER BY id DESC LIMIT $limit";
        return fetchAll($sql);
    }
    //front-panel-end

    //search

    function search($searchKey){
        $sql ="SELECT * FROM post WHERE title LIKE '%$searchKey%' OR description LIKE '%$searchKey%' ORDER BY id DESC";
        return fetchAll($sql);
    }

    function searchByDate($start,$end){
        $sql ="SELECT * FROM post WHERE created_at BETWEEN '$start' and '$end' ORDER BY id DESC";
        return fetchAll($sql);
    }
    //search

    //viewer count//

    function viewerRecord($userId,$postId,$device){
        $sql = "INSERT INTO viewers (user_id,post_id,device) VALUES ('$userId','$postId','$device')";
        runQuery($sql);
    }

    function ViewerCountByPost($postId){
        $sql = "SELECT * FROM viewers WHERE post_id=$postId";
        return fetchAll($sql);
    }
    function viewerCountByUser($userId){
        $sql = "SELECT * FROM viewers WHERE user_id=$userId";
        return fetchAll($sql);
    }
    //viewer count//

    //ads show//
    function ads(){
        $today = date("Y-m-d");
        $sql = "SELECT * FROM ads WHERE start <='$today' AND end > '$today'  ";
        return fetchAll($sql);
    }

    function ad(){
        $sql = "SELECT * FROM ads";
        return fetchAll($sql);
    }

    function adsAdd(){
         
        $ower_name =$_GET['ower_name'];
        $photo =$_GET['photo'];
        $link =$_GET['link'];
        $start =$_GET['start'];
        $end =$_GET['end'];
        $sql = "INSERT INTO ads (ower_name,photo,link,start,end) VALUES ('$ower_name','$photo','$link','$start','$end')";
        return runQuery($sql);
    }
   //ads show//
    



