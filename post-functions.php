<?php 

require_once 'configuration.php';


if($_POST['action'] == 'edit-post')
{

    if( is_iterable( $_POST ) )
    {
        $id = $_POST['post'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $msg = 'No';

        $sql = "UPDATE posts SET title ='$title', description='$description', image='$image', category='$category') where id = $id";
        if($connect->query($sql) === TRUE) {
            $msg = "Record Updated Successfully.";
        } else {
            $msg = "Error " . $sql . ' ' . $connect->connect_error;
        }
        $connect->close();
        header('Location:edit-post.php?msg='.$msg);
    }
}

if($_POST['action'] == 'add-new')
{
    if( is_iterable( $_POST ) )
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        $category = $_POST['category'];
        $reg_date = $_POST['reg_date'];
        $msg = 'No';

        $sql = "INSERT INTO posts (title, description, image, category, reg_date) VALUES ('$title', '$description', '$image', '$category', '$reg_date')";
        if($connect->query($sql) === TRUE) {
            $msg = "New Record Created Successfully.";
        } else {
            $msg = "Error " . $sql . ' ' . $connect->connect_error;
        }
        $connect->close();
    }
    header('Location:add-post.php?msg='.$msg);
}

?>
