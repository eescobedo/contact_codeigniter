<h2><?php echo $title; ?></h2>
<hr>
<?php echo validation_errors();
$attributes = array('id' => 'updateCourseForm');
echo form_open('courses/update', $attributes); ?>
<input type="hidden" name="id" value="<?php echo $course['id']; ?>">
<fieldset>
    <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Nombre de curso" type="text" value="<?php echo $course['name'];?>">
    </div>
    <div class="form-group">
        <label for="details">Detalles</label>
        <textarea class="form-control" id="details" name="details" rows="3"><?php echo $course['details'];?></textarea>
    </div>
    <div class="form-group">
        <label for="schedule">Horario</label>
        <textarea class="form-control" id="schedule" name="schedule" rows="3"><?php echo $course['schedule'];?></textarea>
    </div>
    <div class="form-group">
        <label for="price">Precio</label>
        <input class="form-control" name="price" id="price" aria-describedby="priceHelp" placeholder="Precio de curso" type="text"  value="<?php echo $course['price'];?>">
    </div>
    <div class="form-group">
        <label for="categories">Categorías</label>
        <select class="form-control" id="categories" name="category_id">
            <option value="">Seleccione categoría</option>
            <?php foreach ($categories as $category) { ?>
                <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == $course['category_id']) ? 'selected' : ''; ?>><?php echo $category['name']; ?></option>
            <?php } ?>
        </select>
    </div>
<button type="submit" class="btn btn-primary">Actualizar</button>
</fieldset>
</form>