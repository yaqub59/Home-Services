<?php

use App\Models\Setting;

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
