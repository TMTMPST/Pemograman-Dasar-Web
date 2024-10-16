function generateList() {
    const numEntries = document.getElementById('numEntries').value;
    const listContainer = document.getElementById('listContainer');
    listContainer.innerHTML = '';

    for (let i = 0; i < numEntries; i++) {
        const entryDiv = document.createElement('div');
        entryDiv.className = 'mb-3';
        entryDiv.innerHTML = `
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="firstName${i}" placeholder="Nama Anda" required>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="lastName${i}" placeholder="Waifu Anda" required>
                </div>
            </div>
        `;
        listContainer.appendChild(entryDiv);
    }

    document.getElementById('submitBtn').style.display = 'block';
}

window.onload = function() {
    document.getElementById('numEntries').value = 1;
    generateList();
};