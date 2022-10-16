
@section('content')

<div><a href="students/add">Add new student</a></div>

<table width="100%" align=center>
    <tr>
        <td>ID</td>
        <td>Fullname</td>
        <td>Birthday</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
	<tbody>
		@forelse($students as $student)
		<tr>
            <td>{!! $student->id !!}</td>
			<td>{!! $student->fullname !!}</td>
            <td>{!! $student->birthday !!}</td>
			<td>{!! $student->address !!}</td>
			<td>
                <a href="students/{{ $student->id }}/edit">Edit</a>
				<a href="students/{{ $student->id }}/delete">Delete</a>
            </td>
		</tr>
		@empty
		<tr>
			<td>No student found</td>
		</tr>
		@endforelse
	</tbody>
</table>