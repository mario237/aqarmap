<script src="{{ asset('assets/front/js/main.js') }}"></script>
<script>
    function clickMe() {
        $('#inputWrapper').toggle('d-none')
        $('#txt1').toggle(0, 'd-none')
        $('#txt2').toggle(0, 'd-none')
    }
</script>
@yield('scripts')
