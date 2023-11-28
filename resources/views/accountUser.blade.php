@if ($user)
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Обо мне</div>
                <div class="card-body ">
                    <form id="profileUpdateForm" method="POST" action="/accountUserUpdate">
                        @csrf
                        <input id="id" type="text" value="{{ $user->id }}"
                                    class="form-control @error('id') is-invalid @enderror d-none" name="id">
                        <div class="row mb-3">
                            <label for="surname"
                                class="col-md-4 col-form-label text-md-end">Фамилия</label>
                            <div class="col-md-6">
                                <input id="surname" type="text" value="{{ $user->surname }}"
                                    class="form-control @error('surname') is-invalid @enderror" name="surname"
                                   required>
                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-end">Имя</label>
                            <div class="col-md-6">
                                <input id="name" type="text" value="{{ $user->name }}"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                  required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="patronymic"
                                class="col-md-4 col-form-label text-md-end">Отчество</label>
                            <div class="col-md-6">
                                <input id="patronymic" type="text" value="{{ $user->patronymic }}"
                                    class="form-control @error('patronymic') is-invalid @enderror" name="patronymic"
                                    required autocomplete="patronymic" autofocus>
                                @error('patronymic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="login"
                                class="col-md-4 col-form-label text-md-end">Логин</label>
                            <div class="col-md-6">
                                <input id="login" type="text" value="{{ $user->login }}"
                                    class="form-control @error('login') is-invalid @enderror" name="login"
                                   required autocomplete="login" autofocus>
                                @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-end">Почта</label>
                            <div class="col-md-6">
                                <input id="email" type="email" value="{{ $user->email }}"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birthday"
                                class="col-md-4 col-form-label text-md-end">Дата рождения</label>
                            <div class="col-md-6">
                                <input id="birthday" type="text" value="{{ $user->birthday }}"
                                    class="form-control @error('birthday') is-invalid @enderror" name="birthday"
                                    required autocomplete="birthday">
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="phone"
                                class="col-md-4 col-form-label text-md-end">Телефон</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" value="{{ $user->phone }}"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"
                                    required autocomplete="phone">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="userUpdate" type="submit" class="btn btn-primary">
                                    Обновить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@else
    <p>Пользователь не найден.</p>
@endif