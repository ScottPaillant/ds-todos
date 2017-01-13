@extends('layouts.app')

@section('content')

    
    <!-- Current Todo -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Task  
            </div>

            <div class="panel-body">
                <table class="table table-striped todo-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th>Description</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                            <tr>
                                <td class="table-text">
                                    {{$todo->name}}
                                </td>

                                <td>
                                    {{$todo->description}}
                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>

            <form action="{{ url('todo') }}" method="GET">
              <button type="submit" class="btn btn-default">
                  Back to List
              </button>
            </form>
        </div>
@endsection
