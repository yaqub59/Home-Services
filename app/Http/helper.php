<?php

use App\Models\Setting;
use App\Models\Institute;
use App\Models\Services;

function FileUpload($file, $path)
{
	if ($file == null) {
		return null;
	}

	$filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
	$file->move(public_path($path), $filename);
	return $filename;
}

if (!function_exists('Setting')) {
	function Setting()
	{
		return Setting::first();
	}
}

// All Institutes
function getAllInstitutes()
{
    return Institute::all();
}
//
function getAllServices()
{
    return Services::all();
}

