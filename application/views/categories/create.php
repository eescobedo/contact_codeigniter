<h2><?php echo $title; ?></h2>
<hr>
<?php echo validation_errors();
$attributes = array('id' => 'createCategoryForm');
echo form_open('categories/create', $attributes); ?>
<fieldset>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Nombre de categoría"
               type="text">
    </div>
    <div class="form-group">
        <label for="details">Detalles</label>
        <textarea class="form-control" id="details" name="details" rows="3"></textarea>
    </div>
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
    </fieldset>
    <button type="submit" class="btn btn-primary">Crear</button>
</fieldset>
</form>