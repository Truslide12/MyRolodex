<div style="margin-top:20px;"></div>
<table class="table table-hover table-sm">
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('firstName','FirstName') !!}
    </td>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('firstName') ? 'has-error' : "" }}">
        {{ Form::text('firstName',NULL, ['class'=>'form-control', 'id'=>'firstName', 'placeholder'=>'FirstName Contact...']) }}
        {{ $errors->first('firstName', '<p class="help-block">:message</p>') }}
      </div>
    </td>
  </tr>
        
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('lastName','LastName') !!}
    </td>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('lastName') ? 'has-error' : "" }}">
        {{ Form::text('lastName',NULL, ['class'=>'form-control', 'id'=>'lastName', 'placeholder'=>'LastName Contact...']) }}
        {{ $errors->first('lastName', '<p class="help-block">:message</p>') }}
      </div>
    </td>
  </tr>
        
  
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('email','Email') !!}
    </div>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
          {{ Form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Email Contact...']) }}
          {{ $errors->first('email', '<p class="help-block">:message</p>') }}
        </div>
      </td>
    </tr>
    
  <tr class="row">
    <td class="col-sm-2">
      {!! form::label('phone','Phone') !!}
    </td>
    <td class="col-sm-10">
      <div class="form-group {{ $errors->has('phone') ? 'has-error' : "" }}">
          {{ Form::text('phone',NULL, ['class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Phone Contact...']) }}
          {{ $errors->first('phone', '<p class="help-block">:message</p>') }}
        </div>
      </td>
    </tr>
    
    <tr class="row">
      <td class="col-sm-2">
        <h3>Birthday</h3>
        </td>
      </tr>
      <tr class="row">
          <td class="col-sm-2">
            {!! form::label('day','Day') !!}
          </td>
          <td class="col-sm-2">
            <div class="form-group {{ $errors->has('day') ? 'has-error' : "" }}">
              {{ Form::select('day', array(
                '1' => '1', 
                '2 '=> '2', 
                '3' => '3', 
                '4' => '4',
                '5' => '5', 
                '6 '=> '6', 
                '7' => '7', 
                '8' => '8',
                '9' => '9', 
                '10 '=> '10', 
                '11' => '11', 
                '12' => '12',
                '13' => '13', 
                '14 '=> '14', 
                '15' => '15', 
                '16' => '16',
                '17' => '17', 
                '18 '=> '18', 
                '19' => '19', 
                '20' => '20',
                '21' => '21',
                '22' => '22',
                '23' => '23',
                '24' => '24',
                '25' => '25',
                '26' => '26',
                '27' => '27',
                '28' => '28',
                '29' => '29',
                '30' => '30',
                '31' => '31',
                ), ['class'=>'form-control', 'id'=>'day', 'placeholder'=>'Day Contact...']) }}
              {{ $errors->first('day', '<p class="help-block">:message</p>') }}
            </div>
          </div>
        </td>
        <td class="col-sm-2">
            {!! form::label('month','Month') !!}
          </td>
          <td class="col-sm-10">
            <div class="form-group {{ $errors->has('month') ? 'has-error' : "" }}">
              {{ Form::select('month', array(
                'Jan' => '1', 
                'Feb '=> '2', 
                'Mar' => '3', 
                'Apr' => '4',
                'May' => '5', 
                'Jun' => '6', 
                'Jul' => '7', 
                'Aug' => '8',
                'Sep' => '9', 
                'Oct '=> '10', 
                'Nov' => '11', 
                'Dec' => '12',
                ), ['class'=>'form-control', 'id'=>'month', 'placeholder'=>'Month...']) }}
              {{ $errors->first('month', '<p class="help-block">:message</p>') }}
            </div>
          </div>
        </td>
        <td class="col-sm-2">
            {!! form::label('year','Year') !!}
          </td>
          <td class="col-sm-10">
            <div class="form-group {{ $errors->has('year') ? 'has-error' : "" }}">
              {{ Form::select('year', array(
                    '1900' => '1900', 
                    '1901' => '1901', 
                    '1902' => '1902', 
                    '1903' => '1903',
                    '1904' => '1904', 
                    '1905' => '1905', 
                    '1906' => '1906', 
                    '1907' => '1907',
                    '1908' => '1908', 
                    '1909' => '1909', 
                    '1910' => '1910', 
                    '1911' => '1911', 
                    '1912' => '1912', 
                    '1913' => '1913',
                    '1914' => '1914', 
                    '1915' => '1915', 
                    '1916' => '1916', 
                    '1917' => '1917',
                    '1918' => '1918', 
                    '1919' => '1919', 
                    '1920' => '1920', 
                    '1921' => '1921', 
                    '1922' => '1922', 
                    '1923' => '1923',
                    '1924' => '1924', 
                    '1925' => '1925', 
                    '1926' => '1926', 
                    '1927' => '1927',
                    '1928' => '1928', 
                    '1929' => '1929', 
                    '1930' => '1930', 
                    '1931' => '1931', 
                    '1932' => '1932', 
                    '1933' => '1933',
                    '1934' => '1934', 
                    '1935' => '1935', 
                    '1936' => '1936', 
                    '1937' => '1937',
                    '1938' => '1938', 
                    '1939' => '1939', 
                    '1940' => '1940', 
                    '1941' => '1941', 
                    '1942' => '1942', 
                    '1943' => '1943',
                    '1944' => '1944', 
                    '1945' => '1945', 
                    '1946' => '1946', 
                    '1947' => '1947',
                    '1948' => '1948', 
                    '1949' => '1949', 
                    '1950' => '1950', 
                    '1951' => '1951', 
                    '1952' => '1952', 
                    '1953' => '1953',
                    '1954' => '1954', 
                    '1955' => '1955', 
                    '1956' => '1956', 
                    '1957' => '1957',
                    '1958' => '1958', 
                    '1959' => '1959', 
                    '1960' => '1960', 
                    '1961' => '1961', 
                    '1962' => '1962', 
                    '1963' => '1963',
                    '1964' => '1964', 
                    '1965' => '1965', 
                    '1966' => '1966', 
                    '1967' => '1967',
                    '1968' => '1968', 
                    '1969' => '1969', 
                    '1970' => '1970', 
                    '1971' => '1971', 
                    '1972' => '1972', 
                    '1973' => '1973',
                    '1974' => '1974', 
                    '1975' => '1975', 
                    '1976' => '1976', 
                    '1977' => '1977',
                    '1978' => '1978', 
                    '1979' => '1979', 
                    '1980' => '1980', 
                    '1981' => '1981', 
                    '1982' => '1982', 
                    '1983' => '1983',
                    '1984' => '1984', 
                    '1985' => '1985', 
                    '1986' => '1986', 
                    '1987' => '1987',
                    '1988' => '1988', 
                    '1989' => '1989', 
                    '1990' => '1990', 
                    '1991' => '1991', 
                    '1992' => '1992', 
                    '1993' => '1993',
                    '1994' => '1994', 
                    '1995' => '1995', 
                    '1996' => '1996', 
                    '1997' => '1997',
                    '1998' => '1998', 
                    '1999' => '1999',
                    '2000' => '2000', 
                    '2001' => '2001', 
                    '2002' => '2002', 
                    '2003' => '2003',
                    '2004' => '2004', 
                    '2005' => '2005', 
                    '2006' => '2006', 
                    '2007' => '2007',
                    '2008' => '2008', 
                    '2009' => '2009', 
                    '2010' => '2010', 
                    '2011' => '2011', 
                    '2012' => '2012', 
                    '2013' => '2013',
                    '2014' => '2014', 
                    '2015' => '2015', 
                    '2016' => '2016', 
                    '2017' => '2017',
                    '2018' => '2018', 
                    '2019' => '2019', 
                    '2020' => '2020', 
                    '2021' => '2021', 
                    '2022' => '2022', 
                    '2023' => '2023',
                    '2024' => '2024', 
                    '2025' => '2025', 
                    '2026' => '2026', 
                    '2027' => '2027',
                    '2028' => '2028', 
                    '2029' => '2029', 
                    '2030' => '2030', 
                    '2031' => '2031', 
                    '2032' => '2032', 
                    '2033' => '2033',
                    '2034' => '2034', 
                    '2035' => '2035', 
                    '2036' => '2036', 
                    '2037' => '2037',
                    '2038' => '2038', 
                    '2039' => '2039', 
                    '2040' => '2040', 
                    '2041' => '2041', 
                    '2042' => '2042', 
                    '2043' => '2043',
                    '2044' => '2044', 
                    '2045' => '2045', 
                    '2046' => '2046', 
                    '2047' => '2047',
                    '2048' => '2048', 
                    '2049' => '2049', 
                    '2050' => '2050', 
                    '2051' => '2051', 
                    '2052' => '2052', 
                    '2053' => '2053',
                    '2054' => '2054', 
                    '2055' => '2055', 
                    '2056' => '2056', 
                    '2057' => '2057',
                    '2058' => '2058', 
                    '2059' => '2059', 
                    '2060' => '2060', 
                    '2061' => '2061', 
                    '2062' => '2062', 
                    '2063' => '2063',
                    '2064' => '2064', 
                    '2065' => '2065', 
                    '2066' => '2066', 
                    '2067' => '2067',
                    '2068' => '2068', 
                    '2069' => '2069', 
                    '2070' => '2070', 
                    '2071' => '2071', 
                    '2072' => '2072', 
                    '2073' => '2073',
                    '2074' => '2074', 
                    '2075' => '2075', 
                    '2076' => '2076', 
                    '2077' => '2077',
                    '2078' => '2078', 
                    '2079' => '2079', 
                    '2080' => '2080', 
                    '2081' => '2081', 
                    '2082' => '2082', 
                    '2083' => '2083',
                    '2084' => '2084', 
                    '2085' => '2085', 
                    '2086' => '2086', 
                    '2087' => '2087',
                    '2088' => '2088', 
                    '2089' => '2089', 
                    '2090' => '2090', 
                    '2091' => '2091', 
                    '2092' => '2092', 
                    '2093' => '2093',
                    '2094' => '2094', 
                    '2095' => '2095', 
                    '2096' => '2096', 
                    '2097' => '2097',
                    '2098' => '2098', 
                    '2099' => '2099',
                ), ['class'=>'form-control', 'id'=>'year', 'placeholder'=>'Year...']) }}
              {{ $errors->first('year', '<p class="help-block">:message</p>') }}
            </div>
          </div>
        </td>
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
    </div>
  </td>

  <tr class="form-group">
      <td>{{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
      </td>
  </tr>
</table>