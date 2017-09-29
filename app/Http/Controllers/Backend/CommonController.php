<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    // upload file
    public function upload(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json(['flag' => false, 'msg' => '文件为空']);
        }

        $file = $request->file('file');
        $path = $request->get('dir', '');
        if (!empty($path) && substr($path, 0, 1) != '/') {
            $path = '/' . $path;
        }

        if (!$file->isValid()) {
            return response()->json(['flag' => false, 'msg' => '文件上传出错']);
        }
        $new_filename = date('YmdHis') . uniqid() . '.' . $file->getClientOriginalExtension();
        $savePath = public_path($path);
        if (!file_exists($savePath)) {
            mkdir($savePath, 0755, true);
        }

        $file->move($savePath, $new_filename);
        return response()->json(['flag' => true, 'msg' => '文件上传成功', 'file' => $path . '/' . $new_filename]);

    }

    public function uploadImg(Request $request)
    {
        $all = $request->all();
        $result = ['result' => 0];
        $file = $request->file('files');
        if ($file->isValid()) {
            $destinationPath = public_path() . '/images/avatar/';

            //得到文件名，时间戳+6位随机数构成
            Carbon::setToStringFormat('YmdHis');
            $filename = Carbon::now() . '-' . mt_rand(100000, 999999) . '-' . $file->getClientOriginalName();
            Carbon::resetToStringFormat();

            $mime = $file->getClientMimeType();
            $size = $file->getSize();
            if (is_null($file->move($destinationPath, $filename))) {
                $result['result'] = 1;  //Error saving the file.
            } else {
                $result['name'] = $file->getClientOriginalName();
                $result['filename'] = '/images/avatar/' . $filename;
                $result['mime'] = $mime;
                $result['size'] = $size;
            }
            return $result;
        }
    }
}
