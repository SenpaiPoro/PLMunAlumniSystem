document.getElementById('Department-type').addEventListener('change', function () {
    const Department = this.value;
    const Program = document.getElementById('program-option');

    // Clear previous options
    Program.innerHTML = '<option value="">Select</option>';

    // Define program options based on the selected department
    if (Department === 'CITCS') {
        const citcsOptions = ['Information Technology', 'Computer Science', 'ACT'];
        citcsOptions.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.toLowerCase().replace(/\s+/g, '-'); // Set value attribute (e.g., "information-technology")
            newOption.textContent = option; // Set display text
            Program.appendChild(newOption);
        });
    } else if (Department === 'CCJ') {
        const CCJOptions = ['Criminology'];
        CCJOptions.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.toLowerCase().replace(/\s+/g, '-'); // Set value attribute
            newOption.textContent = option; // Set display text
            Program.appendChild(newOption);
        });
    } else if (Department === 'CAS') {
        const CASOptions = ['Communication', 'Political Science', 'Psychology'];
        CASOptions.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.toLowerCase().replace(/\s+/g, '-'); // Set value attribute
            newOption.textContent = option; // Set display text
            Program.appendChild(newOption);
        });
    } else if (Department === 'CBA') {
        const CBAOptions = ['Business Administration', 'Accountancy'];
        CBAOptions.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.toLowerCase().replace(/\s+/g, '-'); // Set value attribute
            newOption.textContent = option; // Set display text
            Program.appendChild(newOption);
        });
    } else if (Department === 'CTE') {
        const CTEOptions = ['Elementary Education', 'Secondary Education'];
        CTEOptions.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.toLowerCase().replace(/\s+/g, '-'); // Set value attribute
            newOption.textContent = option; // Set display text
            Program.appendChild(newOption);
        });
    }
});