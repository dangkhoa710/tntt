<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Area;
use Modules\Admin\Entities\Boss;
use Modules\Admin\Entities\Time;

class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $dataArea = Area::all();

        $data = [
            'title' => 'Danh sách giờ khóa',
            'sub_title' => '',
            'icon' => 'fa fa-list',
            'listTh' => '',
            'dataTr' => '',
            'pagination' => '',
            'result_items' => '',
            'url_delete_item' => '',
            'color_area'=>'',
            'changeArea' => request('changeArea') ?? '',
            'dataArea' => $dataArea ?? '',

        ];
        $listTh = [
            'check_row' => '',
            'id' => 'ID',
            'name_timetable' => 'Tên giờ khóa',
            'time_start' => 'Thời gian bắt đầu',
            'time_finish' => 'Thời gian kết thúc',
            'describe_timetable' => 'Nội dung',
            'user_id' => 'Phụ trách',
            'name_area' => 'Ngành',
            'status' => 'Tình trạng',
            'action' => 'Hành động',
        ];
        $data['listTh']=$listTh;
        $i=0;
        for($i;$i<=6;$i++){
            $y=$i+1;
            $dataTmp = Time::where('area',$y)->get();
            foreach($dataTmp as $key => $row){
                $dataColor[$i] = $row->getArea->color_area ?? '';
                $dataTr[$i][] = [
                    'check_row' => '<input type="checkbox" class="grid-row-checkbox" data-id="' . $row->id . '">',
                    'id' => $row->id,
                    'name_timetable' => $row->name_timetable,
                    'time_start' => $row->time_start,
                    'time_finish' => $row->time_finish,
                    'describe_timetable' => $row->describe_timetable,
                    'user_id' => $row->getInfoUser->fullname,
                    'name_area' => $row->getArea->name_area,
                    'status' => $row->status,
                    'action' => '<a href="">
<span title="Xem chi tiết" type="button" class="btn btn-flat btn-primary"><i class="fa fa-info"></i></span>
</a>
<span onclick=""  title="Xóa đối tượng" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>',
                ];
            }
        }

        $data['dataTr']=$dataTr;
        $data['color_area']=$dataColor;


        return view('admin::list2')->with('data',$data);
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

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {

    }
}
