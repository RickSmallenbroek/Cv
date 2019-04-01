@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">@lang('general.editAbout')</div>
                    <div class="card-body">
                        <form action="{{ route('editAboutPage') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
{{--                                    <input type="hidden" name="for" id="personName" value="personName">--}}
                                    <label for="name">@lang('about.name')</label>
                                    <input class="form-control" id="name" name="personName"
                                           placeholder="{{$about->where('for' , 'personName')->first()->content}}">
                                </div>
                                <div class="col-md-6">
{{--                                    <input type="hidden" name="for" id="personMail" value="personMail">--}}
                                    <label for="mail">@lang('about.mail')</label>
                                    <input class="form-control" id="mail" name="personMail"
                                           placeholder="{{$about->where('for' , 'personMail')->first()->content}}">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="form-group col-md-12">
{{--                                    <input type="hidden" name="for" id="personAbout" value="personAbout">--}}
                                    <label for="personAbout">@lang('about.content')</label>
                                    <textarea class="form-control" id="personAbout" rows="3" name="personAbout"
                                              placeholder="{{$about->where('for' , 'personAbout')->first()->content}}"></textarea>
                                </div>
                            </div>
                            <div class="row mt-3">
                                @if($about->where('for' , 'personGithub')->first()->active === 1)
                                    <div class="form-group col-md-6">
{{--                                        <input type="hidden" name="for" id="personGithub" value="personGithub">--}}
                                        <label for="personGithub">@lang('about.github')</label>
                                        <input class="form-control" id="personGithub" name="personGithub"
                                               placeholder="{{$about->where('for' , 'personGithub')->first()->content}}">
                                    </div>
                                @endif
                                @if($about->where('for' , 'personStack')->first()->active === 1)
                                    <div class="form-group col-md-6">
{{--                                        <input type="hidden" name="for" id="personStack" value="personStack">--}}
                                        <label for="personGithub">@lang('about.stack')</label>
                                        <input class="form-control" id="personStack" name="personStack"
                                               placeholder="{{$about->where('for' , 'personStack')->first()->content}}">
                                    </div>
                                @endif
                                @if($about->where('for' , 'personFacebook')->first()->active === 1)
                                    <div class="form-group col-md-6">
{{--                                        <input type="hidden" name="for" id="personFacebook" value="personFacebook">--}}
                                        <label for="personGithub">@lang('about.facebook')</label>
                                        <input class="form-control" id="personFacebook" name="personFacebook"
                                               placeholder="{{$about->where('for' , 'personFacebook')->first()->content}}">
                                    </div>
                                @endif
                            </div>
                            <button class="btn btn-primary" type="submit">@lang('general.submit')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
