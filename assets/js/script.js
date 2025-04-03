document.addEventListener('DOMContentLoaded', function () {
    const departmentSelect = document.getElementById('Department-type');
    const programSelect = document.getElementById('program-option');

    function updatePrograms() {
        const department = departmentSelect.value;
        programSelect.innerHTML = ''; // Clear previous options to prevent duplicates

        let options = [];

        // Define programs based on the selected department
        if (department === 'CITCS') {
            options = ['Select', 'Information Technology', 'Computer Science', 'ACT'];
        } else if (department === 'CCJ') {
            options = ['Select', 'Criminology'];
        } else if (department === 'CAS') {
            options = ['Select', 'Communication', 'Political Science', 'Psychology'];
        } else if (department === 'CBA') {
            options = ['Select', 'Business Administration', 'Accountancy'];
        } else if (department === 'CTE') {
            options = ['Select', 'Elementary Education', 'Secondary Education'];
        }

        // Populate the program dropdown
        options.forEach(option => {
            const newOption = document.createElement('option');
            var newvalue;
            if(option === 'Select'){
                newvalue = "";
            }
            else{
                newvalue = option;
            }
            newOption.value = newvalue.toLowerCase().replace(/\s+/g, '-');
            newOption.textContent = option;
            programSelect.appendChild(newOption);
        });
    }

    // Listen for department selection changes
    departmentSelect.addEventListener('change', updatePrograms);

    // **Trigger the change event manually to auto-load CITCS programs**
    updatePrograms(); // Directly call the function instead of dispatching an event
});
