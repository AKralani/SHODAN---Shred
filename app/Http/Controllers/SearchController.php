<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function index()
    {
        $text = request()->input('text');

        if ($text) {

            $users = User::where('name', 'like', "%$text%")->orWhere('email', 'like', "%$text%")->get();

        } else {
            $users = User::all();
        }

        return view('search-users', ['users' => $users]);
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('users')
                    ->where('name', 'like', '%' . $query . '%')
                    ->orWhere('email', 'like', '%' . $query . '%')
                    ->orWhere('phone', 'like', '%' . $query . '%')
                    ->orWhere('birthday', 'like', '%' . $query . '%')
                    ->orderBy('name', 'desc')
                    ->get();

            } else {
                $data = DB::table('users')
                    ->orderBy('name', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
        <tr>
         <td>' . $row->name . '</td>
         <td>' . $row->email . '</td>
         <td>' . $row->phone . '</td>
         <td>' . $row->birthday . '</td>
        </tr>
        ';
                }
            } else {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            );

            echo json_encode($data);
        }
    }
}
