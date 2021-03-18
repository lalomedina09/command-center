@extends('layouts.app')
@section('content')
    <div class="contents">
        <div class="atbd-page-content">
            <div class="container-fluid">
                <div class="note-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcrumb-main">
                                <h4 class="text-capitalize breadcrumb-title">Notas</h4>
                                <div class="breadcrumb-action justify-content-center flex-wrap">
                                    @include('applications.components.header.filter-date')
                                    @include('applications.components.header.export')
                                    @include('applications.components.header.share')
                                    @include('applications.components.header.add')
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="note-contents">
                                <div class="note-sibebar-wrapper mb-30">
                                    @include('applications.notes.components.sidebar')
                                </div>
                                <!-- ends: .col-lg-2 -->
                                <div class="note-grid-wrapper mb-30">
                                    <div class="notes-wrapper">
                                        <div class="note-grid">
                                            @if(count($notes)>0)
                                                @foreach ($notes as $note)
                                                    @include('applications.notes.components.notes', array('note' => $note))
                                                @endforeach
                                            @else
                                                <div class=" alert alert-info " role="alert">
                                                    <div class="alert-content">
                                                        <p>Aun no tienes notas agregadas en tu cuenta....</p>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div><!-- ends: .col-lg-10 -->
                            </div>
                        </div><!-- ends: .col-lg-12 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ends: .atbd-page-content -->
        @include('applications.notes.components.modal_add')
    </div>
@endsection
