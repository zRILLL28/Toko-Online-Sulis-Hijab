<!-- Page-Title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="mt-0">Update Password</h5>
                <p class="text-muted font-13 mb-4">Ubah passwordmu, dan jangan lupa mengingatnya ya!</p>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
                    <div class="form-group"><label>Password</label>
                        <div><input id="current_password" name="current_password" type="password"
                                class="form-control mb-2" required placeholder="Password Lama"
                                autocomplete="current-password">
                            @error('current_password')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                            @enderror
                        </div>
                        <div><input id="password" name="password" type="password" class="form-control" required
                                placeholder="Password" autocomplete="new-password">
                            @error('password')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                            @enderror
                        </div>
                        <div class="mt-2"><input type="password" class="form-control" required
                                id="password_confirmation" name="password_confirmation" data-parsley-equalto="#password"
                                placeholder="Ketikkan kembali Passwordmu" autocomplete="new-password">
                            @error('password_confirmation')
                            <span role="alert">
                                <small class="text-danger d-block"><strong>{{ $message }}</strong></small>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div><button type="submit" class="btn btn-light waves-effect waves-light">Update
                                Password</button>
                            <a href="javascript:window.history.go(-1);"
                                class="btn btn-outline-danger waves-effect ml-1">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->
