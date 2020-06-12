
  {{-- New Address form Section --}}
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
      <select id="type" name="type" type="type" class="form-control">
        <option value="home">Home</option>
        <option value="home">Work</option>
        <option value="home">Other</option>
    </select>
  </div>
  
  <div class="form-group">
    <button type='submit' class="btn btn-success">Save</button>
  </div>

{{-- Original code --}}
{{-- <table class="table table-hover table-sm">
  <tr class="row col-sm-12" style="margin:20px;">  
  </tr>

  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('number','Number') !!}
      <div class="form-group {{ $errors->has('number') ? 'has-error' : "" }}">
        {{ Form::text('number',NULL, ['class'=>'form-control', 'id'=>'number', 'placeholder'=>'Number Contact...']) }}
        {{ $errors->first('number', '<p class="help-block">:message</p>') }}
      </div>
    </td>
    
    <td class="col-sm-10">
      {!! form::label('street','street') !!}
      <div class="form-group {{ $errors->has('street') ? 'has-error' : "" }}">
        {{ Form::text('street',NULL, ['class'=>'form-control', 'id'=>'street', 'placeholder'=>'street Contact...']) }}
        {{ $errors->first('street', '<p class="help-block">:message</p>') }}
      </div>
    </td>
  </tr>

  <tr class="row">
    <td class="col-sm-1">
      {!! form::label('city','City') !!}
    </td>
    <td class="col-sm-3">
      <div class="form-group {{ $errors->has('city') ? 'has-error' : "" }}">
        {{ Form::text('city',NULL, ['class'=>'form-control', 'id'=>'city', 'placeholder'=>'City Contact...']) }}
        {{ $errors->first('city', '<p class="help-block">:message</p>') }}
      </div>
    </td>
    <td class="col-sm-1">
      {!! form::label('state','State') !!}
    </td>
    <td class="col-sm-3">
      <div class="form-group {{ $errors->has('state') ? 'has-error' : "" }}">
        {{ Form::text('state',NULL, ['class'=>'form-control', 'id'=>'state', 'placeholder'=>'State Contact...']) }}
        {{ $errors->first('state', '<p class="help-block">:message</p>') }}
      </div>
    </td>
    <td class="col-sm-1">
      {!! form::label('zip','Zip') !!}
    </td>
    <td class="col-sm-3">
      <div class="form-group {{ $errors->has('zip') ? 'has-error' : "" }}">
        {{ Form::text('zip',NULL, ['class'=>'form-control', 'id'=>'zip', 'placeholder'=>'Zip Contact...']) }}
        {{ $errors->first('zip', '<p class="help-block">:message</p>') }}
      </div>
    </td>
  </tr>
    
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('type','Type') !!}
    </td>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('type') ? 'has-error' : "" }}">
        {{ Form::select('type', array('Home' => 'home', 'Work'=>'work', 'Secondary'=>'secondry', 'Other' => 'other'), ['class'=>'form-control', 'id'=>'type', 'placeholder'=>'Type Contact...']) }}
        {{ $errors->first('type', '<p class="help-block">:message</p>') }}
      </div>
    </td>
  </tr>
</table>
<div class="form-group">
{{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div> --}}