<?php
requirce_once("Building.php");
class Tower extends Building {
    private $builtYear;
    
    function __construct(string $name, int $height, int $builtYear) {
        parent::__construct($name, $height);
        $this->builtYear = $builtYear;
        
    }
    function getProfile():string {
        $profile = "{$this->name} の高さは{$this->height} mで、{$this->builtYear} 年に開業しました。";
    
        return $profile;
    }
    
}
?>