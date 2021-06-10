<?php

namespace Modules\Admin\Http\Controllers;
use Modules\Admin\Entities\Boss;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;

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
            'area' => 'Khu vực',
            'action' => 'Hành động',
        ];
        $data['listTh']=$listTh;
        foreach($dataTmp as $key => $row){
            $dataTr[] = [
                'check_row' => '<input type="checkbox" class="grid-row-checkbox" data-id="' . $row->id . '">',
                'fullname' => $row->fullname,
                'phone' => $row->phone,
                'birth' => $row->birth,
                'rank' => $row->getRank->name_rank,
                'star' => $row->star,
                'position' => $row->position,
                'area' => $row->area,
                'action' => '<a href="">
<span title="Xem chi tiết" type="button" class="btn btn-flat btn-primary"><i class="fa fa-info"></i></span>
</a>
<span onclick=""  title="Xóa đối tượng" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>',
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
