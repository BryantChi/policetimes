<div class="table-responsive p-3">
    <table class="table" id="newsInfos-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>標題</th>
                <th>發布日期</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newsInfos as $newsInfo)
                <tr>
                    <td>{{ $newsInfo->id }}</td>
                    <td>{{ $newsInfo->title }}</td>
                    <td>{{ \Carbon\Carbon::parse($newsInfo->release_date)->format('Y-m-d') }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.newsInfos.destroy', $newsInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.newsInfos.show', [$newsInfo->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.newsInfos.edit', [$newsInfo->id]) }}"
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
