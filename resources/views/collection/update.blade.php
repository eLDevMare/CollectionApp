@extends('layout')
@section('content')
    <div class="content-body">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 col-xl-12">
          <div class="page-title">
            <h4>Profile</h4>
          </div>
          <div class="card h-unset">
            <div class="card-header">
              <div class="settings-menu">
                <a href="settings-profile.php">Input</a>
              </div>
            </div>

            <div class="card-body pb-0">
              <div class="row">

                <div class="col-xxl-12">
                  <div class="card no-shadow">

                    <div class="card-header">
                      <h4 class="card-title">Personal Information</h4>
                    </div>

                    <div class="card-body">
                      <form class="personal_validate" action="{{ route('update.update') }}" method="POST" id="locationForm">
                        @csrf
                        <div class="row g-4">
                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Nomer Rekening</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['no_rekening'] }}"
                              name="no_rekening"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Nama Nasabah</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['nama_nasabah'] }}"
                              name="nama_nasabah"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Alamat Nasabah</label>
                            <input
                              readonly
                              type="email"
                              class="form-control"
                              value="{{ $data['alamat_nasabah'] }}"
                              name="alamat_nasabah"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Kota</label>
                            <input
                              readonly
                              type="text"
                              class="form-control hasDatepicker"
                              value="{{ $data['kota'] }}"
                              name="kota"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label"
                              >Nomer Handphone</label
                            >
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['no_handphone'] }}"
                              name="no_handphone"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label"
                              >Tanggal Realisasi</label
                            >
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['tanggal_realisasi'] }}"
                              name="tanggal_realisasi"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Jangka Waktu</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['jangka_waktu'] }}"
                              name="jangka_waktu"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Plafon</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['plafon'] }}"
                              name="plafon"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Saldo Nominatif</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['saldo_nominatif'] }}"
                              name="saldo_nominatif"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Angsuran Pokok</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['angsuran_pokok'] }}"
                              name="angsuran_pokok"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Angsuran Bunga</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['angsuran_bunga'] }}"
                              name="angsuran_bunga"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Tunggakan Bunga</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['tunggakan_bunga'] }}"
                              name="tunggakan_bunga"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Tunggakan Pokok</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['tunggakan_pokok'] }}"
                              name="tunggakan_pokok"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">FTP</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['ftp'] }}"
                              name="ftp"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">FTB</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['ftb'] }}"
                              name="ftb"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Kolektibilitas</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['kolektibilitas'] }}"
                              name="kolektibilitas"
                            />
                          </div>

                          
                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">AO</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['ao'] }}"
                              name="ao"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Status Kunjungan</label>
                            <select class="form-control bg-slate-300" name="status_kunjungan" id="statusKunjungan">
                              @foreach ($kunjungan['data'] as $item)
                                <option class="form-control bg-slate-300" value="{{ $item['id'] }}">{{ $item['status_kunjungan'] }}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6" id="tunggak">
                            <label class="form-label">Total Tunggakan</label>
                            <input
                              readonly
                              type="text"
                              class="form-control"
                              value="{{ $data['total_tunggakan'] }}"
                              name="total_tunggakan"
                            />
                          </div>
                          <div class="col-xxl-6 col-xl-6 col-lg-6" id="yang_sudah_di_bayar">
                            <label class="form-label">Yang Sudah di Bayar</label>
                            <input
                              disable
                              type="text"
                              inputmode="numeric"
                              class="form-control bg-slate-300"
                              value="{{ $data['total_tunggakan'] }}"
                              name="postal"
                            />
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6" id="status_pembayaran">
                            <label class="form-label">Status Pembayaran</label>
                            <select class="form-control bg-slate-300" name="status_pembayaran" disabled >
                              @foreach ($dataOption['data'] as $item)                   
                              <option class="form-control bg-slate-300" value="{{ $item['id'] }}">{{ $item['status_pembayaran'] }}</option>
                              @endforeach
                            </select>
                          </div>

                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Nominal Pembayaran</label>
                            <input
                              type="text"
                              inputmode="numeric"
                              class="form-control bg-slate-300"
                              value=""
                              name="nominal_pembayaran"
                            />
                          </div>


                          <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <label class="form-label">Tanggal Janji Bayar</label>
                            <input
                              type="date"
                              class="form-control bg-slate-300"
                              name="tanggal_janji_bayar"
                              id="tanggalJanjiBayar"
                              readonly
                            />
                          </div>

                          

                          <input type="hidden" name="lokasi_collection" id="location">
                          <input type="hidden" name="periode" value="12">
                          <input type="hidden" name="collection_data" value="{{ $data['id'] }}">

                          <!-- button save -->
                          <div class="col-12">
                            <button type="submit"
                              class="btn btn-success pl-5 pr-5 waves-effect"
                            >
                              Update
                          </button>

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
  </div>
  <script>
    // Mengambil elemen
    const tunggakanEl = document.querySelector('#tunggak input');
    const bayarEl = document.querySelector('#yang_sudah_di_bayar input');
    const statusEl = document.querySelector('#status_pembayaran select');
    const statusKunjunganEl = document.getElementById('statusKunjungan');
    const tanggalJanjiBayarEl = document.getElementById('tanggalJanjiBayar');
    document.addEventListener('DOMContentLoaded', function() {
    getLocation(); // Panggil fungsi untuk mengambil lokasi saat halaman dimuat
});

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, error);
    } else {
        console.log("Geolocation tidak didukung oleh browser ini.");
    }
}

function success(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    
    // Gabungkan latitude dan longitude dalam satu string
    const locationString = `${latitude}, ${longitude}`;
    
    // Set nilai ke input
    document.getElementById('location').value = locationString; // Taruh di value input
}

function error() {
    console.log("Tidak dapat mengambil lokasi. Pastikan kamu memberikan izin akses lokasi.");
}

  
  // Fungsi untuk mengubah properti readonly
  function toggleReadonly() {
    const selectedValue = statusKunjunganEl.value;

    if (selectedValue === '92c7e8ee-5e23-4764-a824-a503b5d4024e') {
      tanggalJanjiBayarEl.removeAttribute('readonly');
    } else {
      tanggalJanjiBayarEl.setAttribute('readonly', true);
    }
  }

  // Jalankan fungsi ketika opsi status kunjungan berubah
  statusKunjunganEl.addEventListener('change', toggleReadonly);

  // Set initial state saat halaman pertama kali dimuat
  document.addEventListener('DOMContentLoaded', toggleReadonly);
  
    // Fungsi untuk mengecek kondisi pembayaran
    function cekStatusPembayaran() {
      const tunggakan = parseFloat(tunggakanEl.value) || 0;
      const bayar = parseFloat(bayarEl.value) || 0;
  
      if (bayar === 0) {
        statusEl.value = '6d022816-c52b-4693-9db4-b4e05236d7c1'; // Belum ada pembayaran
      } else if (bayar < tunggakan) {
        statusEl.value = '07270588-9b45-468d-91de-3db5710385ee'; // Pembayaran sebagian
      } else if (bayar >= tunggakan) {
        statusEl.value = 'cf7c980d-abaa-4a97-a0cd-449008d7579c'; // Pembayaran lunas
      }
    }
  
    // Event listener saat input pada "Yang Sudah di Bayar" berubah
    bayarEl.addEventListener('input', cekStatusPembayaran);
  
    // Jalankan fungsi saat halaman dimuat untuk status awal
    document.addEventListener('DOMContentLoaded', cekStatusPembayaran);



  // Fungsi untuk mendapatkan format tanggal yang sesuai dengan input date
  function getFormattedDate(date) {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, '0');
    const day = String(date.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
  }

  // Mendapatkan tanggal hari ini
  const today = new Date();
  // Mendapatkan tanggal 3 bulan ke depan
  const threeMonthsLater = new Date();
  threeMonthsLater.setMonth(today.getMonth() + 3);

  // Mengatur batas minimum dan maksimum pada input date
  const dateInput = document.getElementById('tanggalJanjiBayar');
  dateInput.min = getFormattedDate(today); // Hari ini
  dateInput.max = getFormattedDate(threeMonthsLater); // 3 bulan ke depan
  </script>
  
@endsection