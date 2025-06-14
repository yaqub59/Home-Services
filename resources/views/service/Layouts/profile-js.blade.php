
    <script>
        $(document).ready(function() {
            //console.log("jQuery is ready");
            //Remove Services
            $(document).on('click', '.remove-service', function() {
                //alert("Clicked remove!");
                let row = $(this).closest('.service-row');
                let id = row.find('input[name*="[id]"]').val();

                //console.log("Removing ID:", id);

                if (id) {
                    $('#deleted-inputs-container').append(
                        `<input type="hidden" name="deleted_services[]" value="${id}">`
                    );
                }

                row.remove();
            });
            //Remove Certificates
            $(document).on('click', '.remove-certificate', function() {
                //alert("Clicked remove!");
                let row = $(this).closest('.certificate-row');
                let id = row.find('input[name*="[id]"]').val();
                //console.log("Removing ID:", id);
                if (id) {
                    $('#deleted-certificates-container').append(
                        `<input type="hidden" name="deleted_certificates[]" value="${id}">`
                    );
                }

                row.remove();
            });
            // Remove Expertises
            $(document).on('click', '.remove-exp', function() {
                let row = $(this).closest('.expertise-row');
                let id = row.find('input[type="hidden"][name*="[id]"]').val();
                let tagInput = row.find('input[type="text"][name*="[tags]"]');

                console.log("Clicked remove! ID:", id);

                // If ID exists (i.e., it's an existing expertise), mark it for deletion
                if (id) {
                    $('#deleted-expertises-container').append(
                        `<input type="hidden" name="deleted_expertises[]" value="${id}">`
                    );
                }

                // Reset input fields to avoid saving wrong values
                tagInput.val(''); // clear tag name
                row.find('input[type="hidden"][name*="[id]"]').val(
                    ''); // clear id to prevent storing in tags

                // Then remove the row
                row.remove();
            });
        });
    </script>
    <!-- Then your full add-certificate-btn logic -->
    <script>
        const institutes = @json(getAllInstitutes()->pluck('name'));
        let certificateIndex = {{ $index ?? 1 }};

        document.getElementById('add-certificate-btn').addEventListener('click', function() {
            const wrapper = document.getElementById('certificates-wrapper');

            // ✅ Remove empty message if present
            const emptyMessage = document.getElementById('empty-certificate-message');
            if (emptyMessage) {
                emptyMessage.remove();
            }

            // ✅ Append new certificate row
            let html = `
        <div class="form-row align-items-center skill-cont certificate-row mb-3">
            <div class="input-block col-lg-2">
                <label class="form-label">Name</label>
                <input type="text" name="certificates[${certificateIndex}][name]" class="form-control" placeholder="Enter certificate name">
            </div>
            <div class="input-block col-lg-3">
                <label class="form-label">Institute</label>
                <select name="certificates[${certificateIndex}][institute]" class="form-control">
                    <option value="">Select institute</option>`;

            institutes.forEach(function(institute) {
                html += `<option value="${institute}">${institute}</option>`;
            });

            html += `
                </select>
            </div>
            <div class="input-block col-lg-2">
                <label class="form-label">Start Date</label>
                <input type="date" name="certificates[${certificateIndex}][start_date]" class="form-control">
            </div>
            <div class="input-block col-lg-2">
                <label class="form-label">End Date</label>
                <input type="date" name="certificates[${certificateIndex}][end_date]" class="form-control">
            </div>
            <div class="input-block col-lg-2">
                <label class="form-label">Description</label>
                <input type="text" name="certificates[${certificateIndex}][description]" class="form-control" placeholder="Enter description">
            </div>
            <div class="input-block col-lg-1 d-flex align-items-end">
                <a href="javascript:void(0);" class="btn remove-certificate" title="Remove">
                    <i class="far fa-trash-alt"></i>
                </a>
            </div>
        </div>`;

            wrapper.insertAdjacentHTML('beforeend', html);
            certificateIndex++;
        });
    </script>
