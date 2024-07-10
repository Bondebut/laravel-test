@extends('layout.master')

@section('title')
    ข้อมูลผู้ใช้
@endsection

@section('content')
    <h2>ชื่อ{{ $name }}</h2>
    <h2>อายุ{{ $age }}</h2>
    <h2>อีเมล์{{ $email }}</h2>
    <ul>
        @forelse ($activities as $a)
            <li>{{ $a }}</li>
        @empty
        <strong>ไม่พบ</strong>    
        @endforelse
    </ul>
@endsection