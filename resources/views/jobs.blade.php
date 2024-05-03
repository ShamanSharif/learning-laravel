<x-layout>
    <h1>Jobs</h1>

    <p>Listed Jobs</p>
    <ul>
        @foreach( $jobs as $job )
            <li>
                <a href="/jobs/{{ $job["id"] }}">
                    <strong>{{ $job["title"] }}:</strong> pays {{ $job["salary"] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
