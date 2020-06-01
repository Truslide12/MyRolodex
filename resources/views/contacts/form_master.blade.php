
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

  {{-- <div>
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
            @for ($i = $currentYear; $i > ($currentYear-100); $i--)
                <option value="{{ $i }}" {{ ($currentYear==$i) ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select> --}}
        <div class="panel panel-primary">

            <div class="panel-heading">Birthday</div>
            <div class="panel-body" >
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="form-group">
      <button type='submit' class="btn btn-success">Save</button>
  </div>

