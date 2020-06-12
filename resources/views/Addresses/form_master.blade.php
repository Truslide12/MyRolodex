<div class="form-row">
  <div class="input-container">
    <label for="number" class="input-label col-md-5">Number</label>
    <input class="col-md-7" id="number" type="textbox" name="number" value="{{ $address->number }}" required />
  </div>
</div>
<div class="form-row">
  <div class="input-container">
    <label for="street" class="input-label col-md-5">Street</label>
    <input class="col-md-7" id="street" type="textbox" name="street" value="{{ $address->street }}" required />
  </div>
</div>
<div class="form-row">
  <div class="input-container">
    <label for="number" class="input-label col-md-5">First Name</label>
    <input class="col-md-7" id="number" type="textbox" name="number" value="{{ $address->city }}" required />
  </div>
</div>
<div class="form-row">
  <div class="input-container">
    <label for="state" class="input-label col-md-5">State</label>
    <input class="col-md-7" id="state" type="textbox" name="state" value="{{ $address->state }}" required />
  </div>
</div>
<div class="form-row">
  <div class="input-container">
    <label for="zip" class="input-label col-md-5">Zip</label>
    <input class="col-md-7" id="zip" type="textbox" name="zip" value="{{ $address->zip }}" required />
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 col-sm-12 control-label" for="month">Month</label>
  <div class="col-md-4 col-sm-12">
    <select id="type" name="type" type="type" class="form-control" value="{{ $address->type }}">
      <option value="home">Home</option>
      <option value="home">Work</option>
      <option value="home">Other</option>
  </select>
</div>

<div class="form-group">
  <button type='submit' class="btn btn-success">Save</button>
</div>