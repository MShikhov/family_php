<?php
class family
{
    public $country = 'Serbia';
    public $city = 'Kosovo';
    public function people_count()
    {
        return "three people";
    }
}
$family=new family;
class father extends family
{
    public $age = 40;
    public $wife = 'Cooney';
    public $job='soldier';
}
$father=new father;
class mother extends family
{
    public $age = 12;
    public $husband = 'muhammad';
    public $job='gender theoretic';
}
$mother=new mother;
class child extends family
{
    public $age = 6;
    public $sex = 'male';
}
$child=new child;
var_dump($family);
echo $family->people_count();