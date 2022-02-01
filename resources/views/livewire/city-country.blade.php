<div class="form-group row">
    <label class="col-lg-2 col-form-label">Country:</label>
    <div class="col-lg-4">
        <select wire:model="selectedCountry" id="country" name="country_id"
            class="form-control @error('country_id') is-invalid @enderror SlectBox">

            @foreach ($countries as $country)
            <option value="{{ $country->id }}"> {{ $country->name }} </option>
            @endforeach

            @error('country_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </select>
    </div>
</div>


@if (is_null($selectedCountry))
<div class="form-group row">
    <label class="col-lg-2 col-form-label">City:</label>
    <div class="col-lg-4">
        <select id="city" name="city_id" class="form-control  SlectBox">

            @foreach ($cities as $city)
            <option value=" {{ $city->id }} "> {{ $city->name }} </option>
            @endforeach


            @error('city_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


        </select>
    </div>
</div>
@endif


