<table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Created At</td>
                                <td>Updated At</td>
                            </tr>
                        </tbody>
                    </table>

@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable();
});
</script>
@endpush