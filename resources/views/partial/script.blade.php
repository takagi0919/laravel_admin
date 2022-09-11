<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Material_Able JS -->
<script src="{{ asset('material_able/js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('material_able/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('material_able/pages/waves/js/waves.min.js') }}"></script>
<script src="{{ asset('material_able/js/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('material_able/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('material_able/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('material_able/js/pcoded.min.js') }}"></script>
<script src="{{ asset('material_able/js/vertical/vertical-layout.min.js') }}"></script>
<script src="{{ asset('material_able/js/script.js') }}"></script>

{{-- Livewire JS --}}
@livewireScripts

{{-- Custom JS --}}
@yield('script')
