<h2><?php echo $title; ?></h2>
<?php echo validation_errors();
$attributes = array('id' => 'updateCategoryForm');
echo form_open('categories/update', $attributes); ?>
<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
<fieldset>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Nombre de categoría"
               type="text" value="<?php echo $category['name']; ?>">
    </div>
    <div class="form-group">
        <label for="details">Detalles</label>
        <textarea class="form-control" id="details" name="details"
                  rows="3"><?php echo $category['details']; ?></textarea>
    </div>
    <fieldset class="form-group">
        <legend>Estado</legend>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" name="status" id="status1"
                       value=1 <?php echo ($category['status'] == 1) ? 'checked' : ''; ?> type="radio">
                Activo
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" name="status" id="status2"
                       value=0 <?php echo ($category['status'] == 0) ? 'checked' : ''; ?> type="radio">
                Inactivo
            </label>
        </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</fieldset>
</form>