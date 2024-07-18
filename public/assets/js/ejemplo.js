document.getElementById('search').addEventListener('input', function() {
    let filter = this.value.toUpperCase();
    let table = document.querySelector('.table tbody');
    let rows = table.getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
        let cells = rows[i].getElementsByTagName('td');
        let match = false;

        for (let j = 0; j < cells.length; j++) {
            if (cells[j]) {
                let textValue = cells[j].textContent || cells[j].innerText;
                if (textValue.toUpperCase().indexOf(filter) > -1) {
                    match = true;
                    break;
                }
            }
        }

        if (match) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
});

document.getElementById('entries').addEventListener('change', function() {
    let selectedValue = this.value;
    // Aquí puedes agregar la lógica para cambiar la cantidad de entradas mostradas por página
});
