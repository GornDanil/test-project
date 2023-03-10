@extends('layout')

@section('title')Главная@endsection

@section('content')
{{--    <div class="two-col">--}}
{{--        <div class="pastes form">--}}
{{--            <h1 class="pastes_block-title">Последние пасты</h1>--}}

{{--            <ul class="pastes-list">--}}
{{--                @foreach($publicPastes as $publicPaste)--}}
{{--                    <li class="paste">--}}
{{--                        <a href="{{ route('paste', [$publicPaste->slug, $publicPaste->id]) }}" class="paste-link">--}}
{{--                            <h1 class="paste-title">{{ $publicPaste->title }}</h1>--}}
{{--                            <div class="paste-info">--}}
{{--                                <p>{{ $publicPaste->lang->lang }}</p>--}}
{{--                                @if($publicPaste->user_id == null)--}}
{{--                                    <p>Anonymous</p>--}}
{{--                                @else--}}
{{--                                    <p>{{ $publicPaste->user->name }}</p>--}}
{{--                                @endif--}}
{{--                                <p>{{ $publicPaste->created_at }}</p>--}}
{{--                                <p>{{ $publicPaste->access_mode }}</p>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                @endforeach--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div class="pastes form">--}}
{{--            <h1 class="pastes_block-title">Мои пасты</h1>--}}
{{--            @if(Auth::user())--}}
{{--                <ul class="pastes-list">--}}
{{--                    @foreach($userPastes as $userPaste)--}}
{{--                        <li class="paste">--}}
{{--                            <a href="{{ route('paste', [$userPaste->slug, $userPaste->id]) }}" class="paste-link">--}}
{{--                                <h1 class="paste-title">{{ $userPaste->title }}</h1>--}}
{{--                                <div class="paste-info">--}}
{{--                                    <p>{{ $userPaste->lang->lang }}</p>--}}
{{--                                    @if($userPaste->user_id == null)--}}
{{--                                        <p>Anonymous</p>--}}
{{--                                    @else--}}
{{--                                        <p>{{ $userPaste->user->name }}</p>--}}
{{--                                    @endif--}}
{{--                                    <p>{{ $userPaste->created_at }}</p>--}}
{{--                                    <p>{{ $userPaste->access_mode }}</p>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            @else--}}
{{--                <div class="auth-sentence">--}}
{{--                    <p>Вы не авторизованы :(</p>--}}
{{--                    <div class="nav-menu">--}}
{{--                        <a href="{{ route('login') }}" class="nav-link btn_border-white">Войти</a>--}}
{{--                        <a href="{{ route('registration') }}" class="nav-link btn_white">Зарегистрироваться</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
