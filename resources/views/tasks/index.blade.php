<h2>All Tasks</h2>
<a href="/tasks/create">Create New</a>
<ul>
    @foreach($tasks as $task)
    <li>
        {{$task -> title}}
        <form action="/tasks/{{ $task-> id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach
</ul>