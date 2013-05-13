<?php

class FileInfo{
	private $_retCode;

	function readFile($file){
		$this->_retCode['CRLF'] = 0;
		$this->_retCode['LF'] = 0;

		$fp = fopen($file, 'r');
		if(!is_resource($fp)){
			die('ファイルを開けませんでした。');
		}

		while(!feof($fp)){
			$line = fgets($fp);
			if(preg_match('/¥r$/', $line)){
				$this->_retCode['CRLF']++;
			}else{
				$this->_retCode['LF']++;
			}
		}
		fclose($fp);
	}

	function getRetCode(){
		if($this->_retCode['CRLF'] == 0){
			return 'LF';
		}else if($this->_retCode['LF'] == 0){
			return 'CRLF';
		}else{
			return 'CRLF & LF';
		}
	}
}