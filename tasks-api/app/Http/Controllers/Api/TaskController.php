<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

use App\Events\NewTaskNotification;

class TaskController extends Controller
{
     // Listar todas las tareas
     public function index()
     {
         $tasks = Task::all();
         return response()->json($tasks);
     }
 
     // Crear una nueva tarea
     public function store(Request $request)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'description' => 'required|string',
             'status' => 'required|in:Pendiente,En Proceso,Completada', 
             
         ]);
 
         $task = Task::create($request->all());
         return response()->json($task, 201);
     }
 
     // Mostrar una tarea específica
     public function show($id)
     {
         $task = Task::find($id);
         if (!$task) {
             return response()->json(['message' => 'Tarea no encontrada'], 404);
         }
         return response()->json($task);
     }
 
     // Actualizar una tarea existente
     public function update(Request $request, $id)
     {
         $task = Task::find($id);
         if (!$task) {
             return response()->json(['message' => 'Tarea no encontrada'], 404);
         }
 
         $request->validate([
             'title' => 'required|string|max:255',
             'description' => 'required|string',
             'status' => 'required|in:Pendiente,En Proceso,Completada',
         ]);
 
         $task->update($request->all());
         return response()->json($task);
     }
 
     // Eliminar una tarea
     public function destroy($id)
     {
         $task = Task::find($id);
         if (!$task) {
             return response()->json(['message' => 'Tarea no encontrada'], 404);
         }
 
         $task->delete();
         return response()->json(['message' => 'Tarea eliminada']);
     }





 
}
