<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;

class TaskController extends Controller
{
   
    public function index()
    {
        return Task::all();
    }


    public function store(Request $request)
    {
        $request->validate([
            'Título' => 'required',
            'Descrição' => 'required',
            'Status' => 'required',
        ]);

        return Task::create($request->all());
    
    }
    
    public function show(string $id)
    {
        return Task::findOrfail($id);
    }

}
