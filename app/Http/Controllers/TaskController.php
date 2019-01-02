<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddTasksRequest;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    /**
	 * Display a list of all of the user's task.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function index(Request $request)
	{
		$displayTasks = Task::orderBy('created_at','DESC')->get();
	    return view('tasks.index', compact('displayTasks'));
	}
	/**
	 * Display a list of all of the user's task.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(AddTasksRequest $request)
	{
		$task = new Task;
		$task->name = $request->name;
		$resultAdd = $task->save();

		if($resultAdd) {
			return redirect()->route('tasks.index')->with('msg', trans('messages.msgAddSuccess'));
		} else {
			return redirect()->route('tasks.index')->with('msg', trans('messages.msgAddFail'));
		}
	}
	public function destroy($id)
	{
		$task = Task::find($id);
		$resultDel = $task->delete($id);

		if($resultDel) {
			return redirect()->route('tasks.index')->with('msg', trans('messages.msgDelTaskSuccess'));
		} else {
			return redirect()->route('tasks.index')->with('msg', trans('messages.msgDelTaskFail'));
		}
	}
}
