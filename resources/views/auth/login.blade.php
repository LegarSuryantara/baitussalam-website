<div class="modal fade" id="signin" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-transparent border-0">

      <div class="card shadow-lg rounded-4 p-4" style="max-width:420px; width:100%; margin:auto;">


        <div class="text-center mb-3">
          <h5 class="fw-bold d-flex justify-content-center align-items-center gap-2">
            <i class="bi bi-person-fill"></i>
            Masuk sebagai Takmir
          </h5>
        </div>


        <form method="POST" action="{{ route('login') }}">
          @csrf

          {{-- Username --}}
          <div class="input-group mb-3">
            <span class="input-group-text bg-white">
              <i class="bi bi-envelope"></i>
            </span>
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Email"
              value="{{ old('email') }}"
              required
              autofocus>
          </div>

          {{-- Password --}}
          <div class="input-group mb-3">
            <span class="input-group-text bg-white">
              <i class="bi bi-lock"></i>
            </span>
            <input
              type="password"
              name="password"
              class="form-control"
              placeholder="Password"
              required>
          </div>

          {{-- Remember --}}
          <div class="form-check mb-3">
            <input
              class="form-check-input"
              type="checkbox"
              name="remember"
              id="remember"
              {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
              Ingatkan Saya
            </label>
          </div>

          <div class="alert alert-warning small d-flex align-items-start gap-2 rounded-3">
            <i class="bi bi-exclamation-triangle-fill mt-1"></i>
            <div>
              Akses ini khusus untuk takmir masjid.
              Semua aktivitas akan tercatat demi keamanan.
            </div>
          </div>

          {{-- Error message --}}
          @if ($errors->any())
          <div class="alert alert-danger small rounded-3">
            {{ $errors->first() }}
          </div>
          @endif

          <button type="submit" class="btn btn-success w-100 rounded-pill py-2 fw-semibold">
            Sign In
          </button>
        </form>

      </div>

    </div>
  </div>
</div>