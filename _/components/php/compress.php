<?php
/**
 * Sends a page request using cURL
 * 
 * @param string $url
 * @param array $post
 * @param boolean $code
 * @param array $header
 *
 * @return string
 * */
function simpleCurl($url,$post,$code = false,$header = array('Expect:'))
{
    $postValuesString = '';
    foreach($post as $var => $val){
        if(strlen($postValuesString))$postValuesString.= "&";
            $postValuesString.= $var . "=" . urlencode($val);
    }
    $ch = curl_init(); 
    // set url 
    curl_setopt($ch, CURLOPT_URL, $url); 

    //return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POST,0);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$postValuesString);
    curl_setopt($ch, CURLOPT_HTTPHEADER,$header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    // $output contains the output string 
    $output = curl_exec($ch);
    if($errno = curl_errno($ch)) {
        $error_message = curl_strerror($errno);
        echo "<script>alert('error');</script>";
        return "cURL error ({$errno}):\n {$error_message}";
    }
    if (true === $code) {
            return curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
    // close curl resource to free up system resources 
    curl_close($ch);  
    return $output;
}
/**
 * Strips line breaks, white space and comments
 * 
 * @param string $in
 *
 * @return string
 * */
function compress($in)
{
    $out = str_replace("\n",'',$in);
    $out = str_replace("\t",'',$out);
    $out = str_replace("\r",'',$out);
    $out = preg_replace('!\s+!', ' ', $out);
    $out = preg_replace('/<!--(.*)-->/Uis', '', $out);
    $out = str_replace('<script src="http://localhost:35729/livereload.js"></script>','',$out);
    return $out;
}
// we dont want people coming across this page an compiling the homepage
// true it (shouldn't make any difference), its highly unlikely, and I don;t plan on having this code on the live server....just in case


// run curl if it hasn't been run already
if(!isset($_POST['chgfysfuygf54fg'])) {
    $file = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : false;
    if(false === $file)isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : false;
    if(false === $file){$file = 'index.html';
    }else{
        $file = substr($file,strpos($file,'/php/')+5,strlen($file));
        $file_ = str_replace('.php','.html',$file);
    }
    $result = compress(simpleCurl(PURL.'/_/components/php/'.$file,array('chgfysfuygf54fg'=>1)));
    
    if(false !== file_put_contents(PDIR.$file_,$result)) {
        // success
    }else{
        echo "<script>alert('error');</script>";
    }
}