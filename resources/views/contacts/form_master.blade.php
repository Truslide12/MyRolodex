<div style="margin-top:20px;"></div>
<h3>Create New Contact</h3>
<table class="table table-hover table-md">
  {{-- New Contact form Section --}}
  <div class="form-row">
      <div class="input-container">
        <label for="firstName" class="input-label col-md-5">First Name</label>
        <input class="col-md-7" id="firstName" type="textbox" name="firstName" value="{{ $contact->firstName }}" required />
      </div>
  </div>
        
  <div class="form-row">
      <div class="input-container">
        <label for="lastName" class="input-label col-md-5">Last Name</label>
        <input class="col-md-7" id="lastName" type="textbox" name="lastName" value="{{ $contact->lastName }}" required />
      </div>
  </div>
        
  <div class="form-row">
    <div class="input-container">
      <label for="email" class="input-label col-md-5 col-sm-12">Email</label>
      <input class="col-md-7 col-sm-12" id="email" type="textbox" name="email" value="{{ $contact->email }}" required />
    </div>
  </div>
    
  <div class="form-row">
    <div class="input-container">
      <label for="phone" class="input-label col-md-5 col-sm-12">Phone</label>
      <input class="col-md-7 col-sm-12" id="phone" type="phone" name="phone"required />
    </div>
  </div>

  <div>
    <p style="margin-top: 20px">Birthday</p>
    <div class="form-group">
      <label class="col-md-4 col-sm-12 control-label" for="day">Day</label>
      <div class="col-md-4 col-sm-12">
        <select id="day" name="day" type="day" class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
      </div>
    <div class="form-group">
      <label class="col-md-4 col-sm-12 control-label" for="month">Month</label>
      <div class="col-md-4 col-sm-12">
        <select id="month" name="month" type="month" class="form-control">
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
          <option value="6">Jun</option>
          <option value="7">Jul</option>
          <option value="8">Aug</option>
          <option value="9">Sep</option>
          <option value="10">Oct</option>
          <option value="11">Nov</option>
          <option value="12">Dec</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 col-sm-12 control-label" for="year">Year</label>
      <div class="col-md-4 col-sm-12">
        <select id="year" name="year" type="year class="form-control">
            @for ($i = 1920; $i < date('Y'); $i++)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
      </div>
    </div>
  </div>

  {{-- New Addres form section --}}
  {{-- <p>Address</p>
  <div class="form-row">
      <div class="input-container">
        <label for="number" class="input-label col-md-5">Number</label>
        <input class="col-md-7" id="number" type="number" name="number"required />
      </div>
  </div>
  <div class="form-row">
      <div class="input-container">
        <label for="street" class="input-label col-md-5">Street</label>
        <input class="col-md-7" id="street" type="street" name="street"required />
      </div>
  </div>
  <div class="form-row">
      <div class="input-container">
        <label for="city" class="input-label col-md-5">City</label>
        <input class="col-md-7" id="city" type="city" name="city"required />
      </div>
  </div>
  <div class="form-row">
      <div class="input-container">
        <label for="state" class="input-label col-md-5">State</label>
        <input class="col-md-7" id="state" type="state" name="state"required />
      </div>
  </div>
  <div class="form-row">
      <div class="input-container">
        <label for="zip" class="input-label col-md-5">Zip</label>
        <input class="col-md-7" id="zip" type="zip" name="zip"required />
      </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 col-sm-12 control-label" for="type">Type</label>
    <div class="col-md-4 col-sm-12">
      <select id="type" name="type" type="type" class="form-control">
        <option value="Home">Home</option>
        <option value="Work">Work</option>
        <option value="Seconday">Secondary</option>
        <option value="Other">Other</option>
      </select>
    </div>
  </div> --}}

  <div class="form-group">
    <button type='submit' class="btn btn-success">Save</button>
  </div>

</table>
