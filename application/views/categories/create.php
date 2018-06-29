<h2><?php echo $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('categories/create'); ?>
    <fieldset>
<!--        <legend>Legend</legend>-->
<!--        <div class="form-group row">-->
<!--            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>-->
<!--            <div class="col-sm-10">-->
<!--                <input readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com" type="text">-->
<!--            </div>-->
<!--        </div>-->
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Nombre de categoría" type="text">
<!--            <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
        </div>
<!--        <div class="form-group">-->
<!--            <label for="exampleInputPassword1">Password</label>-->
<!--            <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="exampleSelect1">Detalles</label>-->
<!--            <select class="form-control" id="details">-->
<!--                <option>1</option>-->
<!--                <option>2</option>-->
<!--                <option>3</option>-->
<!--                <option>4</option>-->
<!--                <option>5</option>-->
<!--            </select>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="exampleSelect2">Example multiple select</label>-->
<!--            <select multiple="" class="form-control" id="exampleSelect2">-->
<!--                <option>1</option>-->
<!--                <option>2</option>-->
<!--                <option>3</option>-->
<!--                <option>4</option>-->
<!--                <option>5</option>-->
<!--            </select>-->
<!--        </div>-->
        <div class="form-group">
            <label for="details">Detalles</label>
            <textarea class="form-control" id="details" name="details" rows="3"></textarea>
        </div>
<!--        <div class="form-group">-->
<!--            <label for="exampleInputFile">File input</label>-->
<!--            <input class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" type="file">-->
<!--            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>-->
<!--        </div>-->
        <fieldset class="form-group">
            <legend>Estado</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" name="status" id="status1" value=1 checked="" type="radio">
                    Activo
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input class="form-check-input" name="status" id="status2" value=0 type="radio">
                    Inactivo
                </label>
            </div>
<!--            <div class="form-check disabled">-->
<!--                <label class="form-check-label">-->
<!--                    <input class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="" type="radio">-->
<!--                    Option three is disabled-->
<!--                </label>-->
<!--            </div>-->
        </fieldset>
        <!--        <fieldset class="form-group">
                    <legend>Checkboxes</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" value="" checked="" type="checkbox">
                            Option one is this and that—be sure to include why it's great
                        </label>
                    </div>
                    <div class="form-check disabled">
                        <label class="form-check-label">
                            <input class="form-check-input" value="" disabled="" type="checkbox">
                            Option two is disabled
                        </label>
                    </div>
                </fieldset>
        -->        <button type="submit" class="btn btn-primary">Crear</button>
    </fieldset>
</form>