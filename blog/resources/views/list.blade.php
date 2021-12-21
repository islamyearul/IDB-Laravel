<h1>List</h1>


<table border="1">
    <tr>
        <th>Id</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Extension</th>
        <th>Email</th>
        <th>Office Code</th>
        <th>Report Time</th>
        <th>Job Title</th>
    </tr>
    @foreach ($employee as $item)
        <tr>
            <td>{{ $item->employeeNumber  }}</td>
            <td>{{ $item->lastName }}</td>
            <td>{{ $item->firstName }}</td>
            <td>{{ $item->extension }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->officeCode }}</td>
            <td>{{ $item->reportsTo }}</td>
            <td>{{ $item->jobTitle }}</td>
        </tr>
    @endforeach
</table>