@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="create/todo" method="post">
                {{ csrf_field() }}
                <input type="text" class="form-lg input-lg" placeholder="create a new todo" name="todo">
            </form>
        </div>
    </div>

                    @foreach($todos as $todo)
                        {{ $todo->todo}} <a href="{{ route('todo.delete', ['id'=>$todo->id]) }}" class="btn btn-danger">x</a>
                        <a href="{{ route('todo.update', ['id'=>$todo->id]) }}" class="btn btn-info btn-xs">Update</a>
                        <hr>
                    @endforeach

    <?php foreach ($todos as $todo): ?>
    <--?php echo $todo ->todo; ?-->
    <?php endforeach; ?>

@stop