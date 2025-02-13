@extends('layout')

@section('title','บทความทั้งหมด')


@section('content')
    <h2 class="text text-center py-2">หน้าบทความทั้งหมด</h2>
    <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">ชื่อบทความ</th>
            <th scope="col">เนื้อหา</th>
            <th scope="col">สถานะบทความ</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $item)
                <tr>
                    <td>{{$item->title}}</td>
                    <td>{{Str::limit($item->content,10)}}</td>
                    <td>
                        @if ($item->status==true)
                            <a href="{{route('change',$item->id)}}" class="btn btn-success">เผยแพร่</a>
                        @else
                            <a href="{{route('change',$item->id)}}" class="btn btn-warning">ฉบับร่าง</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('delete',$item->id)}}" class="btn btn-danger">ลบ</a>
                        <a href="{{route('edit',$item->id)}}" class="btn btn-warning">แก้ไข</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$blogs->links()}}
@endsection