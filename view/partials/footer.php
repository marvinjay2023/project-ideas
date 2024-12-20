<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/bootstrap/js/jquery.min.js"></script>
<script src="/bootstrap/js/jquery.dataTables.min.js"></script>
<script src="/bootstrap/js/dataTables.bootstrap.min.js"></script>

<script>

    $(document).ready(function() {
        $('#projects').DataTable({
            order: [
                [0, 'desc']
            ],
        });

        $('#projects_length').hide();
    });

</script>

</body>

</html>