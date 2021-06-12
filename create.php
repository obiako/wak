<div class="card">
    <div class="card-header">
        Add New Frog
    </div>
    <div class="card-body">
        <h5 class="card-title">Add New Frog</h5>
        <form class="row g-3 needs-validation" novalidate action="submit.php" method="POST">
            <div class="col-md-4">
                <label for="colour" class="form-label"> Colour</label>
                <select class="form-select" id="colour" name="colour" required>
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
                <input type="number" class="form-control" id="weight" name="weight" min="1" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="hatch_date" class="form-label">Hatch Date</label>


                <input type="date" class="form-control" id="hatch_date" name="hatch_date" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please select a valid date.
                </div>

            </div>
            <div class="col-md-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>

            </div>
            <input type="hidden" name="type" value="add_frog" >

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
</div>
