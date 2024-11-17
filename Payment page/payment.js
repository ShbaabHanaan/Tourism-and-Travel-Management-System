function formatExpiryDate(input) {
    // Remove all non-digit characters
    let value = input.value.replace(/\D/g, '');
    
    // Check the length of the value
    if (value.length >= 2) {
        // If there are 2 digits, insert a "/" after them
        value = value.slice(0, 2) + '/' + value.slice(2, 6); // Limit to 4 digits for the year
    }
    // Limit to 7 characters (MM/YYYY)
    input.value = value.slice(0, 7);
}