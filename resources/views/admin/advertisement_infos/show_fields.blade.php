<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $advertisementInfo->id }}</p>
</div>

<!-- Advertisement Name Field -->
<div class="col-sm-12">
    {!! Form::label('advertisement_name', 'Advertisement Name:') !!}
    <p>{{ $advertisementInfo->advertisement_name }}</p>
</div>

<!-- Advertisement Img Field -->
<div class="col-sm-12">
    {!! Form::label('advertisement_img', 'Advertisement Img:') !!}
    <p>{{ $advertisementInfo->advertisement_img }}</p>
</div>

<!-- Advertisement Link Field -->
<div class="col-sm-12">
    {!! Form::label('advertisement_link', 'Advertisement Link:') !!}
    <p>{{ $advertisementInfo->advertisement_link }}</p>
</div>

<!-- Advertisement Position Field -->
<div class="col-sm-12">
    {!! Form::label('advertisement_position', 'Advertisement Position:') !!}
    <p>{{ $advertisementInfo->advertisement_position }}</p>
</div>

<!-- Advertisement Status Field -->
<div class="col-sm-12">
    {!! Form::label('advertisement_status', 'Advertisement Status:') !!}
    <p>{{ $advertisementInfo->advertisement_status }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $advertisementInfo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $advertisementInfo->updated_at }}</p>
</div>

