@extends('layouts.app')

@section('content')
    <div id="settings" class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>@lang('general.settings')</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('editLinks') }}" method="POST">

                            <label>@lang('general.github') @lang('general.link')</label>
                            <input type="hidden" id="personGithub" name="personGithub" value="personGithub">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="githubSwitch">
                                <label class="custom-control-label" for="githubSwitch">@lang('settings.switch')</label>
                            </div>
                            <br>
                            <label>@lang('general.stack') @lang('general.link')</label>
                            <input type="hidden" name="personStack" value="personStack">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="stackOverflowSwitch">
                                <label class="custom-control-label"
                                       for="stackOverflowSwitch">@lang('settings.switch')</label>
                            </div>
                            <br>
                            <label>@lang('general.facebook') @lang('general.link')</label>
                            <input type="hidden" name="personFacebook" value="personFacebook">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="facebookSwitch">
                                <label class="custom-control-label"
                                       for="facebookSwitch">@lang('settings.switch')</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection