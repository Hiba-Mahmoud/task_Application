<?php

// helper functions

use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Http\UploadedFile;



function diffForHumans($date){
    return Carbon::create($date)->diffForHumans();
}


 // upload images and files
function upload(UploadedFile $file, $folder)
{
    $date_path = date("Y") . '/' . date("m") . '/' . date("d") . '/';
    $path = public_path() . '/assets/uploads/' . $folder . '/' . $date_path;

    if (!File::exists($path)) {
        File::makeDirectory($path, 0777, true);
    }

    $file_name = date('YmdHis') . mt_rand() . '_' . $folder . '.' . $file->getClientOriginalExtension();

    if ($file->move($path, $file_name)) {
        return $img = '/assets/uploads/' . $folder . '/' . $date_path . $file_name;
    }

}

function stringToArray($string)
{
    return $string;
}
