
  <h1>ADD</h1>
  <form method="post" action="/students/add">
    <div>
      <label for="txtFulname" >Full name</label>
      <input type="text" id="txtFulname" name="txtFulname"/>
    </div>
    <div class="mb-3">
      <label for="txtBirthday" class="form-label">Birthday</label>
      <input type="date" id="txtBirthday" name="txtBirthday"/>
    </div>
    <div class="mb-3">
      <label for="txtAdress" class="form-label">Address</label>
      <input type="text" id="txtAdress" name="txtAdress"/>
    </div>
   
    @csrf
    <button type="submit" >Submit</button>
  </form>
