<?php

    # convert the url params into a variable to allow to make request to to the DB. Convert The path values into an array. The indexs will be created through the /
    #==================================================
    $routesToArray = explode( '/', $_SERVER[ 'REQUEST_URI' ]);
    
    # Cleaning the path values to remove empty values. Returns just the valud after the first /
    $routesToArray = array_filter( $routesToArray);

    # condition when there are not request to the api. This determine if the path values are empty, or there are more path values after / manin domain 
    #==================================================
    if(count($routesToArray) == 0 ){
        
        # if the path values are empty then return home page
        require "views/home.php";
        return;
    }
    
    # Handle the request mehtods. Detect wich kind of request method we are ussing 
    #==================================================
    $request_mathod = $_SERVER['REQUEST_METHOD'];

    if(count($routesToArray) == 1 && isset( $request_mathod )){

        # Defining the table variable to be used in oll the request
        # Generate an array with the information that the table variable is capturing. Here we separate in index what comes to the left side or the right side of the url having as reference the ? sign
        $table = explode("?", $routesToArray[1])[0]; 
        

        # GET Method 
        if($request_mathod == "GET"){
            # Include the get.php content in the main path
            // $json = array(
            //     'status' => 200,
            //     'results' => 'GET Request'
            // );
            // echo json_encode($json, http_response_code($json['status']));
            
            include "services/get.php";
        }

        # POST Method
        if($request_mathod == "POST"){

            include "services/post.php";
        }

        /*PUT Method */
        if($request_mathod == "PUT"){
            include "services/put.php";
        }
        
        /*DELETE Method */
        if($request_mathod == "DELETE"){
            
            include "services/delete.php";
        }
    }

?>
