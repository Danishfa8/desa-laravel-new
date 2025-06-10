/**
 * Loading Bar Utility
 * 
 * This script provides functions to manually control the loading bar
 * from any part of the application.
 */

// Function to show loading bar
function showLoadingBar() {
    const loadingBar = document.getElementById('loading-bar');
    
    if (loadingBar) {
        loadingBar.style.width = '70%';
    }
}

// Function to complete loading bar
function completeLoadingBar() {
    const loadingBar = document.getElementById('loading-bar');
    
    if (loadingBar) {
        loadingBar.style.width = '100%';
        setTimeout(() => {
            loadingBar.style.width = '0%';
        }, 500);
    }
}

// Expose functions to window object
window.showLoadingBar = showLoadingBar;
window.completeLoadingBar = completeLoadingBar;

// Example usage for AJAX requests with fetch API
function fetchWithLoading(url, options) {
    showLoadingBar();
    
    return fetch(url, options)
        .then(response => {
            completeLoadingBar();
            return response;
        })
        .catch(error => {
            completeLoadingBar();
            throw error;
        });
}

// Expose fetch with loading to window object
window.fetchWithLoading = fetchWithLoading;
