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

    # 2. Uploading files 
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
$fname = "members_name.txt";

$membersNamesOfTeam = fopen($fname, "r");

if(!$membersNamesOfTeam){
    die ("Failed to Open");
}

readfile($fname);

echo "<h2>Reading/Writing in file</h2>";

$membersNamesOfTeam = fopen($fname, 'w');


$txt = "Team number: 14 and Members name:  Anton , Hafiz and Syed";

fwrite ($membersNamesOfTeam, $txt);

$handle = fopen($fname,'r');

$content = fread($handle, filesize($fname));

echo $content;

fclose($membersNamesOfTeam);


echo "<h2>Read the Remote file using URL</h2>";


$fileUrl = fopen("https://raw.githubusercontent.com/hafizkh/Team14Web/main/members_name.txt" , "rb");

if (FALSE === $fileUrl){
    exit("Failed to open the stream");
}

$cont = stream_get_contents($fileUrl);

echo $cont;

fclose ($fileUrl);


?>
