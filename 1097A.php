<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 23.01.2019
 * Time: 13:31
 */
class stdIn{var $ntxt = 0;var $nline = 0;var $arr_txt;var $arr_line;var $linex;var $liney;
    function stdIn($local = false){if($local){$dir = fopen("input.txt", 'r');}else{$dir = fopen("php://stdin", 'r');}
        $datatxt = stream_get_contents($dir);$del = Array("\n","\r","\n\r");$data = explode("\n",$datatxt);	$il = 0;$id = 0;
        foreach($data as $line){if(strlen($line) > 0){$line = str_replace($del,'',$line);$dataex[] = $line;$text = explode(" ",$line);
            foreach($text as $txt){$arr_txt[] = $txt;$this->linex[$id] = $il;$this->liney[$il] = $id;$id++;}}$il++;}$this->arr_line = $dataex;$this->arr_txt  = $arr_txt;}
    function G(){$ret = $this->arr_txt[$this->ntxt++];$this->nline = $this->linex[$this->ntxt];return $ret;}
    function GL(){$this->ntxt = $this->liney[$this->nline]+1;return $this->arr_line[$this->nline++];}} /*init*/

$inp = new stdIn(false);
$cart = $inp->arr_line[0];
$deck = $inp->arr_line[1];
$suitCart = $cart[1];
$rangCart = $cart[0];
$arrDeck = explode(' ', $deck);
foreach ($arrDeck as $deck){
    $suitDeck = $deck[1];
    $rangDeck = $deck[0];
    if($suitCart==$suitDeck or $rangCart==$rangDeck){
        echo "YES"; die;
    }
}
echo "NO";