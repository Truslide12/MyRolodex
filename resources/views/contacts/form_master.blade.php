
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
      <input class="col-md-7 col-sm-12" id="phone" type="phone" name="phone" value="{{ $contact->phone }}" required />
    </div>
  </div>

  <div>
    <p style="margin-top: 20px">Birthday</p>
<div class="form-group">
      <label class="col-md-4 col-sm-12 control-label" for="day">Day</label>
      <div class="col-md-4 col-sm-12">
        <select id="day" name="day" type="day" class="form-control">
            @php
             $currentDay = date('n');
            @endphp
            @for ($i = 1; $i <= 31; $i++)
                <option value="{{ $i }}" {{ ($currentDay==$i) ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
      </div>
    <div class="form-group">
      <label class="col-md-4 col-sm-12 control-label" for="month">Month</label>
      <div class="col-md-4 col-sm-12">
        <select id="month" name="month" type="month" class="form-control">
            @php
            $currentMonth = date('j');
            @endphp  
            @for ($i = 1; $i <= 12; $i++)
                <option value="{{ $i }}" {{ ($currentMonth==$i) ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
      </div>
    <div class="form-group">
      <label class="col-md-4 col-sm-12 control-label" for="year">Year</label>
      <div class="col-md-4 col-sm-12">
        <select id="year" name="year" type="year class="form-control">
            @php
                // $currentMonth = date('n');
                // $currentDay = date('j');
                $currentYear = date('Y');
            @endphp
            @for ($i = ($currentYear-100); $i < $currentYear; $i++)
                <option value="{{ $i }}" {{ ($currentYear==$i) ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
      <button type='submit' class="btn btn-success">Save</button>
  </div>


  {{-- New Addres form section (Original code) --}}
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
