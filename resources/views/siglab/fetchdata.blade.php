@extends('layouts.public')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">

@stop

@section('container')
<!-- Main Content -->
<div class="main-content">

    <section class="section">
        <div class="section-header">
            <h1>Data API SIG Labs</h1>
        </div>
        <div class="col-12">
            <div class="card">
                {{-- <div class="needs-validation" novalidate=""> --}}
                    <form action="/sigapi/filters" method="GET">
                        <div class="card-body">
                            <div class="form-row">
                                {{-- Type --}}
                                <div class="form-group col-md-3 mb-1">
                                    {{-- <select name="category" class="form-control">
                                        <option selected hidden>Pilih Kategori</option>
                                        @foreach ($kategori as $item)
                                        <option {{ $activeselected==$item->uid_kk ? 'selected' : '' }}
                                            value="{{ $item->uid_kk }}">{{ $item->kate_namakuliner }}</option>
                                        @endforeach
                                    </select> --}}
                                    {{-- <label for="inputState">State</label> --}}
                                    <select id="inputType" name="type" class="form-control form-control-sm">
                                        <option value="" selected hidden>Pilih Category..</option>
                                        @foreach ($categoryrefer as $item)
                                        <option {{ $activeselected['type']==$item->title ? 'selected' : '' }} value="{{
                                            $item->title }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Status --}}
                                <div class="form-group col-md-3 mb-1">
                                    <select id="inputStatus" name="status" class="form-control form-control-sm">
                                        <option value="" selected hidden>Pilih Status..</option>

                                        <option {{ $activeselected['status']=='1' ? 'selected' : '' }} value="1">
                                            Approved
                                        </option>
                                        <option {{ $activeselected['status']=='0' ? 'selected' : '' }} value="0">
                                            Unapproved</option>
                                    </select>
                                </div>

                                {{-- Attachment --}}
                                <div class="form-group col-md-3 mb-1">
                                    <select id="inputAttachment" name="attachment" class="form-control form-control-sm">
                                        <option value="" selected hidden>Attachment..</option>

                                        <option {{ $activeselected['attachment']=='1' ? 'selected' : '' }} value="1">Ada
                                        </option>
                                        <option {{ $activeselected['attachment']=='0' ? 'selected' : '' }} value="0">
                                            Tidak
                                        </option>
                                    </select>
                                </div>

                                {{-- Discount --}}
                                <div class="form-group col-md-2 mb-1">
                                    <select id="inputDiscount" name="discount" class="form-control form-control-sm">
                                        <option value="" selected hidden>Discount..</option>

                                        <option {{ $activeselected['discount']=='1' ? 'selected' : '' }} value="1">Ada
                                        </option>
                                        <option {{ $activeselected['discount']=='0' ? 'selected' : '' }} value="0">Tidak
                                        </option>
                                    </select>
                                </div>


                                <div class="form-group col-md-1 mt-1 mb-1 text-end">
                                    <button type="submit" class="btn btn-success">Filter</button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="exest" class="table table-striped mb-0">
                                <thead>
                                    <th>No.</th>
                                    <th>Tipe/Title</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Diskon</th>
                                    <th>Status</th>
                                    <th>Lampiran</th>
                                </thead>
                                <tbody>

                                    @if (!empty($data))
                                    @foreach ($data['results'] as $item)
                                    <tr>
                                        <td>{{ $item['id'] }}</td>
                                        <td>{{ $item['type'] }}</td>
                                        <td>{{ $item['name'] }}</td>
                                        <td>{{ $item['price'] }}</td>
                                        <td>{{ $item['discount'] }}
                                            {{-- <button class="btn btn-primary" id="modalx">x</button> --}}
                                        </td>

                                        <td class="text-center">
                                            @if ($item['status'] == 0)
                                            <div class="badge badge-pill badge-warning mb-1">
                                                <div class="wizard-step-label">
                                                    Belum Diapprove
                                                </div>
                                            </div>
                                            @else
                                            <div class="badge badge-pill badge-success mb-1">Sudah Diapprove
                                            </div>
                                            @endif
                                        </td>

                                        <td class="text-center">
                                            @if ($item['attachment'] == 0)
                                            <div class="badge badge-pill badge-danger mb-1">
                                                <i class="fas fa-paperclip"></i>

                                            </div>
                                            @else
                                            <div class="badge badge-pill badge-success mb-1">
                                                <i class="fas fa-paperclip"></i>
                                            </div>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else

                                    @endif


                                </tbody>
                                <tfoot>
                                    <tr>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    {{--
                </div> --}}
            </div>
        </div>

    </section>
    {{-- --}}

</div>
@endsection

{{-- Jika ada script tambahan Libreri --}}
@section('js-libraies')
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>
{{-- <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js">
</script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js">
</script> --}}
@endsection

{{-- Jika ada script tambahan Specifik --}}
@section('js-specific')
{{-- <script src="/assets/js/chartJS-module.js"></script> --}}
@endsection
