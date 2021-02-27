<?php
interface family
{
    public function location();
    public function people_count();
}
class father implements family
{
     public function location(){
       echo   $city='Kosovo';
        echo $country='Serbia';
     }
    public function people_count(){}
    public $age = 40;
    public $wife = 'Cooney';
    public $job='soldier';
}
$father=new father;
class mother implements family
{
     public function location(){
         echo $city='Kosovo';
       echo  $country='Serbia';
     }
    public function people_count(){}
    public $age = 12;
    public $husband = 'muhammad';
    public $job='gender theoretic';
}
$mother=new mother;
class child implements family
{
     public function location(){
echo $city='Kosovo';
echo     $country='Serbia';
     }
    public function people_count(){}
    public $age = 6;
    public $sex = 'male';
}
