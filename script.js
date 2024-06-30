$(document).ready(function() {
    $('#add-education').click(function() {
        $('#education-fields').append('<input type="text" name="education[]" placeholder="Curso">');
    });

    $('#add-experience').click(function() {
        $('#experience-fields').append('<input type="text" name="experience[]" placeholder="Experiência Profissional">');
    });
});

