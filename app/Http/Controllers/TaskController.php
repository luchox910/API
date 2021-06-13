<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Task::all();
        return $task;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;

        $task->save();
        //Esta función guardará las tareas que enviaremos mediante vuejs

        if ($task) {
            return response()->json(['message' => 'task create succesfully'], 201);
        }
        return response()->json(['message' => 'Error to create task'], 500);
    }




  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task, $id)
    {
        
        $task = Task::findOrFail($id);
        return $task;
        //Esta funcion buscar l registro de acuerdo con el ID que se envia como parametro en la URL /tareas/bucar/5
    }



    public function show1(Task $task, Request $request)
    {
        $task = Task::findOrFail($request->id);
        
        return $task;
        // esta funcion no necesita que se le envie como parametro, La rescata en un rquest get
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task = Task::findOrFail($request->id);

        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;

        $task->save();

        return $task;
        //Esta función actualizará la tarea que hayamos seleccionado
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task, $id)
    {
        $task = Task::destroy($id);
        return $task;
        // esta funcion borra el registro de acuerdo con el ID que se le envia por parametro en la url /borrar/5
        //0 false y 1 = true
    }


    public function destroy1(Task $task, Request $request)
    {
        $task = Task::destroy($request->id);
        return $task;
        //esta funcion elimina el registro sin necesidad de recuperar el id por url, Lo rescata de request
    }




   

}
