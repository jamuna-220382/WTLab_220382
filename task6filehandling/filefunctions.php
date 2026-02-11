<?php
//file read/write
echo "file read/write operations";
echo "<br>";
//writing into a file
$file=fopen("wt.txt","w");
fwrite($file,"this is updated file");
fclose($file);
//appending into a file
$file2=fopen("wt.txt","a");
fwrite($file2,"i am jamuna and i am 20 years old and i studying cse in rgukt.");
fclose($file2);
//reading into a file
$file1=fopen("wt.txt","r");
$content=fread($file1,filesize("wt.txt"));
echo $content;
fclose($file1);
echo  "<br>";
// $status=unlink("wt.txt");
// if($status){
//     echo"deleted";
// }else{
//     echo "file not found";
// }
//opening and reading into a file
echo file_get_contents("wt.txt");#faster than fopen and fread
echo  "<br>";
file_put_contents("wt.txt","this is library");#faster than fopen and fwrite
//file()-reads file and store each line in an array
$arr=file("wt.txt");
print_r($arr);
echo  "<br>";
echo  "<br>";
echo  "<br>";

echo "file information";
echo  "<br>";
//file information
if(file_exists("wt.txt")){ //prevents error before opening a file
    echo "file found";
}
else{
    echo "file not found";
}
echo  "<br>";
echo "size of wt.txt file is";
echo filesize("wt.txt");//gives filesize
echo  "<br>";
echo "type of wt.txt file is  ";
echo filetype("wt.txt");//tells about it is file or directory
echo  "<br>";
echo "file is last accessed at ";
echo date("y-m-d H:i:s",fileatime("wt.txt"));
echo  "<br>";
echo "file is last modified at ";
echo date("y-m-d H:i:s",filemtime("wt.txt"));
echo  "<br>";
echo "file is created at ";
echo date("y-m-d H:i:s",filectime("wt.txt"));
echo  "<br>";
echo "file permissions ";
echo fileperms("wt.txt");
echo "<br>";
echo "file owner ";
echo fileowner("wt.txt");
echo "<br>";
echo fileinode("wt.txt");
echo "<br>";
echo filegroup("wt.txt");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



//file and folder management
echo "file and folder management";
echo "<br>";
//copy(source,destination)
copy("wt.txt","wt1.txt");
echo "file copied succesfully";
echo "<br>";
//rename
rename("wt1.txt","jamuna.html");
echo "file is renamed succesfully";
echo "<br>";
//rename can move files too
//rename("jamuna.html","htdocs/jamuna.html");
unlink("jamuna.html");
echo "file is deleted successfully";
echo "<br>";
mkdir("jamuna",0777);//only to create just give folder name and dont give permissions
echo "folder name jamuna is created with fullaccess";
echo "<br>";
rmdir("jamuna");//delete empty directory //folder must be empty otherwise error
echo "deleted successfully";
echo "<br>";
//is_file to check wheter it a file or directory
//is_dir to check wheter it a file or directory
echo is_file("wt.txt");
echo "<br>";
echo is_dir("wt.txt");
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


//directory handling
echo "directory handling";
echo "<br>";
$a1=scandir("uploads");
print_r($a1);
echo "<br>";
$dir=opendir("uploads");
echo $dir;
while(($filei=readdir($dir))!=FALSE)
    {
        echo $filei . "<br>";
    }
    closedir($dir);
  echo getcwd()."<br>";
  chdir("uploads");
  echo getcwd()."<br>";

?>