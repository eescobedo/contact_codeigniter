<h2><?php echo $title; ?></h2>
<hr>
<fieldset>
    <div class="form-group">
        <label for="details">Detalles</label>
        <textarea class="form-control" id="details" name="details" rows="3"
                  readonly><?php echo $course['details']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="schedule">Horario</label>
        <textarea class="form-control" id="schedule" name="schedule" rows="3"
                  readonly><?php echo $course['schedule']; ?></textarea>
    </div>
    <div class="form-group">
        <label for="price">Precio</label>
        <input class="form-control" name="price" id="price" aria-describedby="priceHelp" placeholder="Precio de curso"
               type="text" value="<?php echo $course['price']; ?>" readonly>
    </div>
    <div class="form-group">
        <label for="categories">Categorías</label>
        <select class="form-control" id="categories" name="category_id" readonly="" disabled>
            <?php foreach ($categories as $category) { ?>
                <option value="<?php echo $category['id']; ?>" <?php echo ($category['id'] == $course['category_id']) ? 'selected' : ''; ?>><?php echo $category['name']; ?></option>
            <?php } ?>
        </select>
    </div>
</fieldset>
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="btn-group" role="group">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <a class="btn btn-primary" href="/courses/edit/<?php echo $course['id']; ?>" role="button">Editar</a>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <?php echo form_open('/courses/delete/' . $course['id']); ?>
                <input type="submit" value="Borrar" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</div>