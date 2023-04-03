<?php

class Jeff
{
    
    private $items = [];

    public function dbLoad($pdo)
    {
        $q_ps = $pdo->prepare("SELECT * FROM `layout` ");
        $q_ps->execute();

        foreach ($q_ps as $entry) {

            $this->addItem(new JeffItem($entry['pageid'], $entry['title'], $entry['contentid'], $entry['headerid']));
        }
    }
 
    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function __toString()
    {
        $out = "<ol>";
        //$out = "<h1>{$this->title}";
        foreach ($this->items as $item) {
            $out .= $item;
        }
        $out .= "</ol>";


        return $out;
    }
} 

class JeffItem{
    public $title;
    public $contentid;
    public $headerid;
    public $pageid;

    public function __construct($pageid,$title,$contentid,$headerid)
    {
        $this->pageid = $pageid;
        $this->title = $title;
        $this->contentid = $contentid;
        $this->headerid = $headerid;
    }

    public function __toString()
    {
        $cl = "<p>{$this->pageid} {$this->title} {$this->contentid} {$this->headerid}</p>";

        return $cl;
    }



}