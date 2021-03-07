<label for="major_id">{{$label}}</label>
<select class="form-control select2" id="major_id" name="{{$name}}">
    @foreach($models as $model)
        <option value="{{$model->id}}">{{$model->name}}</option>
    @endforeach
</select>
