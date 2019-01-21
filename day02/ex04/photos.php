#!/usr/bin/php
<?php
//https://regex101.com
//https://www.youtube.com/watch?v=a009-iSZ7AU
//error_reporting(0);
function get_link($url)
{
$curl = curl_init($url);
curl_setopt($curl); //not to print sourse code, put it in string
$output = curl_exec($curl);
return $output;
}

function find_images($web_source)
{
  preg_match_all("/<img[^>]+src=([^\s>]+)/", $web_source, $full_links);
  return ($full_links);
}

function make_folder($url)
{
    preg_match("/([^\/]+)$/", $url, $dir_name);
    //print_r($dir_name);
    $dir_name = $dir_name[1];
    if (file_exists($dir_name))
            return ($dir_name);
    mkdir($dir_name);
    return ($dir_name);
}

function downloadImg($imgs_link, $folder)
{
  foreach ($imgs_link[1] as $img) {
            $fp = fopen($folder."/".catname($img),'w');
            fwrite($fp, $img);
            fclose($fp);
        }
}

function catname($imgs_link)
{
  preg_match("/([^\/]+)$/", $imgs_link, $matches);
  if (substr($matches[1], -1) === "\"")
      return(substr($matches[1], 0, -1));//take away " from the end
  return ($matches[1]);
}

$url = $argv[1];
$web_source = get_link($url);
$curl = curl_init($url);
$folder = make_folder($url);
$imgs_link = find_images($web_source);
//print_r($imgs_link);
// foreach ($imgs_link[1] as $img)
// {
// $imgs_name = catname($img);
// print("$imgs_name\n");
// }
downloadImg($imgs_link, $folder);

 ?>
