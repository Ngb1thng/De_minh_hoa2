
  <h1>Edit</h1>
  <form method="post" action="/students/{{ $students->id }}/edit">
    <div class="mb-3">
      <label for="txtFulname">Title</label>
      <input type="text" id="txtFulname" name="txtFulname" value="{{ $students->fullname }}">
    </div>
    <div class="mb-3">
      <label for="txtBirthday" class="form-label">Description</label>
      <input type="date" id="txtBirthday" name="txtBirthday" value="{{ $students->birthday }}">
    </div>
    <div class="mb-3">
      <label for="txtAdress" class="form-label">Short Content</label>
      <input type="text" id="txtAdress" name="txtAdress" value="{{ $students->address }}">
    </div>
   
    @csrf
    <button type="submit" >Submit</button>
  </form>
