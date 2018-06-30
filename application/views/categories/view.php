<h2><?php echo $title; ?></h2>
<hr>

<fieldset>
    <div class="form-group">
        <label for="details">Detalles</label>
        <textarea class="form-control" id="details" name="details" rows="3" disabled><?php echo $category['details']; ?></textarea>
    </div>
    <fieldset class="form-group">
        <legend>Estado</legend>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" name="status" id="status1" value=1 <?php echo ($category['status'] == 1) ? 'checked' : ''; ?> type="radio" disabled>
                Activo
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" name="status" id="status2" value=0 <?php echo ($category['status'] == 0) ? 'checked' : ''; ?> type="radio" disabled>
                Inactivo
            </label>
        </div>
    </fieldset>
</fieldset>


<hr>
<div class="row">
    <div class="col-lg-4">
        <div class="btn-group" role="group" aria-label="Basic example">
            <div class="btn-group mr-2" role="group" aria-label="First group">
                <a class="btn btn-primary btn-block" href="/categories/edit/<?php echo $category['id']; ?>" role="button">Editar</a>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <a class="btn btn-secondary" href="/categories/courses/<?php echo $category['id']; ?>" role="button">Cursos</a>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Third group">
                <?php echo form_open('/categories/delete/' . $category['id']); ?>
                <input type="submit" value="Borrar" class="btn btn-danger" role="button">
                </form>
            </div>
        </div>
    </div>
</div>
