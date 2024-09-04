    <!-- resources/views/locations/index.blade.php -->
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2>Filter Divisions, Districts, and Upazilas</h2>

            <div class="mb-3">
                <label for="division" class="form-label">Select Division:</label>
                <select id="division" class="form-select">
                    <option value="">Select Division</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="district" class="form-label">Select District:</label>
                <select id="district" class="form-select" disabled>
                    <option value="">Select District</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="upazila" class="form-label">Select Upazila:</label>
                <select id="upazila" class="form-select" disabled>
                    <option value="">Select Upazila</option>
                </select>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Fetch districts based on selected division
                $('#division').change(function() {
                    var divisionId = $(this).val();
                    if (divisionId) {
                        $.get('/districts/' + divisionId, function(data) {
                            $('#district').empty().append('<option value="">Select District</option>');
                            $('#upazila').empty().append('<option value="">Select Upazila</option>')
                                .prop('disabled', true);
                            data.forEach(function(district) {
                                $('#district').append('<option value="' + district.id + '">' +
                                    district.name + '</option>');
                            });
                            $('#district').prop('disabled', false);
                        });
                    } else {
                        $('#district').empty().append('<option value="">Select District</option>').prop(
                            'disabled', true);
                        $('#upazila').empty().append('<option value="">Select Upazila</option>').prop(
                            'disabled', true);
                    }
                });

                // Fetch upazilas based on selected district
                $('#district').change(function() {
                    var districtId = $(this).val();
                    if (districtId) {
                        $.get('/upazilas/' + districtId, function(data) {
                            $('#upazila').empty().append('<option value="">Select Upazila</option>');
                            data.forEach(function(upazila) {
                                $('#upazila').append('<option value="' + upazila.id + '">' +
                                    upazila.name + '</option>');
                            });
                            $('#upazila').prop('disabled', false);
                        });
                    } else {
                        $('#upazila').empty().append('<option value="">Select Upazila</option>').prop(
                            'disabled', true);
                    }

                });
            });
        </script>
    @endsection
