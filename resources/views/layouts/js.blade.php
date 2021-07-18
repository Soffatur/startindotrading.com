<!-- Modernizr-3 -->
<!-- jQuery -->
<script src="{{ asset('paito/main') }}/../assets/plugins/common/common.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>

<!-- custom scripts -->
<script src="{{ asset('paito/main') }}/js/scripts.js"></script>

@if ($currentRouteName == 'dashboard')
    <script src="{{ asset('paito/main') }}/../assets/plugins/chartjs/Chart.bundle.js"></script>
    <script>
        var count = {!! json_encode($data) !!}
    </script>
@endif

<script src="{{ asset('js/lib/swal.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>


@if (!empty($currentRouteName))
    <script src="{{ asset('js/' . explode('.', $currentRouteName)[0] . '.js') }}"></script>
@endif

