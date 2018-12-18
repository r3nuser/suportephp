<?php

class FileManager{

    public $path;
    public $mode;
    public $file;

    public function openFile(){
        $this->file = fopen($this->path, $this->mode);
    }

    public function closeFile(){
        fclose($this->file);
    }

    public function addInFile($content){
        fwrite($this->file, $content);
    }

    public function __construct($p, $m){
        $this->path = $p;
        $this->mode = $m;

        $this->openFile();
    }

}

?>
