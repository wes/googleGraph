<?php
class graph {
	
	var $data = array();
	var $opts = array();
	var $colors;
	var $areaColors;
	var $labels;

	function render(){
	
		foreach($this->data as $d){
			$dd = explode(",",$d);
		}
		
		$maxAxis = max($dd);
		
		if(empty($this->colors)){
			$this->colors = '000000';
		}
		if(empty($this->areaColors)){
			$this->areaColors = 'D,4D89F9,0,0,5';
		}
	
		if(!$this->opts['w']){ $this->opts['w'] = 100; }
		if(!$this->opts['h']){ $this->opts['h'] = 100; }
		if(!$this->opts['class']){ $this->opts['class'] = 'graph'; }
		if(!$this->opts['bg']){ $this->opts['bg'] = 'ffffff'; }
		
		$url = array();
		$url[] = "http://chart.apis.google.com/chart?";
		$url[] = "cht=ls";
		$url[] = "&chs=".$this->opts['w']."x".$this->opts['h'];
		$url[] = "&chd=t:".implode(",",$this->data);
		$url[] = "&chco=".$this->colors;
		$url[] = "&chl=".implode('|',$this->labels);
		$url[] = "&chm=".$this->areaColors;
		$url[] = "&chg=20,50,1,5";
		$url[] = "&chxt=x,y";
		$url[] = "&chbh=7,2";
		$url[] = "&chds=-2,".$maxAxis;
		$url[] = "&chf=bg,s,".$this->opts['bg'];
		
		return "<img src='".implode("",$url)."' width='".$this->opts['w']."' height='".$this->opts['h']."' border='0' />";
		
	}
	
}
?>