<?php
//Tilhører NZP!
class nzpBM{
    private $start_time = false;
    public $duration;
    private $title;
    protected $bmcount = 0;
    function __construct($title){
        $this->title = $title;
    }
    function start(){
        $this->start_time = microtime(true);
    }
    function __toString(){
        ob_start();
        $this->echoBM();
        $return = ob_get_contents();
        ob_end_clean();
        return $return;
    }
    function getMicroTime(){
        return microTime(true);
    }
    function echoBM($subtitle="", $division = 1000){
        $microtime = $this->getMicroTime();
        $this->duration = $microtime - $this->start_time;
        switch($division){
            default:
                $duration = ($this->duration*1000)." miliseconds";
                break;
            case 1:
                $duration = ($this->duration)." seconds";
                break;
            case 1000000:
                $duration = ($this->duration*1000000)." microseconds";
                break;
        }
        $this->bmcount++;
        $title = $this->title;
        if(strlen($subtitle)>0) $title .= " - ".$subtitle;
        $title .= " (".$this->bmcount.")";
        echo "<p>The benchmark \"$title\" took $duration</p>";
    }
}
?>