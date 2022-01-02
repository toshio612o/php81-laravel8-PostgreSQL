<!-- resources/views/books.blade.php -->
@extends('layouts.app')
@section('content')
<!-- Bootstrapの定型コード -->
<div class="card-body">
    <div class="card-title">
        本のタイトル
    </div>

    <!-- バリエーションエラーの表示に使用 -->
    @include('common.errors')
    <!-- バリエーションエラーの表示に使用 -->

    <!-- 本登録フォーム -->
    <form action="{{ url('books') }}" method="post" class="form-horizontal">
        @csrf

        <!-- 本のタイトル -->
        <div class="formgroup">
            <div class="col-sm-6">
                <input type="text" name="item_name" class="form-control">
            </div>
        </div>

        <!-- 本登録ボタン -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-primary">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
