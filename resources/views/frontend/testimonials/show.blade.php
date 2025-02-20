@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.testimonial.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.testimonials.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testimonial.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $testimonial->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testimonial.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $testimonial->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testimonial.fields.icon') }}
                                    </th>
                                    <td>
                                        {{ $testimonial->icon }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testimonial.fields.username') }}
                                    </th>
                                    <td>
                                        {{ $testimonial->username }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testimonial.fields.rating') }}
                                    </th>
                                    <td>
                                        {{ $testimonial->rating }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testimonial.fields.link') }}
                                    </th>
                                    <td>
                                        {{ $testimonial->link }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.testimonial.fields.image') }}
                                    </th>
                                    <td>
                                        @if($testimonial->image)
                                            <a href="{{ $testimonial->image->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $testimonial->image->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.testimonials.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection