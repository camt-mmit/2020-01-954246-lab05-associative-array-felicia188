<?php
/**
 * goto is an anti-pattern so DO NOT use it.
 * Try to don't use goto in your code.
 */
$i=1;
$Prefix=1;
while($Prefix=='0'||empty($Prefix)==false)
{
    $Prefix=null;
    echo"Data $i\n";
    printf("Name Prefix (0: Mr., 1: Miss., 2: Mrs.):");
    fscanf(STDIN, "%s", $Prefix);
    if($Prefix==null){
        goto a;
    }
    printf("First Name: ");
    fscanf(STDIN, "%s", $fname);
    $arr[$i][0]=$fname;
    printf("Last Name: ");
    fscanf(STDIN, "%s", $lname);
    $arr[$i][1]=$lname;
    printf("Gender (0: Male, 1: Female, 2: Transgender):");
    fscanf(STDIN, "%d", $gender);
    do{
    $phone=null;
    printf("Phone Number: ");
    fscanf(STDIN, "%s", $phone);
    $arr1[$i][]=$phone;
    }while(empty($phone)==false);
 $i+=1; 
 a:;  
}
echo"\n";
if($Prefix==0){
    $p="Mr.";}
if($Prefix==1){
    $p="Mrss.";}
if($Prefix==2){
    $p="Mrs.";}
if($gender==0){
    $g="Male";}
if($gender==1){
    $g="Female";} 
if($gender==2){
    $g="Transgender";}
 


for($j=1;$j<$i;$j++){  
echo"------------------------------------------------------\n";
printf("%s %s %s\n",$p,$arr[$j][0],$arr[$j][1]);
 echo"Gender: $g\n";
printf("phone number:");
    // this must be count($arr1[$j]) instead of count($arr1)
     //for($x=0;$x<count($arr1);$x++){
     for($x=0;$x<count($arr1[$j]);$x++){
         printf("%s",$arr1[$j][$x]);
            if($x<count($arr1[$j])-2){
            echo",";
                    }
            }
            echo"\n";   
        }   
    echo"\n";
echo"------------------------------------------------------";
       
