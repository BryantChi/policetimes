<div class="table-responsive p-3">
    <table class="table" id="localNewsInfos-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>標題</th>
                <th>發布日期</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($localNewsInfos as $localNewsInfo)
                <tr>
                    <td>{{ $localNewsInfo->id }}</td>
                    <td>{{ $localNewsInfo->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($localNewsInfo->release_date)->format('Y-m-d') }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.localNewsInfos.destroy', $localNewsInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.localNewsInfos.show', [$localNewsInfo->id]) }}"
                                class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.localNewsInfos.edit', [$localNewsInfo->id]) }}"
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
