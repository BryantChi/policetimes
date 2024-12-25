<div class="table-responsive p-3">
    <table class="table w-100" id="advertisementInfos-table">
        <thead>
            <tr>
                <th>名稱</th>
                <th>圖片</th>
                <th>連結</th>
                <th>位置</th>
                <th>狀態</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($advertisementInfos as $advertisementInfo)
                <tr>
                    <td>{{ $advertisementInfo->advertisement_name }}</td>
                    <td width="120"><a href="{{ env('APP_URL', 'https://policetimes.com.tw') . '/uploads/' . $advertisementInfo->advertisement_img }}" data-fancybox><img src="{{ env('APP_URL', 'https://policetimes.com.tw') . '/uploads/' . $advertisementInfo->advertisement_img }}" class="img-fluid img-thumbnail" alt=""></a></td>
                    <td>{{ $advertisementInfo->advertisement_link }}</td>
                    <td>{{ ($advertisementInfo->advertisement_position ?? 'left') == 'right' ? '右' : '左' }}</td>
                    <td>{{ ($advertisementInfo->advertisement_status ?? 1) == 1 ? '啟用' : '停用' }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.advertisementInfos.destroy', $advertisementInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.advertisementInfos.show', [$advertisementInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.advertisementInfos.edit', [$advertisementInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'button',
                                'class' => 'btn btn-danger btn-xs',
                                'onclick' => "return check(this)",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
