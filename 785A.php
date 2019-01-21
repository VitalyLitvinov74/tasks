<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 22.01.2019
 * Time: 1:11
 */
class stdIn{var $ntxt = 0;var $nline = 0;var $arr_txt;var $arr_line;var $linex;var $liney;
    function stdIn($local = false){if($local){$dir = fopen("input.txt", 'r');}else{$dir = fopen("php://stdin", 'r');}
        $datatxt = stream_get_contents($dir);$del = Array("\n","\r","\n\r");$data = explode("\n",$datatxt);	$il = 0;$id = 0;
        foreach($data as $line){if(strlen($line) > 0){$line = str_replace($del,'',$line);$dataex[] = $line;$text = explode(" ",$line);
            foreach($text as $txt){$arr_txt[] = $txt;$this->linex[$id] = $il;$this->liney[$il] = $id;$id++;}}$il++;}$this->arr_line = $dataex;$this->arr_txt  = $arr_txt;}
    function G(){$ret = $this->arr_txt[$this->ntxt++];$this->nline = $this->linex[$this->ntxt];return $ret;}
    function GL(){$this->ntxt = $this->liney[$this->nline]+1;return $this->arr_line[$this->nline++];}} /*init*/

$inp = new stdIn(false);
$n = $inp->arr_line[0];
$gran = 0;
for ($i=1;$i<$n+1;$i++){
    $str = $inp->arr_line[$i];
    switch ($str){
        case "Tetrahedron":
            $gran = $gran + 4  ;
            break;
        case "Cube":
            $gran = $gran +  6 ;
            break;
        case "Octahedron":
            $gran = $gran + 8  ;
            break;
        case "Dodecahedron":
            $gran = $gran +  12 ;
            break;
        case "Icosahedron":
            $gran = $gran + 20  ;
            break;

    }
}
echo $gran;