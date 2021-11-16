<?php
    abstract class ConNguoi
    {
        protected $name;
        abstract public function getName();
    }

    class TreCon extends ConNguoi
    {
        public $weight;

        function __construct($name,$weight){
            $this->name = $name;
            $this->weight = $weight;
        }

        protected function getWeight()
        {
            return $this->weight;
        }

        public function getName()
        {
            return $this->name;
        }
    }

    $treCon = new TreCon('So sinh','250g');
    // echo $treCon->getName();
    // echo $treCon->getWeight(); //Fatal error: Uncaught Error: Call to protected method TreCon::getWeight() 
    //////////////////////////////////////////////////

    abstract class AbstractClass
    {
        abstract protected function prefixName($name);
    }

    class ConcreteClass extends AbstractClass
    {
        public function prefixName($name, $separator = ".")
        {
            if ($name == "nam"){
                $prefix = "MR";
            } elseif ($name == "nu") {
                $prefix = "MRS";
            } else {
                $prefix = "";
            }
            return "{$prefix}{$separator} {$name}";
        }
    }

    $hello = new ConcreteClass;
    echo $hello->prefixName("nam"), "\n";
    echo $hello->prefixName("nu"), "\n";
?>