<?php
class Building{
    /*properties
     * 属性
     * @var string $name 建物名
     * @var int    $height 高さ
     */
    private $name;
    private $height;
    /* contrusctor
     */
    
    function __construct(string $name, int $height) {
        $this->name = $name;
        $this->height = $height;
    }
    
    // accsessor methods
    function getName():string{
        return $this->name;
    }
    function setName(string $name):void{
        $this->name = $name;
    }
    
    function getAge():int{
        return $this->age;
    }
    function setAge(int $age):void{
        $this->age = $age;
    }
    
    function getProfile():String {
        $profile = "{$this->name} の高さは {$this->height} mです";
        return $profile;
    }
}
?>