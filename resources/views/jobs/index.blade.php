<x-layout>
    <h1>Jobs</h1>

    <p>Listed Jobs</p>
    <div class="row row-cols-3">
        @foreach( $jobs as $job )
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $job->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $job->employer->name }}</h6>
                    <p class="card-text">{{ $job->salary }}</p>
                    <a href="/jobs/{{ $job["id"] }}" class="card-link">See More</a>
                </div>
            </div>
        @endforeach
    </div>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
