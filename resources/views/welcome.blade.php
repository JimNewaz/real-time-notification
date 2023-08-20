<script src="{{ asset('js/app.js') }}"></script>
<script>
    Echo.channel('events')
        .listen('RealTimeMessage', (e) => console.log('RealTimeMessage: ' + e.message));
</script>