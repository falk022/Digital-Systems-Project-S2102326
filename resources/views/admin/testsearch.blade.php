


    <h2>Search Results for "{{ $query }}"</h2>

    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach ($results as $result)
                <li>{{ $result->name }}</li> <!-- Replace 'name' with your actual field -->
            @endforeach
        </ul>
    @endif

