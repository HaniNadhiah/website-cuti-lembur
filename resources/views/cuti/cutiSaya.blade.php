@extends('layouts.base')

@section('title','Data Complaint')

@push('style')
<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('assets/modules/jqvmap/dist/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css') }}">

<!-- Template CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="card">
            <div class="card-header">
              <h4> Data User </h4>
              <div class="card-header-action">
                <a href="{{ route('form.Complaint.user')}}" class="btn btn-primary"> Add Data </a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                {{-- Alert Create --}}
                @if (Session::get('Create'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('Create')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                {{-- Alert Update --}}
                @if (Session::get('Update'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{Session::get('Update')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                {{-- Allert Delete --}}
                @if (Session::get('Delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session::get('Delete')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th width="10%">Image</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th colspan="2">Action</th>
                          </tr>
                    </thead>
                    <tbody>
                        @foreach ($complaint as $row)
                            <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$row->title}}</td>
                              <td>{{$row->kategori->kategori}}</td>
                              {{-- field & function --}}
                              <td>{!! $row->deskripsi !!}</td>
                              <td>
                                {{-- <td><img src="{{ asset ('storage/'.$row->image) }}" alt="{{$row->title}}" class="img-fluid"></td> --}}
                              <img src="{{url('img-complaint'.'/' . $row->image)}}" alt="{{$row->title}}" class="img-fluid">
                              </td>
                              <td>
                                  <span class="badge 
                                                {{ $row->status == 'pending' ? 'badge-warning' : '' }}
                                                {{ $row->status == 'in_progress' ? 'badge-info' : '' }}
                                                {{ $row->status == 'resolved' ? 'badge-success' : '' }}
                                                {{ $row->status == 'rejected' ? 'badge-danger' : '' }}">
                                                {{ ucfirst(str_replace('_', ' ', $row->status)) }}
                                            </span>
                              </td>
                              
                              <td>{{$row->created_at}}</td> 
                              <td>
                                <a href="{{route('edit.dataComplaint',$row->id)}}" 
                                  class="btn btn-secondary">Edit</a>
                              </td>
                              <td>
                                <form action="{{route('delete.dataComplaint')}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <input type="hidden" name="id" value="{{$row->id}}">
                                  <button type="submit" class="btn btn-danger btn-action"> Delete </button>
                                </form>
                              </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
    </section>
</div>
@endsection

@push('scripts')
    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('assets/modules/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/modules/chart.min.js') }}"></script>
    <script src="{{ asset('assets/modules/owlcarousel2/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/index.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endpush
