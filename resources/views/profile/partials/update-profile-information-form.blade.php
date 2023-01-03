<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Profile</a></li>
                    <li class="breadcrumb-item active">User Account</li>
                </ol>
            </div>
            <h4 class="page-title">User Account</h4>
        </div>
    </div>
</div>
<div class="row">
    {{-- <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form> --}}
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0">User Information Account</h5>
                <p class="text-muted font-13 mb-4">Ubah informasi akunmu pada form di bawah ini!</p>
                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    @if ($user->image)
                        <img src="{{ asset('storage/'.$user->image) }}" alt="{{ $user->image }}" style="max-width: 200px !important">
                    @endif
                    <div class="form-group"><label>Gambar Profile</label>
                        <div class="custom-file"><input type="file" name="image" class="custom-file-input"
                            id="validatedCustomFile" required>
                            @error('image')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                            @enderror
                            <label class="custom-file-label"
                            for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    <div class="form-group"><label>Nama</label>
                        <input type="text" class="form-control" required value="{{ old('name', $user->name) }}" autofocus placeholder="Tuliskan namamu tanpa mengandung angka!" name="name" autocomplete="name">
                        @error('name')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group"><label>Email</label>
                        <input type="email" class="form-control" required parsley-type="email" required value="{{ old('email', $user->email) }}" placeholder="Tuliskan emailmu dengan benar!" name="email" autocomplete="email">
                        @error('email')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group"><label>Phone</label>
                        <div><input data-parsley-type="number" type="tel" name="phone" class="form-control" required
                                placeholder="Masukkan No Hpmu" value="{{ old('phone', $user->phone) }}">
                        @error('phone')
                        <span role="alert">
                            <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                        </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group"><label>Alamat</label>
                        <div>
                            <textarea required class="form-control" name="address" rows="5">{{ old('address', $user->address) }}</textarea>
                        @error('address')
                        <span role="alert">
                            <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                        </span>
                        @enderror
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div><button type="submit"
                                class="btn btn-light waves-effect waves-light">Simpan</button>
                                <a href="javascript:window.history.go(-1);" class="btn btn-outline-danger waves-effect ml-1">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
