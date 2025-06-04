<h2>Edit Task</h2>

@if ($errors->any())
<div style="color:red;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="/tasks/{{$task->id}}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $task->title) }}" />
    <br>
    <textarea name="description">{{ old('description', $task->description) }}</textarea>
    <br>
    <label>
        <input type="checkbox" name="is_completed" value="1" {{ old('is_completed', $task->is_completed) ? 'checked' : '' }} />
        Completed
    </label>
    <br>
    <button type="submit">Update</button>
</form>