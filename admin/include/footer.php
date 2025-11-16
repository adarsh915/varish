<script src="assets/bundles/libscripts.bundle.js"></script>

    <!-- Plugin Js -->
    <script src="assets/bundles/apexcharts.bundle.js"></script>
    <script src="assets/bundles/dataTables.bundle.js"></script>

    <!-- Jquery Page Js -->
    <script src="assets/js/template.js"></script>
    <script src="assets/js/page/index.js"></script>


    <script>
        $('#myDataTable')
            .addClass('nowrap')
            .dataTable({
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    </script>
    <script>
        $('#servicesDataTable')
            .addClass('nowrap')
            .dataTable({
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    </script>
    <script>
        $('#offerDataTable')
            .addClass('nowrap')
            .dataTable({
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    </script>
    <script>
        $('#testonomailsDataTable')
            .addClass('nowrap')
            .dataTable({
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    </script>
 <!-- jQuery FIRST -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap (optional, but before DataTables Bootstrap integration) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables core JS -->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<!-- DataTables Bootstrap 5 integration -->
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#modelsTable').DataTable();
    $(document).on("click", ".editBtn", function () {
    $("#edit_id").val($(this).data("id"));
    $("#edit_title").val($(this).data("title"));
    $("#edit_description").val($(this).data("description"));
    $("#edit_description2").val($(this).data("description2"));

    // Show old images
    $("#old_image1").attr("src", "uploads/" + $(this).data("image"));
    $("#old_image2").attr("src", "uploads/" + $(this).data("image2"));
});

});
</script>



</body>

</html>
