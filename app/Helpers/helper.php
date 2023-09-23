<?php




function assetsUpload()
{
    return url('uploads/');
}

function uploadFile($fileAttr, $path = "")
{

    $imgName = mt_rand(1000, 9999) . microtime(true) . '.' . $fileAttr->getClientOriginalExtension();
    $fileAttr->move(('uploads/' . $path), $imgName);
    return $imgName;
}



//   start lang fun
function lang($text = null)
{

    if (isset($text) && $text == 'name') {

        $data = 'name_' . App::getLocale();

    } elseif (isset($text) && $text == 'title') {

        $data = 'title_' . App::getLocale();

    } elseif (isset($text) && $text == 'desc') {

        $data = 'desc_' . App::getLocale();

    } elseif (isset($text) && $text == 'content') {

        $data = 'content_' . App::getLocale();

    } elseif (isset($text) && $text == 'description') {

        $data = 'description_' . App::getLocale();

    } else {

        $data = App::getLocale();
    }


    return $data;
}