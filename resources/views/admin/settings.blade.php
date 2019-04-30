@extends('layouts.app')

@section('content')
    <div id="settings" class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5 ">
                    <div class="card-header text-center">
                        <h4>@lang('general.settings')</h4>
                    </div>
                    <div class="card-body">

                        <!-- link & nav link settings -->
                        <div class="container">
                            <a data-toggle="collapse" data-target="#link" aria-expanded="false" aria-controls="link"
                               style="cursor: pointer">
                                <div class="row">
                                    <hr class="col ml-3 thickHr">
                                    <h4>@lang('settings.link')</h4>
                                    <hr class="col mr-3 thickHr">
                                </div>
                            </a>
                            <div class="collapse card" id="link">

                                <div class="container mt-2 mb-2">
{{--                                    <div class="row">--}}
                                        <form action="{{ route('editLinks') }}" method="POST">
                                            <div class="col-lg-6 col-sm-12 mt-4">
                                                <label>@lang('general.github') @lang('general.link')</label>
                                                <input type="hidden" id="personGithub" name="personGithub"
                                                       value="personGithub">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="githubSwitch" {{$about->where('for','personGithub')->first()->active === 1 ? 'checked' : ''}}>
                                                    <label class="custom-control-label"
                                                           for="githubSwitch">@lang('settings.switch')</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 mt-4">
                                                <label>@lang('general.stack') @lang('general.link')</label>
                                                <input type="hidden" id="personStack" name="personStack"
                                                       value="personStack">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="stackOverflowSwitch" {{$about->where('for','personStack')->first()->active === 1 ? 'checked' : ''}}>
                                                    <label class="custom-control-label"
                                                           for="stackOverflowSwitch">@lang('settings.switch')</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 mt-4">
                                                <label>@lang('general.facebook') @lang('general.link')</label>
                                                <input type="hidden" id="personFacebook" name="personFacebook"
                                                       value="personFacebook">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="facebookSwitch" {{$about->where('for','personFacebook')->first()->active === 1 ? 'checked' : ''}}>
                                                    <label class="custom-control-label"
                                                           for="facebookSwitch">@lang('settings.switch')</label>
                                                </div>
                                            </div>
                                        </form>
{{--                                    </div>--}}
                                </div>

                            </div>
                        </div>

                        <!-- avatar settings -->
                        <div class="container">
                            <a data-toggle="collapse" data-target="#avatar" aria-expanded="false" aria-controls="avatar"
                               style="cursor: pointer">
                                <div class="row mt-5">
                                    <hr class="col ml-3 thickHr">
                                    <h4>@lang('settings.avatar')</h4>
                                    <hr class="col mr-3 thickHr">
                                </div>
                            </a>
                            <div class="collapse card" id="avatar">
                                <div class="container mt-2 mb-2">
                                    <div class="text-center">
                                        <form action="{{ route('editImage') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mt-2">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-7">
                                                    <input type="file" name="image" class="form-control-file"
                                                           id="file">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <button class="btn btn-success"
                                                            type="submit">@lang('general.upload')</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection