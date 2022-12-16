<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TemplateController extends Controller
{
    function storeTemplate(Request $request)
    {
        $output = array("dbStatus" => '', 'dbMessage' => '');
        $input = $request->all();
        $id    = Session('id');
        $user_template = new UserTemplate();
        $user_template->user_id = $id;

        $user_template->template_html = $input['source_code'];
        if ($user_template->save()) {
            $output['dbStatus'] =  1;
            $output['dbMessage'] =  'Templated added to your list';
        } else {
            $output['dbStatus'] =  0;
            $output['dbMessage'] =  'Some error Occured';
        }
        return response()->json($output);
    }
    function renderTemplate()
    {
        $template = UserTemplate::select('id', 'template_html')->where('user_id', '=', Session('id'))->get();

        return view('renderTemplate', ['template' => $template]);
    }
    function viewTemplate(Request $request)
    {
        $template = UserTemplate::select('id', 'template_html')
            ->where('user_id', '=', Session('id'))
            ->where('id', '=', $request->template_id)
            ->get();
        return view('welcome', ['template' => $template]);
    }
}
