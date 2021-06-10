<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Account;
use DB;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = [
            'title' => 'Danh sách tài khoản',
            'sub_title' => '',
            'icon' => 'fa fa-list',
            'menu_left' => '',
            'menu_right' => '',
            'listTh' => '',
            'dataTr' => '',
            'pagination' => '',
            'url_add_item' => '',
            'url_delete_item' => '',
        ];
        $listTh = [
            'check_row' => '',
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password(MD5)',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày sửa',
            'action' => 'Hành động',

        ];
        $dataTmp = Account::all();
        $dataTr = [];
        foreach ($dataTmp as $key => $row)
        {
            $dataTr[] = [
                'check_row' => '<input type="checkbox" class="grid-row-checkbox" data-id="' . $row['id'] . '">',
                'id' => $row['id'],
                'username' => $row['username'],
                'email' => $row['email'],
                'password' => '<div style="width: 120px;word-wrap: break-word;">'.$row['password'].'</div>',
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at'],
                'action' => '<a href="">
<span title="Xem chi tiết" type="button" class="btn btn-flat btn-primary"><i class="fa fa-info"></i></span>
</a>
<span onclick=""  title="Xóa đối tượng" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>',
            ];
        }
        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;

        return view('admin::list')
            ->with('data',$data);
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
