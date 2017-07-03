<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 11:38
 */
//
//class Outer extends IteratorIterator{
//    public function current(){
//        return parent::current()."-current()";
//    }
//    public function key(){
//        return parent::key()."-key()";
//    }
//}
//$array=array('value1','value2','value3','value4');
//$out = new Outer(new ArrayIterator($array));
//
//var_dump($out);
//
//foreach($out as $key => $value){
//    echo $key."||".$value."</br>";
//}

//
//$str = "aaa,bbb,ccc,ddd";
//
//echo strtr($str,array(','=>':'));
//phpinfo();

//$memcache = new Memcache;
//$memcache->connect('127.0.0.1',11211) or die('链接失败');
//
//$memcache->set('key','hello memcache!');
//
//$out = $memcache->get('key');
//echo $out;

$str = '{
    "code": 0,
    "message": "success",
    "cost": 1.516,
    "type": "vod",
    "data": {
        "duration": 124,
        "streams": [
            {
                "quality": "HD",
                "type": "FLV",
                "segs": [
                    {
                        "duration": 1,
                        "url": "http://1 "
                    }
                ]
            },
            {
                "quality": "HD",
                "type": "M3U8",
                "segs": [
                    {
                        "url": "http://2 ",
                        "duration": 2
                    }
                ]
            }
        ],
        "title": "标题"
    }
}';


//PHP stdClass Object转array
function object_array($array) {
    if(is_object($array)) {
        $array = (array)$array;
    } if(is_array($array)) {
        foreach($array as $key=>$value) {
            $array[$key] = object_array($value);
        }
    }
    return $array;
}


$arr = object_array(json_decode($str));
echo "<pre>";
print_r(json_decode($str));




