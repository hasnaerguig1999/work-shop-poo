<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>
    <?php 
   class employee{
    private $name;
    private $age;
    private $salary;
    public function getname(){
        return $this->name;
    }
    public function getage(){
        return $this->age;
    }
    public function  getsalary(){
        return $this->salary;
    }
    public function setname($name){
        $this->name=$name;
    }
public function setage($age){
    $this->age =$age;
}
public function setsalary($salary){
    $this->salary=$salary;
}
   }
   $p=new employee();
   echo '<pre>';
   echo var_dump($p);
   echo '</pre>';

$p->setname('hasnae');
$p->setage(23);
$p->setsalary(5000);
echo '<pre>';
echo var_dump($p);
echo '</pre>';
   

    ?>
</body>
</html>