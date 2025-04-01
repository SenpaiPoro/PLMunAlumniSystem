document.addEventListener('DOMContentLoaded', function () {
    const departmentSelect = document.getElementById('Department-type');
    const programSelect = document.getElementById('program-option');

    function updatePrograms() {
        const department = departmentSelect.value;
        programSelect.innerHTML = ''; // Clear previous options to prevent duplicates

        let options = [];

        // Define programs based on the selected department
        if (department === 'CITCS') {
            options = ['Information Technology', 'Computer Science', 'ACT'];
        } else if (department === 'CCJ') {
            options = ['Criminology'];
        } else if (department === 'CAS') {
            options = ['Communication', 'Political Science', 'Psychology'];
        } else if (department === 'CBA') {
            options = ['Business Administration', 'Accountancy'];
        } else if (department === 'CTE') {
            options = ['Elementary Education', 'Secondary Education'];
        }

        // Populate the program dropdown
        options.forEach(option => {
            const newOption = document.createElement('option');
            newOption.value = option.toLowerCase().replace(/\s+/g, '-');
            newOption.textContent = option;
            programSelect.appendChild(newOption);
        });
    }

    // Listen for department selection changes
    departmentSelect.addEventListener('change', updatePrograms);

    // **Trigger the change event manually to auto-load CITCS programs**
    updatePrograms(); // Directly call the function instead of dispatching an event
});
