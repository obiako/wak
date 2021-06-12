<!-- Modal -->
<div class="modal fade " id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Frog Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" novalidate action="submit.php" method="POST">
                    <div class="col-md-4">
                        <label for="colour" class="form-label"> Colour</label>
                        <select class="form-select" id="editcolour" name="colour" required>
                            <option selected disabled value="">Choose...</option>
                            <option>Green</option>
                            <option>Teal</option>
                            <option>Brown</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a Colour.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="weight" class="form-label">Weight (grams)</label>
                        <input type="number" class="form-control" id="editweight" name="weight" min="1" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="hatch_date" class="form-label">Hatch Date</label>


                        <input type="date" class="form-control" id="edithatch_date" name="hatch_date" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid date.
                        </div>

                    </div>
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="editdescription" name="description" ></textarea>
                        <div class="invalid-feedback">
                            Please provide a description.
                        </div>
                    </div>
                    <input type="hidden" name="type" value="update_frog" >
                    <input type="hidden" name="id" id="editid"  >

                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>