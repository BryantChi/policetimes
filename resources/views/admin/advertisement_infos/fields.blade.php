<!-- Advertisement Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advertisement_name', '名稱:') !!}
    {!! Form::text('advertisement_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Advertisement Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advertisement_img', '圖片:') !!}
    {{-- {!! Form::text('advertisement_img', null, ['class' => 'form-control']) !!} --}}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="advertisement_img" name="advertisement_img" accept="image/*">
        <label class="custom-file-label" for="advertisement_img">Choose file</label>
    </div>
    <div class="img-preview-cover mt-2">
        @if ($advertisementInfo->advertisement_img ?? null)
            <p for="">預覽</p>
            <img src="{{ env('APP_URL', 'https://policetimes.com.tw') . '/uploads/' . $advertisementInfo->advertisement_img }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>

<!-- Advertisement Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advertisement_link', '連結:') !!}
    {!! Form::url('advertisement_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Advertisement Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advertisement_position', '廣告位置:') !!}
    {{-- {!! Form::text('advertisement_position', null, ['class' => 'form-control']) !!} --}}
    <select name="advertisement_position" id="advertisement_position" class="form-control">
        <option value="" selected>請選擇</option>
        <option value="right" {{ $advertisementInfo->advertisement_position == 'right' ? 'selected' : '' }}>右</option>
        <option value="left" {{ $advertisementInfo->advertisement_position == 'left' ? 'selected' : '' }}>左</option>
    </select>
</div>

<!-- Advertisement Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('advertisement_status', '狀態:') !!}
    {{-- {!! Form::text('advertisement_status', null, ['class' => 'form-control']) !!} --}}
    <select name="advertisement_status" id="advertisement_status" class="form-control">
        <option value="" selected>請選擇</option>
        <option value="1" {{ $advertisementInfo->advertisement_status == 1 ? 'selected' : '' }}>啟用</option>
        <option value="0" {{ $advertisementInfo->advertisement_status == 0 ? 'selected' : '' }}>停用</option>
    </select>
</div>

@push('page_scripts')
<script>
    $(document).ready(function() {
        $(document).on('change', '#advertisement_img', function () {
            let fileInput = this;
            let fileReader = new FileReader();

            fileReader.onload = function(e) {
                let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                $(fileInput).closest('.form-group').find('.img-preview-cover').html(previewHtml);
            };

            fileReader.readAsDataURL(fileInput.files[0]);
        });
        // $(document).on('change', '[id^="plan_style_"]', function () {
        //     let fileInput = this;
        //     let fileReader = new FileReader();
        //     let id = $(fileInput).attr('id'); // 獲取元素的ID
        //     let previewClass = `.img-preview-s${id.split('_').pop()}`; // 根據ID動態生成對應的預覽class

        //     fileReader.onload = function (e) {
        //         let previewHtml = `<p>預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
        //         $(fileInput).closest('.form-group').find(previewClass).html(previewHtml);
        //     };

        //     fileReader.readAsDataURL(fileInput.files[0]);
        // });
    });
</script>
@endpush
