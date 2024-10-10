@extends('layout')
@section('content')
<div class="content-body">

    <div class="container">

      <div class="row">



        <div class="col-xxl-12 col-xl-12">

          <div class="card">

            <div class="card-header">

              <h4 class="card-title">View Detail</h4>

            </div>

            <div class="card-body">

              <div class="table-responsive transaction-table">

                <table class="table table-striped responsive-table">

                  <thead>

                    <tr>

                      <th>No Rek</th>

                      <th>Nama Nasabah</th>

                      <th>Alamat</th>

                      <th>Kota</th>

                      <th>No HP</th>

                      <th>Kol</th>

                      <th>Amount </th>

                      <th>Aksi</th>

                    </tr>

                  </thead>

                  <tbody id="data-table">
                    @foreach ($data["data"] as $item)               
                    <tr>
                        <td>{{$item['no_rekening'] }}</td>
                        <td>{{$item['nama_nasabah'] }}</td>
                        <td>{{$item['alamat_nasabah'] }}</td>
                        <td>{{$item['kota'] }}</td>
                        <td>{{$item['no_handphone'] }}</td>
                        <td>{{$item['kolektibilitas'] }}</td>
                        <td>{{$item['saldo_nominatif'] }}</td>
                        <td>
                            <div class="d-flex flex-column">
                                <a href="{{ route('trade.view', $item['id']) }}" class="btn btn-primary p-1">view</a>
                                <a id="whatsappLink" href="" target="_blank" class="btn btn-success p-1">call</a>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="{{ route('trade.update', $item['id']) }}" class="btn btn-danger p-1">update</a>
                                <a href="#" class="btn btn-warning p-1">alihkan</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>


                </table>

              </div>

            </div>

          </div>

        </div>

      

      </div>

    </div>

  </div>
  {{-- <script>
    let nomer = "{{ $item['no_handphone'] }}"; // Ambil nilai dari Laravel
    let hasilNomer = nomer.startsWith('0') ? nomer.slice(1) : nomer; // Hilangkan angka depan 0 jika ada

    // Update href link WhatsApp
    document.getElementById('whatsappLink').href = `https://wa.me/${hasilNomer}`;
</script> --}}
@endsection