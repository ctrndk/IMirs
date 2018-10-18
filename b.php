<?php
function cek($files, $searchfor){
    $file = $files;;
    $searchfor;
    //header('Content-Type: text/plain');
    $contents = file_get_contents($file);
    $pattern = preg_quote($searchfor, '/');
    $pattern = "/^.*$pattern.*\$/m";
         $cek = preg_match_all($pattern, $contents, $matches);
          if($cek){
             $word = 1;
             echo $word;
          }
          else{
            $word = 0;
             echo $word;
          }
      }
function not($files, $searchfor){
    $file = $files;;
    $searchfor;
    $contents = file_get_contents($file);
    $pattern = preg_quote($searchfor, '/');
    $pattern = "/^.*$pattern.*\$/m";
         $cek = preg_match_all($pattern, $contents, $matches);
          if($cek){
             $word = 0;
             echo $word;
          }
          else{
            $word = 1;
             echo $word;
          }
      }

function bacafile($nama){
  $myfile = fopen("$nama", "r") or die("Unable to open file!");
echo fread($myfile,filesize("$nama"));
fclose($myfile);
}

for ($i=1;$i<=4;$i++){
echo "Doc".$i." = "; bacafile('doc'.$i.'.txt'); echo "\n";
}
echo "++++++++++++++++++++++++++++++++++++++\n";
echo "Misal: Home AND Sales NOT July\n";
echo "!! Kata ke - 3 Harus NOT\n";
echo "++++++++++++++++++++++++++++++++++++++\n";
echo "Masukkan Kata ke - 1 : ";
$input1 = trim(fgets(STDIN)); 
echo "Masukkan Kata ke - 2 : ";
$input2 = trim(fgets(STDIN)); 
echo "Masukkan Kata ke - 3 : ";
$input3 = trim(fgets(STDIN)); 
echo "++++++++++++++++++++++++++++++++++++++\n";
echo "Hasilnya : \n";
$exe = exe($input1, $input2, $input3);
print $exe;

function exe($input1, $input2, $input3){
$j=4;
for($i=1;$i<=$j;$i++){
cek('doc'.$i.'.txt', $input1);
}
echo " AND ";
for($i=1;$i<=$j;$i++){
cek('doc'.$i.'.txt', $input2);
}
echo " NOT ";
for($i=1;$i<=$j;$i++){
cek('doc'.$i.'.txt', $input3);
}
echo "\n------------";
echo "\n";
for($i=1;$i<=$j;$i++){
cek('doc'.$i.'.txt', $input1);
}
echo " AND ";
for($i=1;$i<=$j;$i++){
cek('doc'.$i.'.txt', $input2);
}
echo " AND ";
for($i=1;$i<=$j;$i++){
not('doc'.$i.'.txt', $input3);
}
}
?>

