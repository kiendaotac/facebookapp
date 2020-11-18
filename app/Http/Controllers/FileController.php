<?php

namespace App\Http\Controllers;

use App\File;
use App\Functions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
//use Intervention\Image\Facades\Image;

class FileController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$url = getURL();
		$currentFunction = Functions::where('route', $url)->where('state', 1)->orderBy('id', 'desc')->first();
		$maxsize = 0;
		$post_max_size = str_replace("M", "", ini_get('post_max_size'));
		$upload_max_filesize = str_replace("M", "", ini_get('upload_max_filesize'));
		$maxsize = ($post_max_size > $upload_max_filesize ? $post_max_size : $upload_max_filesize);
		$month = File::orderBy('created_at', 'desc')->groupBy('year', 'month')->get();
		$year = File::orderBy('created_at', 'desc')->groupBy('year')->get();
		return view('backend.system.file.main', ['maxsize' => $maxsize, 'month' => $month, 'year' => $year, 'currentFunction' => $currentFunction]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		if ($request->ajax()) {
			if ($request->hasFile('file')) {
			    /* url file */
                $array_url_files    =   array();

				$file = $request->file('file');
				// set destination path
				$folderDir = 'public/uploads/' . date('Y/m');
				//$destinationPath = base_path() . '/' . $folderDir;
				// this form uploads multiple files
				$exe_flag = false;
				$list_file  =   $request->file('file');
				if (!is_array($list_file)){
				    $list_file  =   [$list_file];
                }
				foreach ($list_file as $fileKey => $fileObject) {
					// make sure each file is valid
					if ($fileObject->isValid()) {
						// make destination file name
						$destinationFileName = time() . '-' . Str::slug(pathinfo($fileObject->getClientOriginalName(), PATHINFO_FILENAME), '-');
						$extension = $fileObject->getClientOriginalExtension();
						if ($extension == 'exe') {
							$exe_flag = true;
						} else{
                            // move the file from tmp to the destination path
                            $store = Storage::putFileAs($folderDir, $fileObject, $destinationFileName . '.' . $extension);
                            // Check image if iamge then make thumbnail
                            $IMGextensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'bmp', 'BMP', 'gif', 'GIF');
                            // save the the destination filename
                            if ($store) {
                                $file = new File();
                                $file->title = $fileObject->getClientOriginalName();
                                $file->file_name = $destinationFileName;
                                $file->extension = $extension;
                                $file->size = $fileObject->getClientSize();
                                $file->year = date('Y');
                                $file->month = date('m');
                                $file->creator_id = Auth::id();
                                $file->owner_id = Auth::id();
                                $file->states = 1;
                                $file->save();
                                $url    =   'storage/uploads/'. $file->year . '/' . $file->month . '/' . $destinationFileName . '.' .$extension;
                                array_push($array_url_files, $url);
//							if (in_array($extension, $IMGextensions)) {
//								$thumb = 'storage/uploads/' . $file->year . '/' . $file->month;
//								if (!file_exists($thumb . '/thumbs')) {
//									mkdir($thumb . '/thumbs', 0777, true);
//								}
//								Image::make($thumb . '/' . $file->file_name . '.' . $file->extension)->resize(198, 132)->save($thumb . '/thumbs/' . $file->id . '.' . $file->extension);
//							}
                            }
                        }
					}
				}
				if ($exe_flag) {
					return response()->json([
						'type'      => 'error',
						'title'     => 'Thất bại!',
						'content'   => 'Không thể upload file exe !!',
					]);
				}
				return response()->json([
					'type'      => 'success',
					'title'     => 'Thành công!',
					'content'   => 'Upload hoàn tất !!',
                    'url'       =>  $array_url_files
				]);
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Request $request, $id) {
		if ($id == 'get-files') {
			$year   =   $request->year;
			$month  =   $request->month;
			$type   =   $request->type;
			$delete =   $request->delete;
			$your   =   $request->your;
			$filter = [];
			$files = File::where('year', (int) $year)->where('month', (int) $month)->orderBy('id','DESC');
			if ($your){
			    $files  =   $files->where('owner_id', Auth::id());
            }
			if ($type == '0') {
				$files = $files->orderBy('created_at', 'desc');
			}
			if ($type == 1) {
				$filter = ['doc', 'docx', 'xls', 'xlsx', 'ppt', 'ppt', 'pptx'];
				$files = $files->whereIn('extension', $filter)->orderBy('created_at', 'desc');
			}
			if ($type == 2) {
				$filter = ['mp3', 'wav', 'aac', 'agg', 'wma'];
				$files = $files->whereIn('extension', $filter)->orderBy('created_at', 'desc');
			}
			if ($type == 3) {
				$filter = ['mp4', 'avi', 'mkv', 'mov', '3gp', 'flv', 'webm', 'vob', 'ogg', 'mpeg', 'mpg', 'wmv'];
				$files = $files->whereIn('extension', $filter)->orderBy('created_at', 'desc');
			}
			if ($type == 4) {
				$filter = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'bmp', 'BMP', 'gif', 'GIF'];
				$files = $files->whereIn('extension', $filter)->orderBy('created_at', 'desc');
			}
			if ($type == 5) {
				$filter = ['rar', 'zip', 'iso', 'tar', 'dmg'];
				$files = $files->whereIn('extension', $filter)->orderBy('created_at', 'desc');
			}
			$files  =   $files->get();
			$IMGextensions = array('jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG', 'bmp', 'BMP', 'gif', 'GIF');
			$icons = array('doc', 'DOC', 'docx', 'DOCX', 'mp4', 'MP4', 'mpeg', 'MPEG', 'mpg', 'MPG', 'pdf', 'PDF', 'ppt', 'PPT', 'rar', 'RAR', 'xls', 'XLS', 'xlsx', 'XLSX', 'zip', 'ZIP');
			return view('backend.system.file.data', ['files' => $files, 'IMGextensions' => $IMGextensions, 'icons' => $icons, 'delete' => $delete]);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$file = File::find($id);
		$current_id = Auth::id();
		if ($file->owner_id == $current_id) {
			$file_name = 'public/uploads/' . $file->year . '/' . $file->month . '/' . $file->file_name . '.' . $file->extension;
			if(Storage::exists($file_name)){
                $del = Storage::delete($file_name);
                if ($del) {
                    $file->delete();
                    return response()->json([
                        'type' => 'success',
                        'title' => 'Thành công!',
                        'content' => 'Xóa file hoàn tất !!',
                    ]);
                } else {
                    return response()->json([
                        'type' => 'error',
                        'title' => 'Thấy bại!',
                        'content' => 'Xóa file không thành công !!',
                    ]);
                }
            } else {
                $file->delete();
                return response()->json([
                    'type' => 'success',
                    'title' => 'Thành công!',
                    'content' => 'Xóa file hoàn tất !!',
                ]);
            }

		} else {
			return response()->json([
				'type' => 'error',
				'title' => 'Thất bại!',
				'content' => 'Bạn không có quyền xóa file này !!',
			]);
		}
	}
}
