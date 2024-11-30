
    <?php
    //get the db connection file
    require_once "dbconf.php";
    try{
        //query
        $sql = "SELECT * FROM STUDENTS";
        //execute the query
        $result = mysqli_query($connect,$sql);

        //check if date exists
        if(mysqli_num_rows( $result > 0)){
            //fetch the data from rows
            while($row = mysqli_fetch_assoc($result)){
                print_r($row);
            }
        } else{
            echo "No results";
        }
    }
    catch(Exception $e){
        die($e->getMessage());
    }