@extends('layout.app')
@section('content')
<div class="row">
        <div class="col-xl-4">
            <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="{{$data->getAvatar()}}" class="img-circle" alt="avatar" >
            </div>
            </div>
        </div>

        <div class="col-xl-8">
          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">
                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-overview">Profile Details</button>
                </li>
        
                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade profile-overview" id="profile-overview">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama</div>
                    <div class="col-lg-9 col-md-8">{{ $data->name }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">NIk</div>
                    <div class="col-lg-9 col-md-8">{{ $data->nik }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">No.Telp</div>
                    <div class="col-lg-9 col-md-8">{{ $data->telp }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">{{ $data->email }}</div>
                  </div>
                  
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">{{$data->alamat}}</div>
                  </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3 active show" id="profile-edit">

                  <!-- Profile Edit Form -->
                  <form action="/user/update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                  @csrf 
                  @method('PUT')
                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Username</label>
                      <div class="col-md-8 col-lg-9">
                      <input class="form-control" name="username" id="inputUsername" type="text" placeholder="Enter your username" value="{{ $data->username }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                      <div class="col-md-8 col-lg-9">
                      <input class="form-control" name="name" id="inputFirstName" type="text" placeholder="Enter your name" value="{{ $data->name }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="company" class="col-md-4 col-lg-3 col-form-label">NIK</label>
                      <div class="col-md-8 col-lg-9">
                      <input class="form-control" name="nik" id="inputLastName" type="number" placeholder="Enter your nik" value="{{ $data->nik }}">
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                      <div class="col-md-8 col-lg-9">
                      <input class="form-control" name="email" id="inputLocation" type="email" placeholder="Enter your email" value="{{ $data->email }}">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No.Telp</label>
                      <div class="col-md-8 col-lg-9">
                      <input class="form-control" name="telp" id="inputOrgName" type="number" placeholder="Enter your call number" value="{{ $data->telp }}">
                      </div>
                    </div>

                     <div class="row mb-3">
                      <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Foto</label>
                      <div class="col-md-8 col-lg-9">
                      <input type="file" name="avatar" class="form-control" placeholder="foto">
                      </div>
                    </div>

                    {{-- alamat --}}
                                    {{-- provinsi --}}
                                    <div class="form-group">
                                        <label class="form-label">Provinsi</label>
                                        <div class="input-group mb-3">
                                           
                                            <select class="custom-select" name="selectProvinsi" id="selectProvinsi">
                                                {{-- <option>Provinsi</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    {{-- kabupaten/kota --}}
                                    <div class="form-group">
                                        <label class="form-label">Kabupaten</label>
                                        <div class="input-group mb-3">
                                            
                                            <select class="custom-select" name="selectKabupaten" id="selectKabupaten">
                                                {{-- <option>Kabupaten</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    {{-- kecamatan --}}
                                    <div class="form-group">
                                        <label class="form-label">Kecamatan</label>
                                        <div class="input-group mb-3">
                                            
                                            <select class="custom-select" name="selectKecamatan" id="selectKecamatan">
                                                {{-- <option value="Kecamatan"></option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    {{-- kelurahan --}}
                                    <div class="form-group">
                                        <label class="form-label">Kelurahan</label>
                                        <div class="input-group mb-3">
    
                                            <select class="custom-select" name="selectKelurahan" id="selectKelurahan">
                                                {{-- <option> Kelurahan </option> --}}
                                            </select>
                                        </div>
                                    </div>

                                    {{-- final alamat --}}
                                    <div class="form-group">
                                        <label class="form-label">Alamat</label>
                                        <textarea class="form-control"  type="alamat" name="alamat" id="alamat" placeholder="Enter your address">{{ $data->alamat }}</textarea>
                                    </div>
                                    {{-- end alamat --}}


                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->
                  <script>
        let selectProvinsi = document.getElementById('selectProvinsi');
        let selectKabupaten = document.getElementById('selectKabupaten');
        let selectKecamatan = document.getElementById('selectKecamatan');
        let selectKelurahan = document.getElementById('selectKelurahan');
        let alamat = document.getElementById('alamat');
        document.addEventListener('DOMContentLoaded', function(){
            fetchProvinsi();
            selectKabupaten.style.display = "none";
            selectKecamatan.style.display = "none";
            selectKelurahan.style.display = "none";
            getValueToAlamat();
        });
        const config = {
            method : 'GET'
        }
        // fetch provinsi get data
        async function fetchProvinsi(){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json`;
            await fetch(URL, config)
            .then(response => response.json())
            // .then(provinsi => console.log(provinsi))
            .then(provinsi => {
                if(provinsi != null || undefined){
                    provinsi.map(data=>{
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectProvinsi.appendChild(opt);
                        // console.log(selectProvinsi)
                    })
                }else{
                    let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectProvinsi.appendChild(opt);
                }
            }).catch(error => alert(`Data provinsi tidak ada`));
        }
        // fetch kabupaten/kota get data
        async function fetchKabupaten(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/regencies/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kabupaten =>{
                if (kabupaten !== null || undefined) {
                        kabupaten.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKabupaten.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKabupaten.appendChild(opt);
                    }
            })
        }
        // fetch kecamatan get data
        async function fetchKecamatan(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/districts/${id === undefined || null ? ""  : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kecamatan =>{
                if (kecamatan !== null || undefined) {
                        kecamatan.map(data => {
                            let opt = document.createElement('option');
                            opt.value = data.id;
                            opt.innerHTML = data.name;
                            selectKecamatan.appendChild(opt);
                        })
                    } else {
                        let opt = document.createElement('option');
                        opt.value = "";
                        opt.innerHTML = "Data tidak tersedia";
                        selectKecamatan.appendChild(opt);
                    }
            })
        }
    
        async function fetchKelurahan(id){
            const URL = `http://www.emsifa.com/api-wilayah-indonesia/api/villages/${id === undefined || null ? "" : id}.json`;
            await fetch(URL, config)
            .then(response => response.json())
            .then(kelurahan => {
                if(kelurahan !== null || undefined){
                    kelurahan.map(data => {
                        let opt = document.createElement('option');
                        opt.value = data.id;
                        opt.innerHTML = data.name;
                        selectKelurahan.appendChild(opt);
                    })
                }else{
                    let opt = document.createElement('option');
                    opt.value = "";
                    opt.innerHTML = "Data Tidak Tersedia";
                    selectKelurahan.appendChild(opt);
                }
            })
        }
        selectProvinsi.addEventListener('change', () => {
            fetchKabupaten(selectProvinsi.value);
            selectKabupaten.style.display = "block";
            selectKabupaten.innerHTML = '';
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        
        selectKabupaten.addEventListener('change', () => {
            fetchKecamatan(selectKabupaten.value);
            selectKecamatan.style.display = "block";
            selectKecamatan.innerHTML = '';
            selectKelurahan.innerHTML = '';
        });
        
        selectKecamatan.addEventListener('change', () => {
            fetchKelurahan(selectKecamatan.value);
            selectKelurahan.style.display = "block";
            selectKelurahan.innerHTML = '';
        });
        function getValueToAlamat() {
            alamat.addEventListener('change', () => {
                let alamatText = alamat.value;
                document.getElementById('alamat').value = `${alamatText}, ${selectKelurahan.options[selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `;
                // console.log(`${alamatText}, ${selectKelurahan.options[  selectKelurahan.selectedIndex].text}, ${selectKecamatan.options[selectKecamatan.selectedIndex].text}, ${selectKabupaten.options[selectKabupaten.selectedIndex].text}, ${selectProvinsi.options[selectProvinsi.selectedIndex].text}, `);
                
            });
        }
    </script>
                </div>

            </div>
          </div>

        </div>
      </div>
      @stop

