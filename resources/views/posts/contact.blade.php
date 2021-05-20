@extends('posts.show')
@section('title') Отзывы @endsection
@section('main_content')
    <h2>Отзывы</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check" class="col-6">
        @csrf
        <div class="mb-3">
            <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Введите почту">
        </div>
        <div class="mb-3">
            <input type="text" name="subject" id="subject" class="form-control" placeholder="Введите тему">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3" placeholder="Введите текст сообщение"></textarea>
        </div>
        {{--<input type="email" name="email" id="email" placeholder="Ввкдите email" class="form-control">--}}
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Отправить</button>
        </div>
    </form>
    <br>
    <h3>Отзывы клиента</h3>
    @foreach($reviews as $item)
        <div class="alert alert-warning">
            <h5> <b>Почта: </b>{{ $item->email }}</h5>
            <p><b>Тема: </b>{{ $item->subject }} </p>
            <p><b>Сообщение: </b>{{ $item->text }}</p>
        </div>
    @endforeach
@endsection
