@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Query List</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Query</th>
                        <th>Created At</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($queries as $query)
                    <tr>
                        <td>{{ $query->id }}</td>
                        <td>{{ $query->name }}</td>
                        <td>{{ $query->email }}</td>
                        <td>{{ $query->phone }}</td>
                        <td>{{ $query->query }}</td>
                        <td>{{ $query->created_at }}</td>
                        <td>
                            <div style="display: flex; align-items: center;">
                                <span class="color-box"
                                    style="background-color: {{ $query->status == 0 ? 'yellow' : 'green' }};"></span>&nbsp;
                                <select class="form-select" onchange="updateStatus({{ $query->id }}, this.value)">
                                    <option value="0" @if($query->status == 0) selected @endif>Pending</option>
                                    <option value="1" @if($query->status == 1) selected @endif>Completed</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
<style>
.color-box {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin-left: 5px;
    border: 1px solid #ccc;
    vertical-align: middle;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
function updateStatus(queryId, status) {
    fetch('/update-status/' + queryId, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                status: status
            })
        })
        .then(response => {
            if (response.ok) {
                window.location.reload();
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
}
</script>