$(document).ready(function () {
    $('#createCourseForm').validate({
        rules: {
            name: 'required',
            details: 'required',
            schedule: 'required',
            price: {
                required: true,
                number: true
            },
            category_id: {
                required: true
            }
        },
        messages: {
            name: 'Ingrese nombre de curso',
            details: 'Ingrese detalles del curso',
            schedule: 'Ingrese horario del curso',
            price: 'Ingrese precio del curso',
            category_id: 'Seleccione una categoría'
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $('#updateCourseForm').validate({
        rules: {
            name: 'required',
            details: 'required',
            schedule: 'required',
            price: {
                required: true,
                number: true
            },
            category_id: {
                required: true
            }
        },
        messages: {
            name: 'Ingrese nombre de curso',
            details: 'Ingrese detalles del curso',
            schedule: 'Ingrese horario del curso',
            price: 'Ingrese precio del curso',
            category_id: 'Seleccione una categoría'
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $('#createCategoryForm').validate({
        rules: {
            name: 'required',
            details: 'required',
        },
        messages: {
            name: 'Ingrese nombre de categoría',
            details: 'Ingrese detalles de la categoría',
        },
        submitHandler: function (form) {
            form.submit();
        }
    });

    $('#updateCategoryForm').validate({
        rules: {
            name: 'required',
            details: 'required',
        },
        messages: {
            name: 'Ingrese nombre de categoría',
            details: 'Ingrese detalles de la categoría',
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});