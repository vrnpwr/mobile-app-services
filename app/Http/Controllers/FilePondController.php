<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilePondController extends Controller
{

	public function uploadFile($data){
        // Create variable for each element in array
		extract($data);

		// Upload
		if (!empty($file)) {
			$fileExt = $file->getClientOriginalExtension(); 

			/*Image Upload*/
			$fileName = time().str_random(5).'.'.$file->getClientOriginalExtension();
			$path = public_path($path);
			$file->move($path, $fileName);
			/*Saving to AWS*/
			return $fileName; /*Aws url is store to form then to db on for submission*/
		}
	}  


	public function uploadImage(Request $request){
		// $data = $request->input();
		$image = $request->file('image');
		$action = $request->input('action');
		echo $this->uploadFile(['file'=>$image,'path'=>'/images/']);
	}

	public function deleteImage(Request $request){
		$payLoad = request()->getContent();
		$destinationPath = public_path('/images/'.$payLoad);
		unlink($destinationPath);
	}



}
