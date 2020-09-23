<?php
  /*ID:602110188
name:Chen Shuo 
wechart:felicia*/
printf("Input Number of Data: ");
fscanf(STDIN, "%d", $n);
for($i=1;$i<=$n;$i++){
    echo"Data $i\n";
    printf("Name Prefix (0: Mr., 1: Miss.): ");
    fscanf(STDIN, "%s", $Prefix);
    printf("First Name: ");
    fscanf(STDIN, "%s", $fname);
    $arr[$i][]=$fname;
    printf("Last Name: ");
    fscanf(STDIN, "%s", $lname);
    $arr[$i][]=$lname;
    printf("Gender (0: Male, 1: Female): ");
    fscanf(STDIN, "%s", $gender);
    printf("Phone Number: ");
    // use %s for phone number
    //fscanf(STDIN, "%d", $phone);
    fscanf(STDIN, "%s", $phone);
    $arr[$i][]=$phone;
}
echo"\n";
if($Prefix==0){
    $p="Mr.";}
if($Prefix==1){
    $p="Mrss.";}
if($gender==0){
    $g="Male";}
if($gender==1){
    $g="Female";} 
for($j=1;$j<=$n;$j++){
echo"------------------------------------------------------\n";
printf("%s %s %s\n",$p,$arr[$j][0],$arr[$j][1]);
echo"Gender: $g\n";
printf("Phone Number: %d\n",$arr[$j][2]);
}   
echo"------------------------------------------------------";

