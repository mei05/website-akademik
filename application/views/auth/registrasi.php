    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5 col-l-7 mx-auto">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registrasi'); ?>">
                                <div class="form-group">
                                        <input type="text" name="nama" value="<?= set_value('nama'); ?>" class="form-control form-control-user" id="nama"
                                            placeholder="Nama Lengkap"> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                <div class="form-group" action="<?= base_url('auth/registrasi'); ?>">
                                    <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control form-control-user" id="email"
                                        placeholder="Email Address"> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group row"  action="<?= base_url('auth/registrasi'); ?>">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"  value="<?= set_value('password1'); ?>" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password"> <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?=base_url('auth')?> ">Sudah punya akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
