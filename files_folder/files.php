<? 
/*
You are required to work as a team and complete the following task during the online session
we will check your implementation on 16.02.2022 and the team repo must contain the following task
Each one of you will first do it in your own repo (or branch) and then the final version in the team repo. 
This task is not graded however will have some impact on the final grade
It also will help you to practice utlizing GitHub in project work
*/
    # 1. Create/read a text file by using approprite php functions 
    # Step 1: check if file exists or not
    # Step 2: Open the file using appropriate mode. (each member opens the file in different mode)
    # Step 3: Use fwrite/fread function to write/read on the file your team name and members name. 
    # Step 4: Close the file 

    # 2. Uploaing files 
    # Step 1: Create a simple html form to upload a file. 
    # Step 2: You are required to limit the upload file size to 2 MB. 
    # Step 3: Make sure that users can submit only images. 
    # Step 4: Upon successful upload, you print a message "File uploaded successfully" and also 
    # provide the link to the directory where files are uploaded.

    echo "<h1>------------------Task 1: Read/Create File----------------------</h1>";
    
    echo "<h2>Check the existance of file</h2>";

if (file_exists("./members_name.txt")){
    echo "File exits <br>";
}

else{
    echo "File does not exist";
}

echo "<h2>Creating file</h2>";

$members_name = fopen('members_name.txt' , 'w') or die ("Failed to create");
$txt = "Team number: 14 and Members name:  Anton , Hafiz and Syed ";

fwrite($members_name, $txt);

fclose($members_name);

echo "<h2>Reading file</h2>";

$fname = "members_name.txt";

$handle = fopen($fname, 'r');

$contents = fread($handle, filesize($fname));

echo $contents;

fclose($handle);

echo "<h2>Read the customized file</h2>";

$fh = fopen('members_name.txt' , 'r') or die ('Failed to read the file');

$text = fread ($fh , 5);

echo $text;

fclose($fh);


echo "<h2>Read the Remote file using URL</h2>";


$new_handle = fopen("https://raw.githubusercontent.com/hafizkh/Team14Web/main/members_name.txt" , "rb");

if (FALSE === $new_handle){
    exit("Failed to open the stream");
}

$cont = stream_get_contents($new_handle);

echo $cont;

fclose ($new_handle);


?>