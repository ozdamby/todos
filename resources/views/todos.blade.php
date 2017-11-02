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

                    <?php foreach ($todos as $todo): ?>
                        <--?php echo $todo ->todo; ?-->
                    <?php endforeach; ?>

                    @foreach($todos as $todo)
                        {{ $todo->todo}}
                        <hr>
                    @endforeach
@stop