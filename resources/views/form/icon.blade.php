<div class="form-group {!! !$errors->has($errorKey) ?: 'has-error' !!}">

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

    <div class="col-sm-6">

        @include('docore::form.error')

        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
            <input type="text" name="{{$name}}" value="{{ old($column, $value) }}" class="form-control {{$class}}"  placeholder="{{ $placeholder }}" {!! $attributes !!} />
        </div>

        @include('docore::form.help-block')

    </div>
</div>