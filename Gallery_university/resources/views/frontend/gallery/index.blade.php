@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">

                <div class="panel-body">

                    @if(Auth::user())
                        <div class="form-group">
                            <a href="{{route('backend.index')}}" class="btn btn-success">Thêm ảnh</a>
                        </div>

                    @endif

                    <ul id="filters" class="media-filter"
                        style="text-align: center;width: 100%;padding-left: 31%;">
                        <li><a href="#" data-filter="*"> Tất cả</a></li>
                        <li><a href="#" data-filter=".CA">CA</a></li>
                        <li><a href="#" data-filter=".CB">CB</a></li>
                        <li><a href="#" data-filter=".CC">CC</a></li>
                        <li><a href="#" data-filter=".CD">CD</a></li>
                        <li><a href="#" data-filter=".CLC">CLC</a></li>
                        <li><a href="#" data-filter=".M">M</a></li>
                        <li><a href="#" data-filter=".N">N</a></li>
                        <li><a href="#" data-filter=".V">V</a></li>
                        <li><a href="#" data-filter=".T">T</a></li>
                    </ul>

                    <div id="gallery" class="media-gal">
                        @foreach($images as $img)
                            <div class="{{$img->class_code}} item ">
                                <a href="#{{$img->class_code}}_{{$img->id}}" data-toggle="modal">
                                    <img src="{{$img->url}}" alt=""/>
                                </a>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="{{$img->class_code}}_{{$img->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body row">

                                            <div class="col-md-12 img-modal">
                                                <img src="{{$img->url}}" alt="">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- modal -->
                        @endforeach
                    </div>

                </div>
            </section>
        </div>
    </div>
@stop