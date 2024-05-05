<x-layout>
    <h1>Create a new Job</h1>
    <p>We need some information from you.</p>

    <form method="post" action="/jobs">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Job Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Senior Flutter Developer" aria-describedby="titleHelp">
            <div id="titleHelp" class="form-text">Give a title for the new Job.</div>
        </div>

        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input name="salary" type="text" class="form-control" id="salary" placeholder="80,000 BDT" aria-describedby="salaryHelp">
            <div id="salaryHelp" class="form-text">Salary for the Job.</div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
