<?php

namespace Modules\Admin\Http\Controllers;
use Modules\Admin\Entities\Boss;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BossController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $dataTmp = Boss::all();
        $data = [
            'title' => 'Danh sách HT',
            'sub_title' => '',
            'icon' => 'fa fa-list',
            'listTh' => '',
            'dataTr' => '',
            'pagination' => '',
            'result_items' => '',
            'url_delete_item' => '',
        ];
        $listTh = [
            'check_row' => '',
            'fullname' => 'Tên HT',
            'phone' => 'Số điện thoại',
            'birth' => 'Ngày sinh',
            'rank' => 'Cấp bậc',
            'star' => 'Sao',
            'position' => 'Chức vụ',
            'area' => 'Khu vụe',
            'action' => 'Hành động',
        ];
        $data['listTh']=$listTh;
        foreach($dataTmp as $key => $row){
            $dataTr[] = [
                'check_row' => '',
                'fullname' => $row['fullname'],
                'phone' => $row['phone'],
                'birth' => $row['birth'],
                'rank' => $row['rank'],
                'star' => $row['star'],
                'position' => $row['position'],
                'area' => $row['area'],
                'action' => '<button type = "button" class="btn btn-primary">Sửa</button><button type = "button" class="btn btn-danger">Xóa</button>',
            ];
        }
        $data['dataTr']=$dataTr;
        return view('admin::list')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
