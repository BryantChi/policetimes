<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Url']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'rows' => '5']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => '5']) !!}
</div>

<!-- Keywords Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keywords', 'Keywords:') !!}
    {!! Form::textarea('keywords', null, ['class' => 'form-control', 'placeholder' => 'Keywords', 'rows' => '5']) !!}
</div>

<!-- Og:title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('og:title', 'Og:title:') !!}
    {!! Form::text('og_title', null, ['class' => 'form-control', 'placeholder' => 'Og:title', 'rows' => '5']) !!}
</div>

<!-- Og:site Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('og:site_name', 'Og:site Name:') !!}
    {!! Form::text('og_site_name', null, ['class' => 'form-control', 'placeholder' => 'Og:site Name', 'rows' => '5']) !!}
</div>

<!-- Og:description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('og:description', 'Og:description:') !!}
    {!! Form::textarea('og_description', null, ['class' => 'form-control', 'placeholder' => 'Og:description', 'rows' => '5']) !!}
</div>
