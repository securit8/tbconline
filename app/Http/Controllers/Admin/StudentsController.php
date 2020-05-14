<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\CreateStudent;

use App\Student;

class StudentsController extends Controller{

    protected $student;

    public function __construct(Student $student){
        $this->student = $student;
    }

    public function index(){
        $data['students'] = $this->student->paginate(6);

        return view('admin.students.index',$data);
    }

    public function create(){

        return view('admin.students.create');
    }

    public function store(CreateStudent $request){

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "";
        $en_description = $request->get('en')['description'] ? $request->get('en')['description'] : "";

        $request->merge([
            'en'=>[
                'name' => $en_name,
                'description' => $en_description
            ]
        ]);

        //dd($request->input());
        $student = $this->student; 
        $student->fill($request->only(['ka','en']));
        $student->save();
        return back()->with('success','ჩანაწერი წარმატებით დაემატა!');
    }

    public function edit($id){

        $data['student'] = $this->student->where('id',$id)->first();

        return view('admin.students.edit',$data);
    }

    public function update(CreateStudent $request, $id){

        $en_name = $request->get('en')['name'] ? $request->get('en')['name'] : "";
        $en_description = $request->get('en')['description'] ? $request->get('en')['description'] : "";

        $request->merge([
            'en'=>[
                'name' => $en_name,
                'description' => $en_description
            ]
        ]);
        
        $student = $this->student->where('id',$id)->first();

        $student->deleteTranslations();

        $student->fill($request->only(['ka','en']));

        $student->save();
        return back()->with('success','ცვლილება წარმატებით განხორცილედა!');

    }

    public function delete($id){
        $this->student->where('id',$id)->first()->delete();
        return back()->with('success','ჩანაწერი წარმატებით წაიშალა!');
    }


    

}