<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Véhicule</title>
</head>
<body>
    <?php 
   class Véhicule{
    public$make;
    public $model;
    public $color;
    protected $noOfWheels;
    public $engineNumber;
    public static $counter = 0 ;
     public function getMake(){
        return $this->make;
     }
     public function getModel(){
        return $this->model;
     }
     public function getColor(){
        return $this->color;
     }
     public function getNoOfWheels(){
        return $this->noOfWheels;
     }
     public function getEngineNumbe(){
        return $this->engineNumber;
     }
   
     public function __constract($make,$model,$color,$noOfWheels,$engineNumber){
        $this->make=$make;
        $this->model=$model;
        $this->color=$color;
        $this->noOfWheels=$noOfWheels;
        $this->engineNumber=$engineNumber;
        $this->counter=$counter++;
      
     }
    //  public function setMake($make){
    //    $this->make=$make;
    //  }
    //  public function setModel($model){
    //     $this->model=$model;
    //   }
    //   public function setColor($color){
    //     $this->color=$color;
    //   }
    //   public function setNoOfWheels($noOfWheels){
    //     $this->noOfWheels=$noOfWheels;
    //   }
    //   public function setEngineNumbe($engineNumber){
    //     $this->engineNumber=$engineNumber;
    //   }
   
   }
   class car extends Véhicule{
    public $doors;
    public $passengerCapacity;
    public $steeringWheel;
    public $transmission;
 }
 class Motorcycle extends Véhicule{
    public $noOfWheels;
    public $strke;
    public $type;
 }
   $c=new car();
   echo var_dump($c);

   $m=new Motorcycle();
   echo var_dump($m);

   $p= new Véhicule();

   
//    echo '<pre>';
//    echo var_dump($p);
//    echo '</pre>';
//    $p->setMake('japan');
//    $p->setModel(2019);
//    $p->setColor('red');
//    $p->setNoOfWheels(4);
//    $p->setEngineNumbe(440);

   echo $p->getMake();
   echo $p->getModel();
   echo $p->getColor();
   echo $p->getNoOfWheels();
   echo $p->getEngineNumbe();
   echo '<pre>';
   echo var_dump($p);
   echo '</pre>';
   

    ?>
</body>
</html>