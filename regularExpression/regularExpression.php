<?php

    class regularExpression{
        //作业2在数组找寻合格的字符
        public function inArraySearch(){
            $array=array("Linux RedHat9.0", "Apache2.2.9", "MySQL5.0.51", "PHP5.2.6", "LAMP", "100");
            foreach ($array as $value){
                if(preg_match_all("/^[a-zA-Z]\\S+\\d$/i",$value,$stringArray,PREG_PATTERN_ORDER)){

                    $arrayTmp[]=$stringArray;

                }

            }
            return $arrayTmp;
        }
        //作业2
        function inUrlSearch(){
            $str='http://www.yaochufa.com/index.php';
            $array=explode('/',$str);
            var_dump($array);
            foreach ($array as $vals){
               /* $val=str_replace(':','',$vals);*/
                if(preg_match_all("/\\w+:$/",$vals)) {
                    var_dump($vals);
                    $val = str_replace(':', '', $vals);
                    $url = $val;
                    continue;
                }else if(empty($vals)){
                    continue;

                }else if(preg_match_all("/^w+.[.].+[.][a-zA-Z]+m$/",$vals)){

                    $host=str_replace('.','',strstr($vals,'.',true));

                    $domainName=str_replace('.','',strstr($vals,'.'));
                    continue;

                }else if(preg_match_all("/[.]/",$vals)){
                    $fileName=$vals;
                    continue;
                }
            }
            $uri="protocal=".$url."|host=".$host."|domainName=".$domainName."|fileName=".$fileName;
            return $uri;
        }
        function searchURL(){
            $str="<tr><td><a href='http://qzone.qq.com'>QQ空间</a></td><td><a href='http://www.ganji.com'>赶 集 网</a></td><td><a href='http://www.baixing.com'>百 姓 网</a></td><td><a href='http://www.taobao.com'>淘 宝 网</a></td><td><a href='http://tuan.baidu.com'>百度团购</a></td><td><a href='http://www.dianping.com'>大众点评网</a></td></tr>";

            preg_match_all("/http:\/\/[a-zA-Z]+\.[a-zA-Z]+\.com/i",$str,$url);
            return $url;

        }
        function deleteHtmlTag(){
            $str="<b>粗体</b><u>带有下划线</u><i>斜体</i><font color='red' size='7'>带有颜色和字体大小</font>";
            $newStr=preg_replace("/<.*>/U","",$str);
            return $newStr;
        }
    }
